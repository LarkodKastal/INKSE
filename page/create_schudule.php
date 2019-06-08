<?php

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {

	$connect = MYSQL_INCLUDE('get_connect');

	if (!empty($_GET['num']) && !empty($_GET['name']) && !empty($_GET['time']) && !empty($_GET['teacher']) && !empty($_GET['room'])) {
		$num 		= $_GET['num'];
		$name 		= $_GET['name'];
		$time		= $_GET['time'];
		$teacher 	= $_GET['teacher'];
		$room 		= $_GET['room'];
		$group 		= $_GET['group'];
		$week_day	= $_GET['week_day'];

		$teacher = str_replace(array(' ','	'),'.', $teacher);

		$query 		= mysqli_query($connect,"INSERT INTO `schedule_list`(`Num`, `Name`, `Time`, `TeacherName`, `NumRoom`, `GroupName`, `DayWeek`) VALUES ('$num','$name','$time','$teacher','$room','$group','$week_day')");

		header('Location: ' . $home_url . '/include/admin_panel.php?success="Элемент расписания успешно создан!"');

	}
	else
	{
		header('Location: ' . $home_url . '/include/admin_panel.php?error="Не все поля заполненны"');
				exit();
	}
}

?>