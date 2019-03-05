<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">

	<title>Title</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:image" content="path/to/image.jpg">
	<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">

	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<link rel="stylesheet" href="css/main.min.css">

</head>

<body>

	<div class="interface_container">
		<div class="logo">
			<img src="img/logo.png" alt="">
		</div>
	</div>
	<div class="nav_menu">
		<button 
		class="nav_button" 
		alt='Отделение строительных технологий и градостроительства'>
		Строительный
		</button>
		<button 
		class="nav_button" 
		alt='Отделение жилищно-коммунального комплекса'>
		ЖКК
		</button>
		<button 
		class="nav_button" 
		alt='Электротехническое отделение'>
		Электротехническое
		</button>
		<button 
		class="nav_button" 
		alt='Автомеханическое отделение'>
		Автомеханическое
		</button>
		<button 
		class="nav_button" 
		alt='Экономическое отделение'>
		Экономическое
		</button>
		<button 
		class="nav_button" 
		alt='Отделение программного обеспечения и вычислительной техники'>
		Программное
		</button>
		<button 
		class="nav_button" 
		alt='Отделение сервиса и рекламы'>
		Сервис и реклама
		</button>
	</div>
	<div class="week_menu">
		<button class="week_button">Понедельник</button>
		<button class="week_button">Вторник</button>
		<button class="week_button">Среда</button>
		<button class="week_button">Четверг</button>
		<button class="week_button">Пятница</button>
		<button class="week_button">Суббота</button>
	</div>
	<div class="schedule_container">
		<div class="branch_nav">
			<span id="nav_branch"></span>
			<span id="week_branch"></span>
		</div>
		<!-- Group_ID=1 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>СЗ-11</button></div>
			<div class="schedule_group_item"><button>А-11</button></div>
			<div class="schedule_group_item"><button>СД-11</button></div>
			<div class="schedule_group_item"><button>СП-11</button></div>
			<div class="schedule_group_item"><button>ТМ-11</button></div>
			<div class="schedule_group_item "><button>СЗ-12</button></div>
			<div class="schedule_group_item"><button>СЗ-21</button></div>
			<div class="schedule_group_item"><button>СЗ-22</button></div>
			<div class="schedule_group_item"><button>СП-21</button></div>
			<div class="schedule_group_item"><button>ТС-21</button></div>
			<div class="schedule_group_item"><button>СД-21</button></div>
			<div class="schedule_group_item"><button>А-21</button></div>
			<div class="schedule_group_item"><button>А-31</button></div>
			<div class="schedule_group_item"><button>СЗ-31</button></div>
			<div class="schedule_group_item"><button>СД-31</button></div>
			<div class="schedule_group_item"><button>СП-31</button></div>
			<div class="schedule_group_item"><button>ТМ-31</button></div>
			<div class="schedule_group_item"><button>СЗ-32</button></div>
			<div class="schedule_group_item"><button>СД-41</button></div>
			<div class="schedule_group_item"><button>СП-41</button></div>
			<div class="schedule_group_item"><button>ТС-41</button></div>
			<div class="schedule_group_item"><button>СЗ-42</button></div>
			<div class="schedule_group_item"><button>СЗ-41</button></div>
			<div class="schedule_group_item"><button>А-41</button></div>
		</div>
		<!-- Group_ID=2 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>Э-11</button></div>
			<div class="schedule_group_item"><button>ЭС-11</button></div>
			<div class="schedule_group_item"><button>ВМ-11</button></div>
			<div class="schedule_group_item"><button>ГК-11</button></div>
			<div class="schedule_group_item"><button>Э-21</button></div>
			<div class="schedule_group_item "><button>ЭС-21</button></div>
			<div class="schedule_group_item"><button>ВМ-21</button></div>
			<div class="schedule_group_item"><button>ГК-21</button></div>
			<div class="schedule_group_item"><button>Э-31</button></div>
			<div class="schedule_group_item"><button>ЭС-31</button></div>
			<div class="schedule_group_item"><button>ВМ-31</button></div>
			<div class="schedule_group_item"><button>ГК-31</button></div>
			<div class="schedule_group_item"><button>Э-41</button></div>
			<div class="schedule_group_item"><button>Э-42</button></div>
			<div class="schedule_group_item"><button>ЭС-41</button></div>
			<div class="schedule_group_item"><button>ВМ-41</button></div>
			<div class="schedule_group_item"><button>ГК-41</button></div>
		</div>
		<!-- Group_ID=3 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>СМ-11</button></div>
			<div class="schedule_group_item"><button>ПС-11</button></div>
			<div class="schedule_group_item"><button>АМ-11</button></div>
			<div class="schedule_group_item"><button>МП-11</button></div>
			<div class="schedule_group_item"><button>ГМ-11</button></div>
			<div class="schedule_group_item "><button>СМ-21</button></div>
			<div class="schedule_group_item"><button>АМ-21</button></div>
			<div class="schedule_group_item"><button>ОТ-21</button></div>
			<div class="schedule_group_item"><button>МП-21</button></div>
			<div class="schedule_group_item"><button>ПС-21</button></div>
			<div class="schedule_group_item"><button>СМ-31</button></div>
			<div class="schedule_group_item"><button>АМ-31</button></div>
			<div class="schedule_group_item"><button>ГМ-31</button></div>
			<div class="schedule_group_item"><button>МП-31</button></div>
			<div class="schedule_group_item"><button>ПС-31</button></div>
			<div class="schedule_group_item"><button>СМ-41</button></div>
			<div class="schedule_group_item"><button>АМ-41</button></div>
			<div class="schedule_group_item"><button>ОТ-41</button></div>
		</div>
		<!-- Group_ID=4 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>Ф-11</button></div>
			<div class="schedule_group_item"><button>БД-21</button></div>
			<div class="schedule_group_item"><button>Ф-31</button></div>
			<div class="schedule_group_item"><button>ЭК-11</button></div>
			<div class="schedule_group_item"><button>ЭК-21</button></div>
			<div class="schedule_group_item "><button>ЭК-31</button></div>
			<div class="schedule_group_item"><button>ОП-11</button></div>
			<div class="schedule_group_item"><button>ОП-12</button></div>
			<div class="schedule_group_item"><button>ОП-21</button></div>
			<div class="schedule_group_item"><button>ОП-22</button></div>
			<div class="schedule_group_item"><button>ОП-31</button></div>
			<div class="schedule_group_item"><button>ОП-32</button></div>
			<div class="schedule_group_item"><button>ОП-41</button></div>
			<div class="schedule_group_item"><button>ОП-42</button></div>
			<div class="schedule_group_item"><button>БУ-11</button></div>
			<div class="schedule_group_item"><button>БУ-21</button></div>
			<div class="schedule_group_item"><button>БУ-31</button></div>
			<div class="schedule_group_item"><button>БУ-11У</button></div>
			<div class="schedule_group_item"><button>БУ-21У</button></div>
			<div class="schedule_group_item"><button>БУ-31У</button></div>
		</div>
		<!-- Group_ID=5 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>ТТ-11</button></div>
			<div class="schedule_group_item"><button>ВС-21</button></div>
			<div class="schedule_group_item"><button>СГ-11</button></div>
			<div class="schedule_group_item"><button>СГ-12</button></div>
			<div class="schedule_group_item"><button>МД-11</button></div>
			<div class="schedule_group_item "><button>Г-11</button></div>
			<div class="schedule_group_item"><button>МВ-21</button></div>
			<div class="schedule_group_item"><button>ТТ-21</button></div>
			<div class="schedule_group_item"><button>МД-21</button></div>
			<div class="schedule_group_item"><button>СГ-21</button></div>
			<div class="schedule_group_item"><button>СГ-22</button></div>
			<div class="schedule_group_item"><button>ИС-41</button></div>
			<div class="schedule_group_item"><button>ТО-11</button></div>
			<div class="schedule_group_item"><button>ТО-21</button></div>
			<div class="schedule_group_item"><button>ТО-31</button></div>
			<div class="schedule_group_item"><button>ТО-41</button></div>
		</div>
		<!-- Group_ID=6 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>П-11</button></div>
			<div class="schedule_group_item"><button>П-21</button></div>
			<div class="schedule_group_item"><button>ТО-11</button></div>
			<div class="schedule_group_item"><button>ТО-41</button></div>
			<div class="schedule_group_item"><button>И-31</button></div>
			<div class="schedule_group_item "><button>И-41</button></div>
			<div class="schedule_group_item"><button>ИС-21</button></div>
			<div class="schedule_group_item"><button>ИС-31</button></div>
			<div class="schedule_group_item"><button>П-41</button></div>
			<div class="schedule_group_item"><button>ТО-21</button></div>
			<div class="schedule_group_item"><button>ТО-31</button></div>
			<div class="schedule_group_item"><button>И-11</button></div>
		</div>
		<!-- Group_ID=7 -->
		<div class="schedule_group_array">
			<div class="schedule_group_item"><button>ГС-11</button></div>
			<div class="schedule_group_item"><button>ГС-12</button></div>
			<div class="schedule_group_item"><button>Р-11</button></div>
			<div class="schedule_group_item"><button>Д-11</button></div>
			<div class="schedule_group_item"><button>Д-12</button></div>
			<div class="schedule_group_item "><button>ПИ-11</button></div>
			<div class="schedule_group_item"><button>ГС-21</button></div>
			<div class="schedule_group_item"><button>ГС-22</button></div>
			<div class="schedule_group_item"><button>Р-21</button></div>
			<div class="schedule_group_item"><button>Д-21</button></div>
			<div class="schedule_group_item"><button>ПИ-21</button></div>
			<div class="schedule_group_item"><button>ГС-31</button></div>
			<div class="schedule_group_item"><button>ГС-32</button></div>
			<div class="schedule_group_item"><button>Р-31</button></div>
			<div class="schedule_group_item"><button>Д-31</button></div>
			<div class="schedule_group_item"><button>ПИ-31</button></div>
			<div class="schedule_group_item"><button>Р-41</button></div>
			<div class="schedule_group_item"><button>Д-41</button></div>
		</div>

		<!-- Deportment list in bottom -->

		<!-- Dep_ID=1 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box ">
				<div class="group">СЗ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">А-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">СД-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СП-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТМ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СЗ-12</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">СЗ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">СЗ-22</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СП-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТС-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СД-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">А-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">А-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СЗ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СД-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СП-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТМ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СЗ-32</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СД-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">СП-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">ТС-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">СЗ-42</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">СЗ-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">А-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
		</div>
		<!-- Dep_ID=2 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box ">
				<div class="group">Э-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ЭС-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ВМ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ГК-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Э-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ЭС-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ВМ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ГК-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Э-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ЭС-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ВМ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ГК-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Э-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Э-42</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ЭС-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ВМ-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">ГК-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
		</div>
		<!-- Dep_ID=3 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box ">
				<div class="group">СМ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ПС-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">АМ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">МП-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ГМ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СМ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">АМ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ОТ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">МП-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ПС-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СМ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">АМ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ГМ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">МП-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ПС-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СМ-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">АМ-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">ОТ-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
		</div>
		<!-- Dep_ID=4 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box">
				<div class="group">Ф-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">БД-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">Ф-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ЭК-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ЭК-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ЭК-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ОП-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ОП-12</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ОП-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ОП-22</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ОП-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ОП-32</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ОП-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ОП-42</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">БУ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">БУ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">БУ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">БУ-11У</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">БУ-21У</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">БУ-31У</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Dep_ID=5 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box ">
				<div class="group">ТТ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ВС-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">СГ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СГ-12</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">МД-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Г-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">МВ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ТТ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">МД-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СГ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">СГ-22</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ИС-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТО-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТО-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТО-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТО-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
		</div>
		<!-- Dep_ID=6 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box ">
				<div class="group">П-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">П-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ТО-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">И-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">И-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ИС-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ИС-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">П-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТО-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ТО-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">И-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
		</div>
		<!-- Dep_ID=7 -->
		<div class="schedule_box_array"> 
			<div class="schedule_box ">
				<div class="group">ГС-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ГС-12</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">Р-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Д-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Д-12</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ПИ-11</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ГС-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box ">
				<div class="group">ГС-22</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Р-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Д-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ПИ-21</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ГС-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ГС-32</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Р-32</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Д-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">ПИ-31</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div> 
			<div class="schedule_box">
				<div class="group">Р-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
			<div class="schedule_box">
				<div class="group">Д-41</div>
				<div class="schedule_list">
					<div class="schelude_item">
						<span class="lesson_num">4</span>
						<p class="lesson_name">Длинное наименование пары</p>
						<span class="time">13:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">5</span>
						<p class="lesson_name">Наименование пары</p>
						<span class="time">14:30</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
					<div class="schelude_item">
						<span class="lesson_num">6</span>
						<p class="lesson_name">Очень длинное наименование пары без сокращений</p>
						<span class="time">16:10</span>
						
						<span class="teacher">Преподователь И.О.</span>
						<span class="cabinet">B503</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/scripts.min.js"></script>

</body>
</html>
