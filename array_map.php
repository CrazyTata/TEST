<?php
$table_res = [['names'=>'a'],['names'=>'b'],['names'=>'c'],['names'=>'d'],['names'=>'e']];
$all = ['a'=>'张三','b'=>'张四','c'=>'张五','d'=>'张六','e'=>'张七',];
$tables = [];
echo "<pre>";
/*array_walk($table_res,function(&$v,$k) use($all) {
	$v = $all[$v['names']];
});*/

/*
$res_map = array_map(function ($v) use($all) {
	return $all[$v['names']];
},$table_res);
var_dump($res_map);
*/

$res_filter = array_filter($table_res,function($v) use ($all){
	return $v['names']=='c';
});

var_dump($table_res); 
// var_dump($table_res); 
var_dump($res_filter); 