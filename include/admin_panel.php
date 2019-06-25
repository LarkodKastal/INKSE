<?php

if (!isset($_COOKIE['logining'])) {
	header('Location: ' . $home_url . '/admin.php');
}

$title_name = 'Админ панель';

require('config.php');
require('function.php');

$connect = MYSQL_INCLUDE('get_connect');
$this_url = $home_url . '/include/admin_panel.php';
$screen = 0;
if (isset($_GET['screen'])) {
	$screen = $_GET['screen'];
	setcookie('screen',$screen,time()+60*60*60);
}
else{
if (isset($_COOKIE['screen'])) {
	$screen = $_COOKIE['screen'];
}
}


/* Запрос данных пользователей   */
$user_list 	= get_user_date('list');
$user_count = get_user_date('count');
$user_field = get_user_date('field');
///////////////////////////////////

/* Запрос данных о расписании */
$schudule_list 	= get_schudule_date('list','write');
$schudule_count = get_schudule_date('count');
$group_name 	= get_schudule_date('group');
$week_day		= get_schudule_date('day');
$dep_name		= get_schudule_date('dep');
////////////////////////////////

/* Запрос списка групп */
$group_list 	= get_group_date('list');
$group_count 	= get_group_date('count');
$week_list		= get_group_date('week');
/////////////////////////

/* Запрос списка отделений */
$dep_list 		= get_departament_date('list');
$dep_count 		= get_departament_date('count');
/////////////////////////////

/* Запрос списка шаблонов */
$tem_list 		= get_tamplate_date('list',$dep_name);
$tem_count 		= get_tamplate_date('count',$dep_name);
////////////////////////////
require('header.php');
?>

