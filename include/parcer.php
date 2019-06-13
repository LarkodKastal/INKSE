<?php 

$connect = MYSQL_INCLUDE('get_connect');
if (!isset($link)) {
	$link = 'http://www.nkse.ru/html_pages/A_1_pn.htm';
}

$file = file_get_contents($link);
if (!strpos($file, 'Извините, расписание еще не
  готово')) {

// PARSING WEEK DAY //////////////////
$week_day = parse($file, 'Расписание&nbsp;на&nbsp;', ',&nbsp');
$week_day = substr($week_day, 36);
$week_day = short_convert($week_day);

///////////////////////////////////////

// PARSING GROUP LIST////////////////

$group_file = substr($file, strpos( $file, '&nbsp;' ));

$group_array = '';

while (strpos($group_file, 'Номер / Группа')) {
	$group_file = substr($group_file, strpos($group_file, 'Номер / Группа'));
	$group_array .= substr($group_file, 0 , strpos($group_file, '</TR>'));
	$group_file = substr($group_file, strpos($group_file, '</TR>'));
}

$group_array = str_replace('Номер / Группа', '', $group_array);
$group_array = str_replace('</TD>', '-*-', $group_array);
$group_array = strip_tags($group_array);
$group_array = explode('-*-', $group_array);

foreach ($group_array as $key => $value) {
	if(!preg_match('/[А-Я]/', $value))
	{
		unset($group_array[$key]);
	}
}

///////////////////////////////////////////////////////

// PARSING SCHEDULE LIST ///////////////////

$sch_file = substr($file, strpos( $file, 'Номер / Группа' ));
$sch_array = array();
$num_array = array();

for ($i=1; $i < 10; $i++) {
	if (strpos(  $sch_file ,'>'.$i.'<' )) {
		$num_array[count($num_array)] = $i;
	}
}

while (strpos( $sch_file,  '>'.$num_array[0].'<' )) {
	foreach ($num_array as $key => $value) {
		$sch_file = substr($sch_file, strpos( $sch_file,  '>'.$value.'<' ));
		$out = substr($sch_file, 0 , strpos( $sch_file,  '</TR>' ));
		$out = str_replace('<TD><SPAN></SPAN></TD>', '', $out);
		$out = str_replace('<SPAN></SPAN>', '<br /><b>Ячейка пуста</b>', $out);
		$out = str_replace('</DIV>', '^-^', $out);
		$out = str_replace('</b>', '^-^', $out);
		$out = strip_tags($out);
		$out = explode('^-^',$out);
		$sch_file = substr($sch_file, strpos( $sch_file,  '</TR>' ));
		$sch_array[count($sch_array)] = $out;
	}
}

$sch_AI = 0;
$sch_AJ = 1;

///////////////////////////////

// PARSING TEACHER GROUP AND NUMROOM /////////////

$tn_file = substr($file, strpos( $file, 'Номер / Группа' ));

$tn_array = array();
$tnfind_AI = 0;

while (strpos($tn_file, '0</DIV>')) {
	$tnfind_AI++;
	$tn_file = substr($tn_file, strpos($tn_file, '0</DIV>'));
	if ($tnfind_AI >= 15) {
		$out = substr($tn_file, 0 , strpos($tn_file, '</TABLE'));
	}
	else
	{
		$out = substr($tn_file, 0 , strpos($tn_file, 'border'));
	}
	$out = str_replace('0</DIV>', '', $out);
	$out = str_replace('<TD><SPAN></SPAN></TD>', '', $out);
	$out = str_replace('<SPAN></SPAN>', 'Не указан', $out);
	$out = str_replace('</TD>', '*-*', $out);
	$out = strip_tags($out);
	$out = explode( '*-*',$out);
	$tn_file = substr($tn_file, strpos($tn_file, 'hidden'));
	$tn_array[count($tn_array)] = $out;
	
}

$teacher_array = array();
$numroom_array = array();


foreach ($tn_array as $Mkey => $Mvalue) {
	foreach ($tn_array[$Mkey] as $key => $value) {
		if (!preg_match('/[А-Я]/', $value)) {
			unset($tn_array[$Mkey][$key]);
		}
	}
}

$tn_AI = 0;
foreach ($tn_array as $Mkey => $Mvalue) {
	foreach ($tn_array[$Mkey] as $key => $value) {
		$tn_AI++;
		if ($tn_AI%2) {
			$teacher_array[count($teacher_array)] = $value;
		}
		else
		{
			$numroom_array[count($numroom_array)] = $value;		
		}
		
	}
}


function devors($list=array(),$count,$num)
{
	$fun_array = array();
	$tch_AI = 0;
	$tch_count = (ceil($count/14))*$num;
	foreach ($list as $key => $value) {
		$border = 14;
		$fun_array[0] .= $value . '-!-';
		$tch_AI++;
		if ($tch_count<=$num) {
			$border = 12;
		}
		//echo($border . ' - ' . $key . '<br />');
		if ($tch_AI >= $border) {
			$fun_array[0] .= '-*-';
			$tch_AI = 0;
			$tch_count -= 0.5;
			//echo($tch_count);
		}
		
	}
	$fun_array = explode('-*-', $fun_array[0] );
	foreach ($fun_array as $key => $value) {
		$fun_array[$key] = explode('-!-', $fun_array[$key] );
	}
	foreach ($fun_array as $Mkey => $Mvalue) {
		foreach ($Mvalue as $key => $value) {
			if ($Mkey%2) {
				$fun_array[$Mkey-1][$key] .= '-*-' . $fun_array[$Mkey][$key];
				unset($fun_array[$Mkey][$key]);
			}
			if ($fun_array[$Mkey-1][$key] == '-*-' || empty($fun_array[$Mkey-1][$key])) {
				unset($fun_array[$Mkey-1][$key]);
			}
		}
	}
	$out = array();
	foreach ($fun_array as $Mkey => $Mvalue) {
		foreach ($Mvalue as $key => $value) {
			if (!empty($value)) {
				$out[count($out)] = $value;
			}
		}
	}
	return $out;
}

$teacher_list = devors($teacher_array,count($group_array),count($num_array));
$numroom_list = devors($numroom_array,count($group_array),count($num_array));


foreach ($teacher_list as $key => $value) { $teacher_list[$key] = explode('-*-', $value); }
foreach ($numroom_list as $key => $value) { $numroom_list[$key] = explode('-*-', $value); }

$schudule_list = array();

$end_AI = 0;
$num = 1;
$time = '8:10';
foreach ($sch_array as $Mkey => $Mvalue) {
	
	foreach ($Mvalue as $key => $value) {
		$name = $value;
		if ($key == 0) {
			$num = $value[1];
			if ($num == 1) {$time = '8:10';	}
			if ($num == 2) {$time = '9:40';	}
			if ($num == 3) {$time = '11:20';}
			if ($num == 4) {$time = '13:10';}
			if ($num == 5) {$time = '14:50';}
			if ($num == 6) {$time = '16:20';}
			$sch_array[$Mkey][0] = $sch_array[$Mkey][0][1];
			continue;
		}
		if ($key == count($sch_array[$Mkey])-1) {
			continue;
		}
		if (is_array($teacher_list[$end_AI])) {
			
		foreach ($teacher_list[$end_AI] as $Tkey => $Tvalue) {
			if (!strpos($Tvalue, 'Не указан') || !strpos($numroom_list[$end_AI][$Tkey], 'Не указан')) {
			
			if (!strpos($name, 'Ячейка пуста')) {
				$schudule_list[count($schudule_list)] = array(
					'num'		=> $num,
					'name'		=> trim($name),
					'time'		=> $time,
					'teacher'	=> trim($Tvalue),
					'room'		=> trim($numroom_list[$end_AI][$Tkey]),
					'group'		=> trim($group_array[$key+$sch_AI]),
					'week'		=> $week_day);
				}
			}
		}
		}
		$end_AI++;
	}
	if ($sch_AJ == count($num_array)) {
		$sch_AI += count($sch_array[$Mkey]);
		$sch_AJ = 0;
		}
	$sch_AJ++;
}

foreach ($schudule_list as $key => $value) {
	echo('<div class="parsing_result_block">');
	echo('<span class="num">'.$value['num'].'</span><br />');
	echo('<span class="name">'.$value['name'].'</span><br />');
	echo('<span class="time">'.$value['time'].'</span><br />');
	echo('<span class="teacher">'.$value['teacher'].'</span><br />');
	echo('<span class="room">'.$value['room'].'</span><br />');
	echo('<span class="group">'.$value['group'].'</span><br />');
	echo('<span class="week">'.$value['week'].'</span><br /><br />');
	echo('</div>');
}

if (isset($_GET['write_to_DB'])) {
	if ($_GET['write_to_DB'] == 'write') {
		foreach ($schudule_list as $Mkey => $Mvalue) {
		$group 		= $Mvalue['group'];
		$week_day 	= $Mvalue['week'];

		$del_query	= mysqli_query($connect, "DELETE FROM `schedule_list` WHERE GroupName = '$group' AND DayWeek = '$week_day' ");
	}

	foreach ($schudule_list as $Mkey => $Mvalue) {
		$num 		= $Mvalue['num'];
		$name 		= $Mvalue['name'];
		$time 		= $Mvalue['time'];
		$teacher 	= $Mvalue['teacher'];
		$room 		= $Mvalue['room'];
		$group 		= $Mvalue['group'];
		$week_day 	= $Mvalue['week'];

		$query 		= mysqli_query($connect,"INSERT INTO `schedule_list`(`Num`, `Name`, `Time`, `TeacherName`, `NumRoom`, `GroupName`, `DayWeek`) VALUES ('$num','$name','$time','$teacher','$room','$group','$week_day')");
	}
	}
}
}
else
{
	echo "<div class='pars_list_title'><h1> Расписание не готово </h1></div>";
}
?>