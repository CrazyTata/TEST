<?php
$foo = array('a'=>"bob", 'b'=>"fred", 'c'=>"jussi", 'd'=>"jouni", 'e'=>"egon", "marliese");
$bar = each($foo);
echo "<pre>";
print_r($bar);
$bar2 = each($foo);
print_r($bar2);
$bar3 = each($foo);
print_r($bar3);
?>