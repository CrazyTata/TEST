<?php
$foo = array('a'=>"bob", 'b'=>"fred", 'c'=>"jussi", 'd'=>"jouni", 'e'=>"egon", "marliese");
$bar = each($foo);
echo "<pre>";
print_r($bar);
$bar2 = each($foo);
print_r($bar2);
$bar3 = each($foo);
print_r($bar3);

$foo = array("bob", "fred", "jussi", "jouni", "egon", "marliese");
$bar = each($foo);
print_r($bar);
/*Array
(
    [1] => bob
    [value] => bob
    [0] => 0
    [key] => 0
)*/
//结论 each 返回数组中当前的键／值对并将数组指针向前移动一步