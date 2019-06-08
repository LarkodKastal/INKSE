<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {
	if (isset($_GET['name'])) {
		if (empty($_GET['name']) or empty($_GET['full_name'])) {
			header('Location: ' . $home_url . '/include/admin_panel.php?error="Не все поля заполненны"');
				exit();
		}
		$name 		= $_GET['name'];
		$full_name 	= $_GET['full_name'];
		$quary = "INSERT INTO `department_list`(`Full name`,`Name`) VALUES ('$full_name','$name')";
		mysqli_query($connect,$quary);
		header('Location: ' . $home_url . '/include/admin_panel.php?success="Отделение успешно созданно!"');
	}
}

?>