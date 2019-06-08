<?php 

require '../include/config.php';
require '../include/function.php';

if (is_admin() or is_manager()) {
	if (isset($_GET['id'])) {
		$id 		= $_GET['id'];
		$dep_code 	= $_GET['dep_code'];
		$query 	= "DELETE FROM `department_list` WHERE id = '$id'";
		mysqli_query($connect,$query);
		mysqli_query($connect,"UPDATE `department_list` SET id = id-1 WHERE id > '$id'");
		mysqli_query($connect,"DELETE FROM `group_list` WHERE Dep_code = '$dep_code'");
		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Отделение успешно удалено!"');
	}
}

?>