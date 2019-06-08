<?php

require('../include/config.php');
require '../include/function.php';

if (is_admin()) {
	if (isset($_GET['username'])) {
		$connect 	= MYSQL_INCLUDE('get_connect');
		$name 		= $_GET['username'];
		$password 	= $_GET['password'];
		$access		= $_GET['access'];

		$quary_id	= mysqli_query($connect,'SELECT * FROM `users`');
		$id 		= mysqli_num_rows($quary_id)+1;
		$uf = mysqli_query($connect,"INSERT INTO `users`(`Id`, `Username`, `Password`, `Access`) VALUES ($id,'$name',$password,'$access')");
		
		header('Location: ' . $home_url . '/app/include/admin_panel.php?success="Пользователь успешно создан!');
	}
}

?>