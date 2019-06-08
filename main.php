	<?php 

$title_name = 'НКСЭ расписание';
require 'include/config.php';
require 'include/function.php';

$this_url = $home_url . '/app/main.php';
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
			<?php 
				$teach_array = array($schudule_list[0]['TeacherName']);
				for ($i=0; $i < $schudule_count; $i++) {

					if (!array_key_exists($schudule_list[$i]['TeacherName'], $teach_array)) {
						$teach_array[] .= $schudule_list[$i]['TeacherName'];
					}
					$teach = array_unique($teach_array);
					if (!empty($teach[$i])) {
						echo "<button>";
						echo "<a href='".$this_url."?teacher=".$teach[$i]."&week_day=".$week_day."'>";
						echo($teach[$i]);
						echo "</a>";
						echo "</button>";
					}
				}
				
			?>
		</div>
		<?php if (isset($_GET['teacher'])): ?>
		<div class="schudule_teacher">
			<button class="close_button" onclick="$(this).parent().hide(300);$('.responsive_menu').show(300);">Закрыть</button>
			<div class="schudule_teacher_container">
			<?
			for ($i=0; $i < $tch_sch_count; $i++) { 
				?>
				<div class="schudule_teacher_block">
					<span class="group"><?php echo($tch_sch_list[$i]['GroupName']);?></span>
					<span class="num"><?php echo($tch_sch_list[$i]['Num']);?></span>
					<span class="name"><?php echo($tch_sch_list[$i]['Name']);?></span>
					<span class="time"><?php echo($tch_sch_list[$i]['Time']);?></span>
					<span class="teacher"><?php echo($tch_sch_list[$i]['TeacherName']);?></span>
					<span class="room"><?php echo($tch_sch_list[$i]['NumRoom']);?></span>
				</div>
				<?php
			}
			?>
			</div>
		</div>
		<?php endif ?>

	</div>
		<?php 

		for ($i=0; $i < $dep_count; $i++) { 
			?>
				<div class="schedule_group_array">
					<?php 
					for ($k=0; $k < $group_count; $k++) { 
						if ($group_list[$k]['Dep_code'] == $dep_list[$i]['Name']) {
							?>
							<div class="schedule_group_item"><button><?php echo($group_list[$k]['NameGroup']);?></button></div>
							<?php
						}	
					}?>
				</div>
			<?php
		}

		?>

		<!-- Deportment list in bottom -->
		

		<?php
		for ($i=0; $i < $dep_count; $i++) { 
			?>

			<div class="schedule_box_array">
				<?php 
				for ($j=0; $j < $group_count; $j++) { 
					
					if ($group_list[$j]['Dep_code'] == $dep_list[$i]['Name']) {
						?>
						<div class="schedule_box ">
						<div class="group"><?php echo($group_list[$j]['NameGroup']);?></div>
						<div class="schedule_list">
							<?php
							$schudule_AI = 0;
							for ($k=0; $k < $schudule_count; $k++) { 
								if ($schudule_list[$k]['GroupName'] == $group_list[$j]['NameGroup']) {
									$schudule_AI++;
									?>
									<div class="schelude_item">
									<span class="lesson_num"><?php echo($schudule_list[$k]['Num']);?></span>
									<p class="lesson_name"><?php echo($schudule_list[$k]['Name']);?></p>
									<span class="time"><?php echo($schudule_list[$k]['Time']);?></span>
									
									<span class="teacher"><?php echo($schudule_list[$k]['TeacherName']);?></span>
									<span class="cabinet">B<?php echo($schudule_list[$k]['NumRoom']);?></span>
									</div>
									<?php
								}

							}
							if ($schudule_AI==0) {
									?>
									<div class="schedule_notfound">
										<span>Расписание не готово</span>
									</div>
									<?php
								}
							?>
						</div>
						</div>
						<?php
					}
				}

				?> 
			</div>
			<?php
		}
		?>

	</div>

	<script src="js/scripts.min.js"></script>
	<script type="text/javascript">
		if (document.documentElement.clientWidth <= 768 && window.location.href != "http://nkseinterface/app/mobile_main.php") {
			window.location.href = "http://nkseinterface/app/mobile_main.php"
		}
		$('.week_button').eq(<?php echo($week_int);?>).addClass('active');
		$('#week_branch').text($('.week_button').eq(<?php echo($week_int);?>).text())
	</script>
</body>
</html>
