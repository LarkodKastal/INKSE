<?php 

require '../include/config.php';
require '../include/function.php';

if (isset($_GET['theme_name'])) {
	setcookie('theme_name',$_GET['theme_name'],time()+60*60*60,'/');
	header('Location: ' . $home_url . '/mobile_main.php');
}

?>