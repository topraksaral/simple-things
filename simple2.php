<?php

$datas = [
	'kiwi',
	'apple',
	'orange',
	'banana',
	'grape',
	'blueberry',
//...
];

$today = strtotime(date('Y-m-d'));
$today = $today/60/60/24;

$key = $today%count($datas);
if(isset($datas[$key]))
	echo $datas[$key];

?>