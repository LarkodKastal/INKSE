<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {
	if (isset($_GET['name'])) {
		if (empty($_GET['name']) or empty($_GET['deportment'])) {
			header('Location: ' . $home_url . '/include/admin_panel.php?error="Не все поля заполненны"');
				exit();
		}
		$name 		= $_GET['name'];
		$deportment = $_GET['deportment'];
		$quary = "INSERT INTO `group_list`(`NameGroup`,`Dep_code`) VALUES ('$name','$deportment')";
		mysqli_query($connect,$quary);
		header('Location: ' . $home_url . '/include/admin_panel.php?success="Группа успешно созданна!"');
	}
}

?>