<div class="PAGE_admin_panel">
	<div class="success_list hic">
		<?php if (isset($_GET['success']))
		{ 
			echo "<p>".$_GET['success']."</p>";
		}
		?>
	</div>
	<div class="error_list hic">
		<?php if (isset($_GET['error']))
		{ 
			echo "<p>".$_GET['error']."</p>";
		}
		?>
	</div>
	<div class="control_container">
		<div class="control_menu">
			<img src="../img/logo-nkse.png" alt="" class="logo">
			<button class="control_buttons"><a href="<?php echo($this_url.'?screen=0');?>">Пользователи</a></button>
			<button class="control_buttons "><a href="<?php echo($this_url.'?screen=1');?>">Расписание</a></button>
			<button class="control_buttons"><a href="<?php echo($this_url.'?screen=2');?>">Группы и отделения</a></button>
			<?php if (is_admin() or is_manager()): ?>
			<button class="control_buttons"><a href="<?php echo($this_url.'?screen=3');?>">Шаблоны</a></button>
			<?php endif ?>
			<?php if (is_admin()): ?>
			<button class="control_buttons"><a href="<?php echo($this_url.'?screen=4');?>">Парсинг</a></button>
			<?php endif ?>
		</div>
	</div>
	
	<div class="users_container control_dir">
		<div class="users_menu">
			<?php if (is_admin()): ?>
				<div class="create_window">
				<button class="create_button">Создать пользователя</button>
				<div class="form_create_user">
					<form 
					action="<?php echo($home_url . '/page/create_user.php');?>"
					method="get">
						<input placeholder="Наименование" type="text" name="username">
						<input placeholder="Пороль" type="text" name="password">
						<select name="access">
							<option disabled selected>Права доступа</option>
							<option value="MainRoot">MainRoot</option>
							<option value="manager">manager</option>
							<option value="viziter">viziter</option>
						</select>
						<button type="submit" value="<?php echo $user_count+1;?>">Ок</button>
						<div class="cancel_button">
							<span>Отмена</span>
						</div>
					</form>
				</div>
			</div>
			<?php endif ?>
			<?php
			for ($i=0; $i < $user_field; $i++) {
				echo "<ul>";
				for ($j=0; $j < $user_count+1; $j++) { 
					echo '<li>'.$user_list[$j][$i].'</li>';
					}
				echo "</ul>";
			}
			?>
			<?php if (is_admin()) { ?>
			<div class="tool_container">
				<div class="tool_list">
					<ul>
						<li style="background: none;"></li>
						<?php
						for ($h=1; $h < $user_count+1; $h++) {echo ("
							<li>
							<button
							class = 'change_button'>
							<img src='".$img_url."/change.png' title='Изменить'>
							</button>
							<div class='change_window'>
								<form 
								action = '".$page_url."/change_user.php'
								method = 'get'>
								<input required
								type  = 'text' 
								name  = 'name'
								value = '".$user_list[$h][1]."'>
								<input required 
								type  = 'text' 
								name  = 'password'
								value = '".$user_list[$h][2]."'>
								<select required name='access[]'>
								<option disabled selected>
								Право доступа
								</option>
								<option value='MainRoot'>
								MainRoot
								</option>
								<option value='manager'>
								Manager
								</option>
								<option value='visiter'>
								Visiter
								</option>
								</select>
								<button 
								type = 'submit'
								name = 'Change_User'
								value = '".$h."'
								>
								Изменить
								</button>
								</form>
							</div>
							</li>
							");
						 } 
						?>
					</ul>
					<ul>
						<form action="<?php echo($page_url.'/delete_user.php'); ?>" method="get">
							<li style="background: none;"></li>
							<?php
							for ($h=1; $h < $user_count+1; $h++) {echo ("
								<li>
								<div class='C_show_delete_wind'>
								<img src='".$img_url."/delete.png' title='Удалить'>
								</div>
								<div class='delete_window'>
									<span>Вы уверены?</span>
									<div class='flex_container flex_jcc'>
										<button 
										type='submit'
										name='Delete_User'
										value='".$h."'
										>Да</button>
										<div class='C_close_delete_wind'>Нет
										</div>
									</div>
								</div>
								</li>
								");
							 } 
							?>
						</form>
					</ul>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>

	<div class="schudule_container control_dir ">
		<div class="schudule_menu">
			<ul class="group_list">
				<li>Группы</li>
				<?php for ($i=0; $i < $group_count; $i++) { ?>
						<li class="group_item"><a href="<?php echo $this_url . '?group_name='.$group_list[$i]["NameGroup"].'&week_day=' . $week_day; ?>"><?php echo($group_list[$i]["NameGroup"]);?></a></li>
					<?
				} ?>
			</ul>
			<ul class="week_list">
				<?php

				for ($i=0; $i < 6; $i++) { 
					?>
					<li class="week_item"><a href="<?php echo $this_url . '?group_name='.$group_name.'&week_day='.$week_list[$i]; ?>"><?php echo($week_list[$i]); ?></a></li>
					<?php 
				}
				?>
			</ul>
			<div class="schudule_setting">
				<div class="info_box">
					<span>Группа - <?php echo($group_name);?></span>
					<span>День - <?php echo($week_day);?></span>
					<span>Отделение - <?php echo($dep_name);?></span>
				</div>
				<?php 
					for ($i=0; $i < $schudule_count; $i++) { 
						?>
							<div class="schudule_item">
							<?php if (is_admin() or is_manager()): ?>
								<div class="choice_wind">
								<button onclick="$(this).parent().parent().find('.change_wind').show(300);" title="Изменить"><img src="<?php echo $img_url.'/change.png';?>" alt=""></button>
								<button onclick="$(this).parent().parent().find('.delete_wind').show(300);" title="Удалить"><img src="<?php echo $img_url.'/delete_white.png';?>" alt=""></button>
							</div>
							<div class="delete_wind hic">
								<form action="<?php echo($page_url . '/delete_schudule.php');?>">
									<label for="">Вы уверены?</label>
									<button type="submit" name='id' value="<?php echo($schudule_list[$i]['id']);?>">Да</button>
									<div class="close_button" onclick="$(this).parent().parent().hide(300);" >
										Нет
									</div>
								</form>
							</div>
							<div class="change_wind hic">
							<form action="<?php echo($page_url.'/change_schudule.php');?>">
								<input 
							class="num" 
							type="number" 
							name="num"
							placeholder="№"
							value="<?php echo($schudule_list[$i]['Num']); ?>">
							<textarea
							class="name"
							name="name"
							placeholder="Наименование"
							
							><?php echo($schudule_list[$i]['Name']); ?></textarea>
							<input 
							class="time" 
							type="time" 
							name="time"
							placeholder="Время"
							value="<?php echo($schudule_list[$i]['Time']); ?>">
							<input 
							class="teacher" 
							type="text" 
							name="teacher"
							placeholder="ФИО"
							value="<?php echo($schudule_list[$i]['TeacherName']); ?>">
							<input 
							class="room" 
							type="number" 
							name="room"
							placeholder="№ каб."
							value="<?php echo($schudule_list[$i]['NumRoom']); ?>">
							<input 
							type="hidden" 
							value="<?php echo $group_name;?>"
							name='group'>
							<input 
							type="hidden" 
							value="<?php echo $week_day;?>"
							name='week_day'>
							<button type="submit" name="id" value="<?php echo($schudule_list[$i]['id']);?>">Изменить</button>
							</form>
							</div>
							<?php endif ?>
							<span class="num"><?php echo($schudule_list[$i]['Num']); ?></span>
							<span class="name"><?php echo($schudule_list[$i]['Name']); ?></span>
							<span class="time"><?php echo($schudule_list[$i]['Time']); ?></span>
							<span class="teacher"><?php echo($schudule_list[$i]['TeacherName']); ?></span>
							<span class="room"><?php echo($schudule_list[$i]['NumRoom']); ?></span>
							</div>
						<?php
					}
				?>
				<?php if (is_admin() or is_manager()): ?>
					<div class="add_schudule_button">
					<button onclick="$('.tamplate_setting').show(300);">+</button>
					</div>
				<?php endif ?>
			</div>
			<div class="schudule_option">
				<?php if (is_admin() or is_manager()): ?>
				<ul class="create_menu">
					<li><span>Создать группу</span>
						<form action="<?echo($page_url.'/create_group.php');?>">
							<input type="text" name="name" placeholder="Наименование">
							<select name="deportment">
								<option selected disabled>Отделение</option>
								<?php

								for ($i=0; $i < $dep_count; $i++) { 
									echo('<option>'.$dep_list[$i]['Name'].'</option>');
								}

								?>
							</select>
							<input type="submit"></input>
						</form>
					</li>
					<li><span>Создать отделение</span>
						<form action="<?php echo($page_url.'/create_department.php');?>">
							<input type="text" name="name" placeholder="Краткое наименование">
							<textarea name="full name" id="" cols="30" rows="10">Полное наименование</textarea>
							<input type="submit">
						</form>
					</li>
					<li>
						<div class="create_tamplate_wind">
							<h1>Создание шаблона</h1>
							<form action="<?php echo($page_url.'/create_tamplate.php');?>">
								<input 
								class="num" 
								type="number" 
								name="num"
								placeholder="№">
								<textarea
								class="name"
								name="name"
								placeholder="Наименование"
								></textarea>
								<input 
								class="time" 
								type="time" 
								name="time"
								placeholder="Время">
								<input 
								class="teacher" 
								type="text" 
								name="teacher"
								placeholder="ФИО">
								<input 
								class="room" 
								type="number" 
								name="room"
								placeholder="№ каб.">
								<input 
								type="text" 
								name="group"
								class="group"
								placeholder="Принадлежание к группе">
								<select 
								name="deportment"
								class="deportment_select">
								<option selected disabled>Отделение</option>
								<?php

								for ($i=0; $i < $dep_count; $i++) { 
									echo('<option>'.$dep_list[$i]['Name'].'</option>');
								}

								?>
								</select>
								<textarea 
								name="short_desc" 
								class="short_desc" 
								placeholder="Краткое описание шаблона" cols="30" rows="10"></textarea>
								<div class="close_button" onclick="$('.create_tamplate_wind').hide(300);">
									<span>Отмена</span>
								</div>
								<button type="submit" name="week_day" value="<?php echo $week_day ;?>">Создать</button>
							</form>
						</div>
						<span>Создать шаблон расписания</span>
						<button onclick="$('.create_tamplate_wind').show(300);">Открыть форму создания</button></li>
				</ul>
				<?php endif ?>
			</div>
			<?php if (is_admin() or is_manager()): ?>
			<div class="tamplate_setting">
				<div class="tamplate_list">
					<div>Создание блока</div>
					<div class="create_form_container">
						<form action="<?php echo $home_url.'/page/create_schudule.php'?>" method='get'>
							<input 
							class="num" 
							type="number" 
							name="num"
							placeholder="№">
							<textarea
							class="name" 
							type="text" 
							name="name"
							placeholder="Наименование"
							></textarea>
							<input 
							class="time" 
							type="time" 
							name="time"
							placeholder="Время">
							<input 
							class="teacher" 
							type="text" 
							name="teacher"
							placeholder="ФИО">
							<input 
							class="room" 
							type="number" 
							name="room"
							placeholder="№ каб.">
							<input type="hidden" name="week_day" value="<?php echo $week_day ;?>">
							<button type="submit" name="group" value="<?php echo $group_name; ?>">Создать</button>
							<div class="close_button" onclick="$('.tamplate_setting').hide(300);">
								<span>Отмена</span>
							</div>
						</form>
					</div>
					<h1>Шаблоны</h1>
						<?php 
						for ($i=0; $i < $tem_count; $i++) { ?>
							<div class="tamplate_item">
							<form class="tamplate_form"action="<?php echo($page_url.'/create_schudule.php');?>">
								<input 
								type="hidden"
								name="num"
								value="<?php echo($tem_list[$i]['Num']);?>"></input>
								<input 
								type="hidden"
								name="name"
								value="<?php echo($tem_list[$i]['Name']);?>"></input>
								<input 
								type="hidden"
								name="time"
								value="<?php echo($tem_list[$i]['Time']);?>"></input>
								<input 
								type="hidden"
								name="teacher"
								value="<?php echo($tem_list[$i]['TeacherName']);?>"></input>
								<input 
								type="hidden"
								name="room"
								value="<?php echo($tem_list[$i]['NumRoom']);?>"></input>
								<input 
								type="hidden"
								name="group"
								value="<?php echo($group_name);?>"></input>
								<input 
								type="hidden"
								name="week_day"
								value="<?php echo($week_day);?>"></input>
								<button
								type='submit'
								class= 'submit'
								><?php echo($tem_list[$i]['Short_desc']);?></button>
							</form>
							</div>
							<?php
						}

					?>
				</div>
			</div>
			<?php endif ?>
		</div>
	</div>

	<div class="group_dep_container control_dir ">
		<div class="group_dep_list">
			<?php
				for ($i=0; $i < $dep_count; $i++) { 
					?>

					<ul>
						<li class="group_title"><?php echo($dep_list[$i]['Name']);?>
							<?php if (is_admin() or is_manager()): ?>
								<button 
								title="Удалить" 
								onclick="$(this).parent().find('form').show(300);"><img src="<?php echo($img_url . '/delete_white.png');?>" alt="">
								</button>
								<form class="hic" action="<?php echo($page_url . '/delete_dep.php');?>">
									<label for="">Вы уверены?</label>
									<input type="hidden" name="dep_code" value="<?php echo($dep_list[$i]['Name']);?>">
									<button 
									type="submit"
									name="id"
									value="<?php echo($dep_list[$i]['Id']);?>">Да
									</button>
									<span onclick="$(this).parent().hide();">Нет</span>
								</form>
							<?php endif ?>
							
						</li>
						<?php

						for ($j=0; $j < $group_count; $j++) { 
							if ($group_list[$j]['Dep_code'] == $dep_list[$i]['Name']) {
								?>

								<li><?php echo($group_list[$j]['NameGroup']);?>
									<?php if (is_admin() or is_manager()): ?>
									<button 
									title="Удалить" 
									onclick="$(this).parent().find('form').show(300);"><img src="<?php echo($img_url . '/delete_white.png');?>" alt=""></button>
									<form class="hic" action="<?php echo($page_url . '/delete_group.php');?>">
										<label for="">Вы уверены?</label>
										<button 
										type="submit"
										name="id"
										value="<?php echo($group_list[$j]['id']);?>">Да</button>
										<span onclick="$(this).parent().hide();">Нет</span>
									</form>
									<?php endif ?>
								</li>

								<?php
							}
						}

						?>
					</ul>

					<?php
				}

			?>
		</div>
	</div>
	<?php if (is_admin() or is_manager()): ?>
	<div class="tamplate_container control_dir">
		<div class="tamplate_list">
			<?php

			for ($i=0; $i < $tem_count; $i++) { 
				?>

				<div class="tamplate_block">
					<div class="change_wind">
						<button 
						onclick="$(this).parent().parent().find('.change_tamplate_form').show(300);" 
						title="изменить"><img src="<?php echo($img_url . '/change.png');?>" alt=""></button>
						<button 
						onclick="$(this).parent().parent().find('.delete_tamplate_form').show(300)" 
						title="удалить"><img src="<?php echo($img_url . '/delete_white.png');?>" alt=""></button>
					</div>
					<div class="change_tamplate_form hic">
					<form action="<?php echo($page_url . '/change_tamplate.php');?>" >
						<input class="num" type="number" name="num" value="<?php echo($tem_list[$i]['Num']);?>">
						<textarea class="name" type="text" name="name" ><?php echo($tem_list[$i]['Name']);?></textarea>
						<input class="time" type="time" name="time" value="<?php echo($tem_list[$i]['Time']);?>">
						<input class="teacher" type="text" name="teacher" value="<?php echo($tem_list[$i]['TeacherName']);?>">
						<input class="room" type="number" name="room" value="<?php echo($tem_list[$i]['NumRoom']);?>">
						<input class="group" type="text" name="group" value="<?php echo($tem_list[$i]['GroupName']);?>">
						<select 
						name="deportment"
						class="deportment">
						<option selected disabled>Отделение</option>
						<?php

						for ($k=0; $k < $dep_count; $k++) { 
							echo('<option>'.$dep_list[$k]['Name'].'</option>');
						}

						?>
						</select>
						<textarea class="short_desc" type="text" name="short_desc" ><?php echo($tem_list[$i]['Short_desc']);?></textarea>
						<button type="submit" name="id" value="<?php echo($tem_list[$i]['id']);?>">Изменить</button>
					</form>
					</div>
					<div class="delete_tamplate_form hic">
						<form action="<?php echo($page_url . '/delete_tamplate.php');?>" >
							<label for="">Вы уверены?</label>
							<button type="submit" name="id" value="<?php echo($tem_list[$i]['id']);?>">Да</button>
							<div class="close_button" onclick="$(this).parent().parent().hide(300)">Нет</div>
						</form>
					</div>
					<span class="num"><?php echo($tem_list[$i]['Num']);?></span>	
					<span class="name"><?php echo($tem_list[$i]['Name']);?></span>	
					<span class="time"><?php echo($tem_list[$i]['Time']);?></span>	
					<span class="teacher"><?php echo($tem_list[$i]['TeacherName']);?></span>	
					<span class="room"><?php echo($tem_list[$i]['NumRoom']);?></span>	
					<span class="group">Группы: <?php 
						if ($tem_list[$i]['GroupName'] == '*') {
							echo "Все";
						}
						else
						{
							echo($tem_list[$i]['GroupName']);
						}
					?></span>
					<span class="department">Отделения: <?php 
						if ($tem_list[$i]['Department'] == '0') {
							echo "Все";
						}
						else
						{
							echo($tem_list[$i]['Department']);
						}
					?></span>
					<span class="short_desc">Краткое описание: <?php echo($tem_list[$i]['Short_desc']);?></span>	
				</div>

				<?php
			}

			?>
		</div>
	</div>
	<?php endif ?>
	
	<?php if (is_admin()): ?>
	<?php 
	$link_list = file_get_contents('http://www.nkse.ru/raspisanie.html');
	$link_list = parse($link_list, '<td colspan="2" class="contentdescription" valign="top">
', '<p style="text-align: center;"><strong><span style="font-size: 14pt;">Заочное обучение');
	$link_list = str_replace('<a href="', '<a href="'.$this_url.'?link=', $link_list);
	$link_list = str_replace('<td style="width: 200px;', '<button', $link_list);
	$link_list = str_replace('</td>', '</button>', $link_list);
	$link_list = str_replace('<table', '<div class="pars_list_block" ', $link_list);
	$link_list = str_replace('</tbody>', '</div>', $link_list);
	$link_list = str_replace('<p style="text-align: center;">', '<div class="pars_list_title">', $link_list);
	$link_list = str_replace('</p>', '</div>', $link_list);
	$link_list = str_replace('height: 26px;', '', $link_list);
	$link_list = str_replace('margin-left: auto;', '', $link_list);
	$link_list = str_replace('margin-right: auto;', '', $link_list);
	$link_list = str_replace('<strong>', '', $link_list);
	$link_list = str_replace('</strong>', '', $link_list);
		  ?>
	<div class="parsing_container control_dir">
		<div class="parsing_list">
			<?php echo $link_list;?>
			<?php if (isset($_GET['link'])): ?>
				<?php $links[0] = 'http://www.nkse.ru' . $_GET['link']; ?>
				<div class="pars_list_title"><h1> Результаты парсинга </h1></div>
				<div class="pars_list_title"><p> Адрес парсинга: <?php echo('http://www.nkse.ru' . $_GET['link']);?></p></div>
				<div class="pars_list_title write_title"><a class="write_button" href="<?php echo($this_url . '?link=' . $_GET['link'] . '&write_to_DB=write&success=Результаты парсинга успешно записанны в базу' );?>">Записать в базу данных</a></div>
				<div class="parsing_result">
					<?php include 'parcer.php';?>
				</div>
			<?php endif ?>
		</div>
	</div>
	<?php endif ?>
</div>

<script src="../js/scripts.min.js"></script>
<script type="text/javascript">
	
	$('.control_dir').eq(<?php echo($screen);?>).addClass('active');
	$('.control_buttons').eq(<?php echo($screen);?>).addClass('active');

</script>