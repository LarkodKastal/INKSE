<?php 

$title_name = 'НКСЭ расписание';
require 'include/config.php';
require 'include/function.php';

$this_url = $home_url . '/mobile_main.php';
$connect = MYSQL_INCLUDE('get_connect');

/* Запрос данных о расписании */
$schudule_list 	= get_schudule_date('list','','all');
$schudule_count = get_schudule_date('count','','all');
$sch_list_item 	= get_schudule_date('list');
$sch_list_count = get_schudule_date('count');
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

/* Определитель темы стилилизыции */
$theme_name		= get_theme_date('name');
$style_accent 	= get_theme_date('accent');
$style_body 	= get_theme_date('body');
$style_text 	= get_theme_date('text');
$style_light 	= get_theme_date('light');
$style_light_t 	= get_theme_date('light_t');
////////////////////////////////////

require 'include/header.php';

?>

<body>
	<div class="responsive_menu">
		<span id="week_branch" class="def_text"></span>
		<div class="respons_control_menu">
			<span id="week_branch"></span>
			<?php if (isset($_COOKIE['group_name'])): ?>
				<span id="group " class="def_text">Записанная группа-<b><?php echo $_COOKIE['group_name']; ?></b></span>
			<?php endif ?>
			<button class="show_button accent_element_05" onclick="$('.find_teacher').show(300); clear_schudule_active();">Найти преподавателя</button>
			<button class="accent_element_05" onclick="$('.week_menu').show(300);">Выбрать день недели</button>
			<button class="accent_element_05" onclick="$('.nav_menu').show(300);">Выбрать отделение и группу</button>
		</div>
		<?php if (isset($_COOKIE['group_name']) or isset($_GET['group_name'])): ?>
			<div class="respons_schedule">
				<form action="<?php echo $page_url . '/rember.php'; ?>"><button name="group" class="accent_element_05" value="<?php echo $group_name ?>">Запомнить</button></form>
				<span class="title def_text"><?php echo($group_name);?></span>
				<?php if (!is_actual($schudule_list)){ ?>
						<span class="noactual">Информация не актуальна</span>
						<a href="<?php echo $this_url . '?&week_day=Пн&no_output=true&write_to_DB=write&AutoWeek=true&week_day='.$week_day ?>">Обновить базу</a>
					<?php 
						if (isset($_GET['write_to_DB'])) {
							include('include/parcer.php');
						}
					} ?>
				<?php for ($l=0; $l < $sch_list_count; $l++) { 
					?>
					<div class="respons_item accent_element_contblock <?php if ($sch_num != $sch_list_item[$l]['Num']) { echo " border";}?>" >
						<?php if ($sch_num != $sch_list_item[$l]['Num']): ?>
							<span class="num"><?php echo($sch_list_item[$l]['Num']);?></span>
							<span class="name"><?php echo($sch_list_item[$l]['Name']);?></span>
						<?php endif ?>
						<span class="time"><?php echo($sch_list_item[$l]['Time']);?></span>
						<span class="teacher"><?php echo($sch_list_item[$l]['TeacherName']);?></span>
						<span class="room"><?php echo($sch_list_item[$l]['NumRoom']);?></span>
					</div>
					<?php $sch_num = $sch_list_item[$l]['Num'];
				}?>
				<?php if ($sch_list_count == 0): ?>
					<div class="respons_notfound accent_element_05">
						<span>Расписание не готово</span>
					</div>
				<?php endif ?>
			</div>
		<?php endif ?>
	</div>
	<?php $theme_list=array('classic','dark_magenta','dark_green','white_magenta','white_green');?>
	<div class="interface_container">
		<div class="logo" >
			<img onclick="$('.theme_container').show(300);" src="<?php echo $img_url . '/logo_' . $theme_name ?>.png" alt="">
		</div>
		<div class="theme_container body_element">
				<div class="closes_button accent_element_1" onclick="$(this).parent().hide(300)">Закрыть</div>
				<div class="theme_list">
				<?php foreach ($theme_list as $key => $value): ?>
				<div class="theme_block">
					<img onclick="$(this).parent().find('.form_container').show(300)" src="<?php echo($img_url . '/demo_' . $value . '.png');?>" alt="">
					<div class="form_container">
					<form class="body_element" action="<?php echo($page_url . '/edit_theme.php');?>">
						<label class="def_text" for="">Вы точно хотите изменить тему на <?php echo $value ?>?</label>
						<button class="accent_element_05" type="submit" name="theme_name" value="<?php echo $value ?>">Да</button>
						<div class="close_button accent_element_05" onclick="$(this).parent().parent().hide(300);">Нет</div>
					</form>
					</div>
				</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="nav_menu body_element">
		<?php 
		for ($i=0; $i < $dep_count; $i++) { 
			?>
				<button 
				class="nav_button accent_element_light" 
				onclick="$('.schedule_container').show(300)" 
				alt='<?php echo $dep_list[$i]["Full_name"]?>'>
				<?php echo $dep_list[$i]["Name"]?>
				</button>
			<?php
		}
		?>
		<button class="close_button accent_element_light" onclick="$('.nav_menu').hide(300)">Назад</button>
	</div>
	<div class="week_menu body_element">
		<?php
		for ($i=0; $i < 6; $i++) {
			if ($week_list[$i] == $week_day) {
			 	$week_int = $i;
			 } 
			?>
			<button class="week_button accent_element_light">
			<a href="<?php echo $this_url . '?&week_day='.$week_list[$i]; ?>"><?php echo($full_week_list[$i]); ?></a>
			</button>
			<?php
		}
		?>
	</div>

	<div class="find_teacher">
		<div class="teach_list body_element">
				<button class="close_button accent_element_1" onclick="$('.find_teacher').hide(300);$('.responsive_menu').show(300);">Закрыть</button>
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
					$full_alfov = 'А.Б.В.Г.Д.Е.Ё.Ж.З.И.Й.К.Л.М.Н.О.П.Р.С.Т.У.Ф.Ч.Ц.Ч.Ш.Щ.Э.Ю.Я';
					$full_alfov = explode('.', $full_alfov);
					$full_alfov_array = array();
					foreach ($full_alfov as $key => $value) {
						foreach ($alfov as $skey => $svalue) {
							if ($value == $svalue) {
								$full_alfov_array[count($full_alfov_array)] = $value;
							}
						}
					}
					$full_alfov_array = array_unique($full_alfov_array);
					
					foreach ($full_alfov_array as $Akey => $Avalue) {?>
						<div class='alfov_container'>
						<button class='alfov_title accent_element_07' onclick='
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
								echo "<button class='teach_block accent_element_05'>";
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
				<div class="schudule_teacher body_element">
					<button class="close_button accent_element_05" onclick="$(this).parent().hide(300);$('.responsive_menu').show(300);">Закрыть</button>
					<div class="schudule_teacher_container body_element">
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
	</div>

	<?php if (isset($_GET['teacher'])): ?>
		<div class="schudule_teacher body_element">
			<button class="close_button accent_element_05" ><a href="<?php echo $this_url;?>">Закрыть</a></button>
			<div class="schudule_teacher_container">
			<?
			for ($i=0; $i < $tch_sch_count; $i++) { 
				if ($tch_num != $tch_sch_list[$i]['Num']): ?>
				<div class="schudule_teacher_block accent_element_contblock">
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
	
	<div class="schedule_container">
		<div class="branch_nav">
			<span id="week_branch"></span>
		</div>
		<div class="find_teacher">
			<button class="show_button" onclick="$(this).parent().find('.teach_list').show(300); clear_schudule_active();">Найти преподавателя</button>
			<div class="teach_list">
				<button class="close_button accent_element_05" onclick="$(this).parent().hide(300);$('.responsive_menu').show(300);">Закрыть</button>
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
						<button class='alfov_title accent_element_05' onclick='
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
								echo "<button class='teach_block accent_element_05'>";
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
				<div class="schudule_teacher body_element">
					<button class="close_button accent_element_05" onclick="$(this).parent().hide(300);$('.responsive_menu').show(300);">Закрыть</button>
					<div class="schudule_teacher_container">
					<?
					for ($i=0; $i < $tch_sch_count; $i++) { 
						?>
						<?php if ($tch_num != $tch_sch_list[$i]['Num']): ?>
						<div class="schudule_teacher_block accent_element_contblock">
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
			echo '<div class="schedule_group_array body_element'.$active_class.'">';
			?>
			<button class="close_button accent_element_05" onclick="$('.schedule_container').hide(300)">Закрыть</button>
			<?php
			if (is_array($alfov_group[$Dkey])) {
				$alfov_group[$Dkey] = array_unique($alfov_group[$Dkey]);
			$al_AI = 0;
			foreach ($alfov_group[$Dkey] as $Gkey => $Gvalue) {
				echo "<div class='alfov_container'>";?>
				<button class="show_group accent_element_07"><?php echo $Gvalue ?></button>
				<?php
				foreach ($group_list as $key => $value) {
					if (substr($value['NameGroup'], 0 ,  strpos( $value['NameGroup'], '-' )) == $Gvalue) {
						?>
						<div class="alfov_block ">
							<form action="<?php echo $this_url ?>">
								<input type="hidden" name="week_day" value="<?php echo $week_day ?>">
								<button name="group_name" class="accent_element_05" value="<?php echo $value['NameGroup'] ?>"><?php echo($value['NameGroup']);?></button>
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

		
		?>

	</div>

	<style>
		body
		{
			background: <?php echo $style_body;?>;
		}
		a
		{
			color: <?php echo $style_text;?>;
		}
		.body_element
		{
			background: <?php echo $style_body;?> !important;
		}
		.def_text
		{
			color: <?php echo $style_text;?>;
		}
		.interface_container
		{
			background: <?php echo $style_body;?>;
		}
		.accent_element_1
		{
			background: rgba(<?php echo $style_accent;?>,1) !important;
			color: <?php echo $style_text;?>;
			border: none !important;
		}
		.accent_element_07
		{
			background: rgba(<?php echo $style_accent;?>,0.7) !important;
			color: <?php echo $style_text;?> !important;
			border: none !important;
		}
		.accent_element_05
		{
			background: rgba(<?php echo $style_accent;?>,0.5) !important;
			color: <?php echo $style_text;?> !important;
			border: none !important;
		}
		.accent_element_03
		{
			background: rgba(<?php echo $style_accent;?>,0.3) !important;
			color: <?php echo $style_text;?> !important;
			border: none !important;
		}
		.accent_element_contblock
		{
			background: rgba(<?php echo $style_accent;?>,0.5) !important;
			color: <?php echo $style_text;?>;
			border-left: 1px solid rgba(<?php echo $style_accent;?>,1);
			border-right: 1px solid rgba(<?php echo $style_accent;?>,1);
			border-top: 1px solid rgba(<?php echo $style_accent;?>,1);
		}
		.accent_element_contblock span
		{
			border: 1px solid rgba(<?php echo $style_accent;?>,1);
		}
		.accent_element_contblock.border
		{
			border-top: 5px solid rgba(<?php echo $style_accent;?>,1);
		}
		.accent_element_border
		{
			background: none !important;
			color: <?php echo $style_text;?>;
			border: none !important;
		}
		.accent_element_light
		{
			background: none !important;
			color: <?php echo $style_light_t;?> !important;
			border: 1px solid <?php echo $style_light;?> !important;
			box-shadow: 0 0 10px <?php echo $style_light;?> !important;
		}
		.accent_element_1 a,.accent_element_07 a,.accent_element_05 a,.accent_element_03 a,.accent_element_contblock a,.accent_element_border a,.accent_element_light a
		{
			color: <?php echo $style_text;?> !important;
		}
		.accent_element_light.active
		{
			border: 1px solid <?php echo $style_text;?> !important;
			box-shadow: 0 0 10px <?php echo $style_text;?> !important;
			color: <?php echo $style_light;?> !important;
		}
		.accent_element_light a
		{
			color: <?php echo $style_light_t;?> !important;
		}
		.accent_element_light.active a
		{
			color: <?php echo $style_text;?> !important;
		}
		
		
	</style>



	<script src="js/scripts.min.js"></script>
	<script type="text/javascript">
		if (document.documentElement.clientWidth >= 768 && window.location.href != "<?php echo $home_url; ?>/main.php") {
			window.location.href = "<?php echo $home_url; ?>/main.php"
		}
		<?php if (isset($_GET['write_to_DB'])): ?>
			window.location.href = "<?php echo $this_url; ?>"
		<?php endif ?>
		$('.week_button').eq(<?php echo($week_int);?>).addClass('active');
		$('#week_branch').text($('.week_button').eq(<?php echo($week_int);?>).text())
	</script>
</body>
</html>
