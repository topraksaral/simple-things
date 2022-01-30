<?php

$datas = [
	'2022-01-30' => 'kiwi',
	'2022-01-31' => 'apple',
	'2022-02-01' => 'orange',
	'2022-02-02' => 'banana',
	'2022-02-03' => 'grape',
	'2022-02-04' => 'blueberry',
//...
];

$today = date('Y-m-d');
if(isset($datas[$today]))
	echo $datas[$today];

?>