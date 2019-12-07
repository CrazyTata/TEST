<?php
$arr = [4,2,442,43,67,8,65,88,53,888,8,90,124,6];
echo "<pre>";

//冒泡排序
function mp1($arr){
	$length = count($arr);
	for ($i=0; $i < $length-1; $i++) { 
		for ($j=0; $j < $length-1-$i; $j++) { 
			if($arr[$j]>$arr[$j+1]){
				list($arr[$j+1],$arr[$j]) = [$arr[$j],$arr[$j+1]];
			}
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

print_r(quick_sort($arr));
