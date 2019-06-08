<?php 

require '../include/config.php';
require '../include/function.php';

if (isset($_GET['group'])) {
	setcookie('group_name',$_GET['group'],time()+60*60*60,'/');
	header('Location: ' . $home_url . '/mobile_main.php?group_name='.$_GET['group'].'');
}

?>