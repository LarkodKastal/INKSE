<?php


function is_admin()
{
	if (isset($_COOKIE['logining'])) {
		if($_COOKIE['logining'] == 'MainRoot')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

function is_manager()
{
	if (isset($_COOKIE['logining'])) {
		if($_COOKIE['logining'] == 'manager')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}

function get_user_date($param="none")
{
	
	$connect = MYSQL_INCLUDE('get_connect');

	if (is_admin()) 
	{
		$quary = "SELECT * FROM `users`";
	}
	else
	{
		$quary = "SELECT `id` , `username` , `access` FROM `users`";
	}

	$data_users = mysqli_query($connect,$quary);
	$user_field = $data_users->field_count;
	$user_count = mysqli_num_rows($data_users);
	$out = array();

	for ($i=0; $i < $user_count+1; $i++) { 
		
		$data_users = mysqli_query($connect,$quary . " WHERE id = '$i'");
		$data_fetch = mysqli_fetch_row($data_users);
		$data = $data_fetch;
		$out[$i] = $data;
	}

	if (is_admin()) 
	{
		$out[0] = array(
		0 => 'Номер',
		1 => 'Наименование',
		2 => 'Пароль',
		3 => 'Право доступа'
		);
	}
	else
	{
		$out[0] = array(
		0 => 'Номер',
		1 => 'Наименование',
		2 => 'Право доступа'
		);
	}

	if ($param == 'field') {
		return $user_field;
	}

	if ($param == 'list') {
		return $out;
	}

	if ($param == 'count') {
		return $user_count;
	}	
}
	
function get_schudule_date($param,$write='',$size='')
{
	$group_name = 'П-11';
	
	$week_day = get_week_day();
	

	if (isset($_COOKIE['group_name'])) {
		$group_name = $_COOKIE['group_name'];
	}
	if (isset($_COOKIE['week_day'])) {
		$week_day = $_COOKIE['week_day'];
	}
	if (isset($_GET['group_name'])) {
		$group_name = $_GET['group_name'];
		if ($write=='write') {
		setcookie('group_name',$group_name,time()+60*60*60);
		}
	}
	if (isset($_GET['week_day'])) {
		$week_day = $_GET['week_day'];
		if ($write=='write') {
			setcookie('week_day',$week_day,time()+60*60*60);
		}
	}

	$connect = MYSQL_INCLUDE('get_connect');

	if ($size == 'all') {
		$mysql_schudule_query = "SELECT * FROM `schedule_list` WHERE DayWeek = '$week_day'";
	}
	else
	{
		$mysql_schudule_query = "SELECT * FROM `schedule_list` WHERE GroupName = '$group_name' AND DayWeek = '$week_day'";
	}

	$mysql_schudule_mysql = mysqli_query($connect,$mysql_schudule_query);

	$schudule_list = array();

	$schudule_index = 0;

	while ($schudule_list[$schudule_index] = mysqli_fetch_assoc($mysql_schudule_mysql)) {
		$schudule_list[$schudule_index]['Time'] =  substr($schudule_list[$schudule_index]['Time'], 0, 5);
		$schudule_index++;
	}

	if ($size == 'all') {
		$deport_query = "SELECT `Dep_code` FROM `group_list`";
	}
	else
	{
		$deport_query = "SELECT `Dep_code` FROM `group_list` WHERE NameGroup = '$group_name'";
	}
	$deport_result = mysqli_query($connect,$deport_query);
	$deport_fetch  = mysqli_fetch_assoc($deport_result);

	if ($param == 'list') {
		return $schudule_list;
	}

	if ($param == 'count') {
		return mysqli_num_rows($mysql_schudule_mysql);
	}

	if ($param == 'group') {
		return $group_name;
	}

	if ($param == 'day') {
		return $week_day;
	}

	if ($param == 'dep') {
		return $deport_fetch['Dep_code'];
	}
}

function get_group_date($param='none')
{
	$connect = MYSQL_INCLUDE('get_connect');

	$mysql_group_query = 'SELECT * FROM `group_list`';

	$mysql_group_connect = mysqli_query($connect,$mysql_group_query);

	$GROUP_AI = 0;
	while ($i = mysqli_fetch_assoc($mysql_group_connect)) {
		$group_list[$GROUP_AI] = $i;
		$GROUP_AI++;
	}

	$week_array = array('Пн','Вт','Ср','Чт','Пт','Сб');
	$full_week_array = array('Понедельник','Вторник','Среда','Четверг','Пятница','Суббота',);

	if ($param == 'list') {
		return $group_list;
	}

	if ($param == 'count') {
		return mysqli_num_rows($mysql_group_connect);
	}

	if ($param == 'week') {
		return $week_array;
	}

	if ($param == 'full_week') {
		return $full_week_array;
	}
}

function get_departament_date($param='none')
{
	$connect = MYSQL_INCLUDE('get_connect');

	$dep_query = 'SELECT * FROM `department_list`';

	$dep_mysql_query = mysqli_query($connect,$dep_query);

	$dep_AI = 0;
	$dep_result = array();
	while ($dep_result[$dep_AI] = mysqli_fetch_assoc($dep_mysql_query)) {
		$dep_AI++;
	}

	if ($param == 'list') {
		return $dep_result;
	}

	if ($param == 'count') {
		return mysqli_num_rows($dep_mysql_query);
	}
}

function get_tamplate_date($param='',$dep_param='')
{
	$group_name = '*';
	$week_day = get_week_day();
	$dep_code = '0';

	if (isset($_GET['group_name'])) {
		$group_name = $_GET['group_name'];
	}
	if (isset($_GET['week_day'])) {
		$week_day = $_GET['week_day'];
	}
	if (!empty($dep_param)) {
		$dep_code = $dep_param;
	}

	$connect = MYSQL_INCLUDE('get_connect');

	$tem_query = "SELECT * FROM `tamplate_list` WHERE GroupName = '$group_name' OR GroupName = '*' AND Department = '$dep_code' OR Department = '0'";

	$tem_mysqli = mysqli_query($connect,$tem_query);
	$tem_count  = mysqli_num_rows($tem_mysqli);
	$tem_result = array();
	$tem_AI = 0;
	while ($tem_result[$tem_AI] = mysqli_fetch_assoc($tem_mysqli)) {
		$tem_result[$tem_AI]['Time'] = substr($tem_result[$tem_AI]['Time'], 0, 5);
		$tem_AI++;
	}

	if ($param == 'list') {
		return $tem_result;
	}

	if ($param == 'count') {
		return $tem_count;
	}
}

function get_teacher_date($param='')
{
	$connect = MYSQL_INCLUDE('get_connect');

	$teacher_name = 'none';
	$week_day = get_week_day();
	if (isset($_GET['week_day'])) {
		$week_day = $_GET['week_day'];
	}
	if (isset($_GET['teacher'])) {
		$teacher_name = $_GET['teacher'];
	}

	$mysql_teach_query = "SELECT * FROM `schedule_list` WHERE TeacherName = '$teacher_name' AND DayWeek = '$week_day'";

	$mysql_teach_mysql = mysqli_query($connect,$mysql_teach_query);

	$teach_list = array();

	$teach_index = 0;

	while ($teach_list[$teach_index] = mysqli_fetch_assoc($mysql_teach_mysql)) {
		$teach_list[$teach_index]['Time'] =  substr($teach_list[$teach_index]['Time'], 0, 5);
		$teach_index++;
	}

	if ($param == 'list') {
		return $teach_list;
	}
	if ($param == 'count') {
		return mysqli_num_rows($mysql_teach_mysql);
	}
}

function get_week_day()
{
	if (date('l')=='Monday') { return 'Пн'; }
	if (date('l')=='Tuesday') { return 'Вт'; }
	if (date('l')=='Wednesday') { return 'Ср'; }
	if (date('l')=='Thursday') { return 'Чт'; }
	if (date('l')=='Friday') { return 'Пт'; }
	if (date('l')=='Saturday') { return 'Сб'; }
}

function short_convert($value='')
{
	if ($value == 'Понедельник') { return 'Пн'; }
	if ($value == 'Вторник') { return 'Вт'; }
	if ($value == 'Среда') { return 'Ср'; }
	if ($value == 'Четверг') { return 'Чт'; }
	if ($value == 'Пятница') { return 'Пт'; }
	if ($value == 'Суббота') { return 'Сб'; }
}

function parse($file, $begin, $end)
{
	$str = strpos( $file, $begin );
	if ($str === false) {
		return false;
	}
	$output = substr($file, $str);
	return strip_tags(substr($output, 0, strpos($output, $end)));
}

function have_time($string)
{
	$return = false;
	for ($i=0; $i < 24; $i++) { 
		for ($j=0; $j < 5; $j++) { 
			if (strpos($string,str($i) . '-' . str($j))) {
				$return = str($i) . '-' . str($j);
				break;
			}
		}
	}
	return $return;
}

?>