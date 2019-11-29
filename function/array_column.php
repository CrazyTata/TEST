<?php
$arr = [
	[
		'name'=>'a',
		'age'=>22,
		'high'=>26
	],
	[
		'name'=>'b',
		'age'=>22,
		'high'=>33
	],
	[
		'name'=>'c',
		'age'=>22,
		'high'=>244
	],
	[
		'name'=>'d',
		'age'=>22,
		'high'=>112
	],
	[
		'name'=>'e',
		'age'=>22,
		'high'=>44
	],

];
$arr1 = array_column($arr, 'high');
$arr2 = array_column($arr, NULL, 'name');
$sum = array_sum($arr1);
echo "<pre>";
print_r($arr1);
print_r($arr2);
echo $sum;