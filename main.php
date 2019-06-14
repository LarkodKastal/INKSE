	<?php 

$title_name = 'НКСЭ расписание';
require 'include/config.php';
require 'include/function.php';

$this_url = $home_url . '/main.php';
$connect = MYSQL_INCLUDE('get_connect');


/* Запрос данных о расписании */
$schudule_list 	= get_schudule_date('list','','all');
$schudule_count = get_schudule_date('count','','all');
$group_name 	= get_schudule_date('group');
$week_day		= get_schudule_date('day');
$dep_name		= get_schudule_date('dep');
////////////////////////////////

/* Запрос данных о учителях */
$tch_sch_list	= get_teacher_date('list');
$tch_sch_count	= get_teacher_date('count');
//////////////////////////////

/* Запрос списка групп */
$group_list 	= get_group_date('list');
$group_count 	= get_group_date('count');
$week_list		= get_group_date('week');
$full_week_list = get_group_date('full_week');
/////////////////////////

/* Запрос списка отделений */
$dep_list 		= get_departament_date('list');
$dep_count 		= get_departament_date('count');
/////////////////////////////

require 'include/header.php';

?>

<body>
	<div class="interface_container">
		<div class="logo">
			<img src="img/logo-nkse.png" alt="">
		</div>
	</div>
	<div class="nav_menu">
		<?php 
		for ($i=0; $i < $dep_count; $i++) { 
			?>
				<button 
				class="nav_button" 
				alt='<?php echo $dep_list[$i]["Full_name"]?>'>
				<?php echo $dep_list[$i]["Name"]?>
				</button>
			<?php
		}
		?>
	</div>
	<div class="week_menu">
		<?php
		for ($i=0; $i < 6; $i++) {
			if ($week_list[$i] == $week_day) {
			 	$week_int = $i;
			 } 
			?>
			<button class="week_button">
			<a href="<?php echo $this_url . '?&week_day='.$week_list[$i]; ?>"><?php echo($full_week_list[$i]); ?></a>
			</button>
			<?php
		}
		?>
	</div>
	
	<div class="schedule_container">
		<div class="branch_nav">
			<span id="week_branch"></span>
		</div>
		<div class="find_teacher">
			<button class="show_button" onclick="$(this).parent().find('.teach_list').show(300); clear_schudule_active();">Найти преподавателя</button>
			<div class="teach_list">
				<button class="close_button" onclick="$(this).parent().hide(300);$('.responsive_menu').show(300);">Закрыть</button>
				<div class="teach_container">
				
				<?php 
					$teach_array = array($schudule_list[0]['TeacherName']);
					$alfov = array();
					foreach ($schudule_list as $key => $value) {
						if ($value['TeacherName'] == 'Не указан') {
							continue;
						}
						$teach_array[count($teach_array)] = $value['TeacherName'];
					}
					$teach_array = array_unique($teach_array);
					foreach ($teach_array as $key => $value) {
						if (!empty($value)) {
							$alfov[count($alfov)] = substr($value, 0, 2);
						}
					}
					$alfov = array_unique($alfov);
					
					foreach ($alfov as $Akey => $Avalue) {?>
						<div class='alfov_container'>
						<button class='alfov_title' onclick='
						if ($(this).hasClass("active")) {
							$(this).parent().find(".teach_block").hide(300); 
							$(this).removeClass("active");
						}
						else
						{
							$(this).parent().find(".teach_block").show(300); 
							$(this).addClass("active");
						}
						'>
							<?php echo($Avalue);?>
						</button>
						<?
						foreach ($teach_array as $key => $value) {
							if (substr($value, 0, 2) == $Avalue) {
								echo "<button class='teach_block'>";
								echo "<a href='".$this_url."?teacher=".$value."&week_day=".$week_day."'>";
								echo($value);
								echo "</a>";
								echo "</button>";
							}
						}
						?></div>
						<?php
					}
					
				?>
				</div>
				</div>	
				<?php if (isset($_GET['teacher'])): ?>
				<div class="schudule_teacher">
					<button class="close_button" onclick="$(this).parent().hide(300);$('.responsive_menu').show(300);">Закрыть</button>
					<div class="schudule_teacher_container">
					<?
					for ($i=0; $i < $tch_sch_count; $i++) { 
						?>
						<?php if ($tch_num != $tch_sch_list[$i]['Num']): ?>
						<div class="schudule_teacher_block">
							<span class="group"><?php echo($tch_sch_list[$i]['GroupName']);?></span>
							<span class="num"><?php echo($tch_sch_list[$i]['Num']);?></span>
							<span class="name"><?php echo($tch_sch_list[$i]['Name']);?></span>
							<span class="time"><?php echo($tch_sch_list[$i]['Time']);?></span>
							<span class="teacher"><?php echo($tch_sch_list[$i]['TeacherName']);?></span>
							<span class="room"><?php echo($tch_sch_list[$i]['NumRoom']);?></span>
						</div>
						<?php endif ?>
						<?php $tch_num = $tch_sch_list[$i]['Num'];
					}
					?>
					</div>
				</div>
				<?php endif ?>
			</div>
		<?php 
		$alfov_group = array();
		foreach ($dep_list as $Dkey => $Dvalue) {
			
			foreach ($group_list as $key => $value) {
				if ($Dvalue['Name'] == $value['Dep_code']) {
					$alfov_group[$Dkey][$key] = substr($value['NameGroup'], 0 ,  strpos( $value['NameGroup'], '-' ));
					?>
						
					<?php
				}
				
			}	
		}


		foreach ($dep_list as $Dkey => $Dvalue) {
			$active_class = '';
			foreach ($group_list as $key => $value) {
				if ($value['NameGroup'] == $_GET['group_name'] && $value['Dep_code'] == $Dvalue['Name']) {
					$active_class = ' active';
				}
			}
			echo '<div class="schedule_group_array'.$active_class.'">';
			if (is_array($alfov_group[$Dkey])) {
				$alfov_group[$Dkey] = array_unique($alfov_group[$Dkey]);
			$al_AI = 0;
			foreach ($alfov_group[$Dkey] as $Gkey => $Gvalue) {
				echo "<div class='alfov_container'>";
				echo '<button class="show_group">'.$Gvalue.'</button>';
				foreach ($group_list as $key => $value) {
					if (substr($value['NameGroup'], 0 ,  strpos( $value['NameGroup'], '-' )) == $Gvalue) {
						?>
						<div class="alfov_block">
							<form action="<?php echo $this_url ?>">
								<button name="group_name" value="<?php echo $value['NameGroup'] ?>"><?php echo($value['NameGroup']);?></button>
							</form>
						</div>
						<?php 
					}
				}
				echo('</div>');
				
			}
			}
			echo '</div>';
		}

		
		if (isset($_GET['group_name'])) {
		?>
		<div class="schedule_box ">
				<div class="group"><?php echo($_GET['group_name']);?></div>
				<button class="schedule_up schedule_push">Вверх</button>
				<button class="schedule_down schedule_push">Вниз</button>
				<div class="schedule_block">
					<div class="schedule_scroll">
						<div class="schedule_list">
							<?php
							$schudule_num = 0;
							$sch_AI = 0;
							foreach ($schudule_list as $key => $value) {
								
								if ($value['GroupName'] == $_GET['group_name']) {
									$sch_AI++;	
									?>
									<div class="schelude_item <?php if ($schudule_num != $value['Num']){ 	echo " border"; }?>">
									<?php if ($schudule_num != $value['Num']): ?>
										<span class="lesson_num"><?php echo($value['Num']);?></span>
										<p class="lesson_name"><?php echo($value['Name']);?></p>
									<?php endif ?>

									<span class="time"><?php echo($value['Time']);?></span>
									
									<span class="teacher"><?php echo($value['TeacherName']);?></span>
									<span class="cabinet"><?php echo($value['NumRoom']);?></span>
									</div>
									<?php

									$schudule_num = $value['Num'];
								}
							}
							if ($sch_AI == 0) {
								?>
								<div class="schedule_notfound">
									<span>Расписание не готово</span>
								</div>
								<?php
							}
							?>
						</div>
					</div>
			</div>
		</div>
	<?php } ?>

	</div>

	<script src="js/scripts.min.js"></script>
	<script type="text/javascript">
		if (document.documentElement.clientWidth <= 768 && window.location.href != "<?php echo $home_url; ?>/mobile_main.php") {
			window.location.href = "<?php echo $home_url; ?>/mobile_main.php"
		}
		$('.week_button').eq(<?php echo($week_int);?>).addClass('active');
		$('#week_branch').text($('.week_button').eq(<?php echo($week_int);?>).text())
	</script>
</body>
</html>
