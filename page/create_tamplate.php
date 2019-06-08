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
		if (empty($_GET['deportment'])) {
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
		$quary = "INSERT INTO `tamplate_list`(`Num`, `Name`, `Time`, `TeacherName`, `NumRoom`, `GroupName`, `Department`, `Short_desc`) VALUES ('$num','$name','$time','$teacher','$room','$group','$deportment','$short_desc')";
		mysqli_query($connect,$quary);
		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Шаблон успешно создан!"');
	}
	else
	{
		header('Location: ' . $home_url . '/app/include/admin_panel.php?error="Не все поля заполненны"');
				exit();
	}
}

?>