<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {

	$connect = MYSQL_INCLUDE('get_connect');

	if (!empty($_GET['num']) && !empty($_GET['name']) && !empty($_GET['time']) && !empty($_GET['teacher']) && !empty($_GET['room'])) {
		$id 		= $_GET['id'];
		$num 		= $_GET['num'];
		$name 		= $_GET['name'];
		$time		= $_GET['time'];
		$teacher 	= $_GET['teacher'];
		$room 		= $_GET['room'];
		$group 		= $_GET['group'];
		$week_day	= $_GET['week_day'];

		$query 		= mysqli_query($connect,"UPDATE `schedule_list` SET `Num`='$num',`Name`='$name',`Time`='$time',`TeacherName`='$teacher',`NumRoom`='$room',`GroupName`='$group',`DayWeek`='$week_day' WHERE id = '$id'");

		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Элемент расписания успешно изменен!"');

	}
	else
	{
		header('Location: ' . $home_url . '/app/include/admin_panel.php?error="Не все поля заполненны"');
				exit();
	}
}

?>