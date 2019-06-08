<?php

function MYSQL_INCLUDE($query='none')
{
	global $conf;
	global $connect;
	$conf = array(
	'author' => 'MefalDies',
	'database' => array(
		'server' => 'nkseinterface',
		'username' => 'root',
		'password' => '',
		'name' => 'TERMINAL_DB'
		)
	);

	$connect = mysqli_connect(
	$conf['database']['server'],
	$conf['database']['username'],
	$conf['database']['password'],
	$conf['database']['name']
	);

	if( $connect == false )
	{
		echo 'No connect';
		echo mysqli_connect_error();
		exit();
	}

	if ($query == 'get_connect') {
		return $connect;
	}

	if ($query == 'get_server_name') {
		return $conf['database']['server'];
	}

}

$home_url = 'http://' . MYSQL_INCLUDE('get_server_name') . '/app';
$page_url = $home_url . '/page';
$img_url = $home_url . '/img';
$title_name = 'НКСЭ расписание';

?>