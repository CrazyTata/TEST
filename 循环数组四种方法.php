<?php
/*使用list()、each()、while()遍历数组   (重点)list():用于将数组的每一个值，赋值给list函数的每一个参数。(list函数的参数，必须小于等于数组的元素个数);   eg:list($a,$b,$c)=[1,2,3];-->$a=1; $b=2; $c=3;   注意：① list()在解析数组时，只解析索引数组；        ② list可以通过空参数，选择性的解析数组的值；          list($a,,$b)=[1,2,3];-->$a=1;  $b=3;   (重点)each():用于返回数组当前指针所在位的键值对！并将指针后移一位；       返回值：如果指针有下一位，返回一个数组。包含一个索引数组(0-键，1-值)和一个关联数组("key"-键，"value"-值)；如果指针没有下一位，返回false；            eg：     ① each($arr) 返回数组或false；    ② 把数组或false赋值给$a;    ③ while判断$a如果是数组，继续执行下一次；             如果$a是false，终止循环  while($a = each($arr)){  echo "{$a[0]}-->{$a[1]}<br>";    echo "{$a['key']}-->{$a['value']}<br>";    }    3.使用list()/each()/while()配合遍历数组while(list($key,$value) = each($arr)){echo "{$key}-->{$value}<br>";}reset($arr);
     !!!!数组使用each()遍历完一遍后，指针使用处于最后一位的下一位；即再用each()，始终返回false；     如果还需使用，需用reset($arr);函数，重置数组指针；  eg:$arr = array(1,2,3,"one"=>4,5,6,7);foreach($arr as $value){echo "{$item}<br>";}foreach($arr as $key => $value){echo "{$key}==>{$item}<br>";} while(true){$a = each($arr);if($a){echo "{$a[0]}-->{$a[1]}<br>";echo "{$a['key']}-->{$a['value']}<br>";}else{break;}} while(list($key,$value) = each($arr)){echo "{$key}-->{$value}<br>";}reset($arr);while(list($key,$value) = each($arr)){echo "{$key}-->{$value}<br>";}
  4、 使用数组指针遍历数组   ① next：将数组指针，后移一位。并返回后一位的值；没有返回false   ② prev：将数组指针，前移一位。并返回前一位的值；没有返回false   ③ end：  将数组指针，移至最后一位，返回最后一位的值；空数组返回false   ④ reset:将数组指针，恢复到第一位。并返回第一位的值；空数组返回false   ⑤ key: 返回当前指针所在位的键；   ⑥ current:返回当前指针所在位的值；$arr = [1,2,3,4,"one"=>5];while(true){echo key($arr);echo "--";echo current($arr);echo "<br>";if(!next($arr)){break;}}reset($arr);//第二种方式：do{echo key($arr);echo "--";echo current($arr);echo "<br>";}while(next($arr));reset($arr);
  牛刀小试：   1.遍历数组：$subject1 = array("Linux","PHP","MySQL","HTML","CSS","JQuery")  方式一：for循环遍历for($i=0;$i<count($subject1);$i++){echo $subject1[$i]."<br/>";}  方式二：使用list()/each()/while()配合遍历数组方式一.while(list($key,$value)=each($subject1)){echo "{$key}-->{$value}<br/>";}方式二.while($a=each($subject1)){echo $a[0]."=>".$a[1]."<br/>";}方式三：forEach循环遍历foreach ($subject1 as $key => $value) {echo "{$key}-->{$value}<br/>";} 方式四：指针do{echo key($subject1)."=>".current($subject1)."<br/>";}while(next($subject1));echo "<br/>";
2.使用reset(),end(),prev(),next(),key(),current();与do…while组合倒着输出数组中的值：  $subject2 = array(“Linux”,”PHP”,”MySQL”,”HTML”,”CSS”,”JQuery”)$subject2 = array("Linux","PHP","MySQL","HTML","CSS","JQuery");end($subject2);do{echo key($subject2)."=>".current($subject2)."<br>";}while(prev($subject2));*/

/*$arr = array(1,2,3,"one"=>4,5,6,7);
foreach($arr as $value){
	echo "{$value}<br>";
}
foreach($arr as $key => $value){
	echo "{$key}==>{$value}<br>";
}
while(true){
	$a = each($arr);
	if($a){
		echo "{$a[0]}-->{$a[1]}<br>";
		echo "{$a['key']}-->{$a['value']}<br>";
	}else{
		break;
	}
}
while(list($key,$value) = each($arr)){
	echo "{$key}-->{$value}<br>";
}
*/

$array = ['name'=>'tata','age'=>18,'high'=>'good'];

while(true){
	
	$key = key($array);
	$value = current($array);
	if(!next($array)){
		break;
	}

}

while(true){
	echo key($arr);echo "--";
	echo current($arr);echo "<br>";
	if(!next($arr)){break;}
}
reset($arr);//第二种方式：
do{
	echo key($arr);echo "--";echo current($arr);echo "<br>";
}while(next($arr));