<?php
$arr = [4,2,442,43,67,8,65,88,53,888,8,90,124,6];
echo "<pre>";

//冒泡排序
function mp1($arr){
	$len = count($arr);//获取数组的长度
    //有多少个数组元素就最多就要排n-1次
    for ($j=0;$j<$len-1;$j++){
        $flag = true;//这个flag就是判断有没有进入里面的for,不进去就代表排好了,就直接退出当次循环
        //没个元素比较的次数,当前面排过 j次时,就以为着这j次肯定是排好的
        for ($i=0;$i<$len-1-$j;$i++){
            if($arr[$i]>$arr[$i+1]){
                list($arr[$i],$arr[$i+1]) = [$arr[$i+1],$arr[$i]]
                $flag = false;
            }
        }
        if($flag){
            break;
        }
    }
    return $arr;
}

//直接排序
function zhijie($arr){
	$length = count($arr);
	for ($i=0; $i < $length-1; $i++) { 
		for ($j=$i+1; $j < $length; $j++) { 
			if($arr[$i]>$arr[$j]){
				$tmp = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $tmp; 
			}
		}
	}
	return $arr;
}

//快速排序
function quick_sort($a)
{
    // 判断是否需要运行，因下面已拿出一个中间值，这里<=1
    if (count($a) <= 1) {
        return $a;
    }

    $middle = $a[0]; // 中间值

    $left = array(); // 接收小于中间值
    $right = array();// 接收大于中间值

    // 循环比较
    for ($i=1; $i < count($a); $i++) { 
        if ($middle < $a[$i]) {
            // 大于中间值
            $right[] = $a[$i];
        } else {
            // 小于中间值
            $left[] = $a[$i];
        }
    }

    // 递归排序划分好的2边
    $left = quick_sort($left);
    $right = quick_sort($right);

    // 合并排序后的数据，别忘了合并中间值
    return array_merge($left, array($middle), $right);
}

//选择排序(不稳定)
    function SelectSort($arr){
        $length = count($arr);
        if($length<=1){
            return $arr;
        }
        for($i=0;$i<$length;$i++){
            $min = $i;
            for($j=$i+1;$j<$length;$j++){
                if($arr[$j]<$arr[$min]){
                    $min = $j;
                }
            }
            if($i != $min){
                $tmp = $arr[$i]; 
                $arr[$i] = $arr[$min]; 
                $arr[$min] = $tmp;
            } 
        } 
        return $arr;
    } //echo "选择排序："; echo implode(' ',SelectSort($arr))."“;


//插入排序
function InsertSort($arr){
  $length = count($arr);
  if($length <=1){
    return $arr;
  }
  for($i=1;$i<$length;$i++){
    $x = $arr[$i];
    $j = $i-1;
    while($x<$arr[$j] && $j>=0){
      $arr[$j+1] = $arr[$j];
      $j--;
    }
    $arr[$j+1] = $x;
  }
  return $arr;
}
echo '插入排序：';
echo implode(' ',InsertSort($arr))."<br/>";

print_r(quick_sort($arr));
