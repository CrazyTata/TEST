<?php
//---------------------------------------
//       常用查找算法
//---------------------------------------
//二分查找
function binary_search($arr,$low,$high,$key){
  while($low<=$high){
    $mid = intval(($low+$high)/2);
    if($key == $arr[$mid]){
      return $mid+1;
    }elseif($key<$arr[$mid]){
      $high = $mid-1;
    }elseif($key>$arr[$mid]){
      $low = $mid+1;
    }
  }
  return -1;
}
$key = 6;
echo "二分查找{$key}的位置：";
echo binary_search(QSort($arr),0,8,$key);
 
//顺序查找
function SqSearch($arr,$key){
  $length = count($arr);
  for($i=0;$i<$length;$i++){
    if($key == $arr[$i]){
      return $i+1;
    }
  }
  return -1;
}
$key = 8;
echo "<br/>顺序常规查找{$key}的位置：";
echo SqSearch($arr,$key);