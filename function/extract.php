<?php
$result = ["firstname"=>['aaa'=>12,'bbb'=>300], "lastname"=>['eee'=>'eeeaaa','fff'=>55555], "age"=>60];  

echo "<pre>";
echo "result:";
print_r($result);

$res = extract($result);
echo "res:";
print_r($res);

echo '<br/>';
echo "firstname:";
print_r($firstname);   
       
echo '<br/>';
echo "lastname:";
print_r($lastname);

echo '<br/>';
echo "age:";
print_r($age);