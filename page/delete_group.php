<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {
	if (isset($_GET['id'])) {
		$id 	= $_GET['id'];
		$query 	= "DELETE FROM `group_list` WHERE id = '$id'";
		mysqli_query($connect,$query);
		mysqli_query($connect,"UPDATE `group_list` SET id = id-1 WHERE id > '$id'");
		header('Location: ' . $home_url . '/include/admin_panel.php?success="Группа успешно удалена!"');
	}
}

?>