<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin()) {
	if (isset($_GET['Delete_User'])) {
		$id 	= $_GET['Delete_User'];
		if ($id == 1) {
			header('Location: ' . $home_url . '/app/include/admin_panel.php?error="Удалить админа невозможно!"');
			exit(); 
		}
		$query 	= "DELETE FROM `users` WHERE id = '$id'";
		mysqli_query($connect,$query);
		mysqli_query($connect,"UPDATE `users` SET id = id-1 WHERE id > '$id'");
		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Пользователь успешно удален!');
	}
}

?>