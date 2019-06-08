<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {
	if (isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$query 	= "DELETE FROM `tamplate_list` WHERE id = '$id'";
		mysqli_query($connect,$query);
		mysqli_query($connect,"UPDATE `tamplate_list` SET id = id-1 WHERE id > '$id'");
		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Шаблон успешно удален!"');
	}
}
