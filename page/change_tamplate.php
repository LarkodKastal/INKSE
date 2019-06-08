<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {
	if (!empty($_GET['name']) and !empty($_GET['num']) and !empty($_GET['time']) and !empty($_GET['teacher']) and !empty($_GET['room'])) {
		$num		= $_GET['num'];
		$name 		= $_GET['name'];
		$time 		= $_GET['time'];
		$teacher 	= $_GET['teacher'];
		$room 		= $_GET['room'];
		$id 		= $_GET['id'];
		if (empty($_GET['deportment']) or !isset($_GET['deportment'])) {
			$deportment	= '0';
		}
		else
		{
			$deportment	= $_GET['deportment'];
		}
		if (empty($_GET['group'])) {
			$group	= '*';
		}
		else
		{
			$group	= $_GET['group'];
		}
		if (empty($_GET['short_desc'])) {
			$short_desc	= $name;
		}
		else
		{
			$short_desc	= $_GET['short_desc'];
		}
		mysqli_query($connect,"UPDATE `tamplate_list` SET `Num`='$num',`Name`='$name',`Time`='$time',`TeacherName`='$teacher',`NumRoom`='$room',`GroupName`='$group',`Department`='$deportment',`Short_desc`='$short_desc' WHERE id = '$id'");
		header('Location: ' . $home_url . '/include/admin_panel.php?success="Шаблон успешно изменен!"');
	}
	else
	{
		header('Location: ' . $home_url . '/include/admin_panel.php?error="Не все поля заполненны"');
		exit();
	}
}

?>