<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() ) {
	if (isset($_GET['Change_User'])) {
		$id 		= $_GET['Change_User'];
		$username 	= $_GET['name'];
		$password 	= $_GET['password'];
		$quary = "UPDATE `users` SET `username`='$username',`password`='$password' WHERE id = '$id'";
		if (isset($_GET['access'])) {
			if ($id = 1) {
				header('Location: ' . $home_url . '/app/include/admin_panel.php?error="Поменять права доступа админу невозможно"');
				exit();
			}
			$access = $_GET['access'];
			$quary = "UPDATE `users` SET `username`='$username',`password`='$password',`access`='$access'  WHERE id = '$id'";
		}
		mysqli_query($connect,$quary);
		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Данные пользователя успешно изменены!"');
	}
}

?>