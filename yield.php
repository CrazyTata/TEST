<?php
function createRange($number){
    for($i=0;$i<$number;$i++){
        yield time();
    }
}

$result = createRange(10); // 这里调用上面我们创建的函数
foreach($result as $value){
    sleep(1);
    echo $value.'<br />';
}


// 首先明确一个概念：生成器yield关键字不是返回值，他的专业术语叫产出值，只是生成一个值

// 那么代码中 foreach 循环的是什么？其实是PHP在使用生成器的时候，会返回一个 Generator 类的对象。 foreach 可以对该对象进行迭代，每一次迭代，PHP会通过 Generator 实例计算出下一次需要迭代的值。这样 foreach 就知道下一次需要迭代的值了。

// 而且，在运行中 for 循环执行后，会立即停止。等待 foreach 下次循环时候再次和  for  索要下次的值的时候，循环才会再执行一次，然后立即再次停止。直到不满足条件不执行结束。

// 实际开发应用
// 很多PHP开发者不了解生成器，其实主要是不了解应用领域。那么，生成器在实际开发中有哪些应用？

// 读取超大文件
// PHP开发很多时候都要读取大文件，比如csv文件、text文件，或者一些日志文件。这些文件如果很大，比如5个G。这时，直接一次性把所有的内容读取到内存中计算不太现实。


function export2csv($name,$head,$data){
	//设置csv
	//为fputcsv()函数打开文件句柄
	$output = fopen('php://output', 'w') or die("can‘t open php://output");
	//告诉浏览器这个是一个csv文件
	header("Content-Type: application/csv");
	header("Content-Disposition: attachment; filename=$name.csv");
	header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
	header('Expires:0');
	header('Pragma:public');
	// 文件名转码
	$name = iconv('utf-8', 'gbk', $name);
	//输出表头
	foreach ($head as $i => $v) {
		//CSV的Excel支持GBK编码，一定要转换，否则乱码
		$head[$i] = iconv('utf-8', 'gbk', $v);
	}
	fputcsv($output, $head);

	$i = 0;
	foreach ($data as $k => $v) {
		//输出csv内容
		fputcsv($output, array_values($v));
		$i++;
	}
	//关闭文件句柄
	fclose($output) or die("can‘t close php://output");
}


//调用方法：
public function export(){
	$info = $this->doGetExport(trim($_GET['str'],','));
	$head = [
	'NO.',
	'商户',
	'数据源',
	'前端类型 ',
	'统计页面 ',
	'时间'
	];
	export2csv('商户数据',$head,$info);
}
//获取数据
private function doGetExport($str){
	$info = $this->apiCurlPost(['str'=>$str],'/source/exportInfo');
	$come = C('COME_IN');
	$i=1;
	foreach ($info as $v){
		if($v['deal']==2) $index_type ='下单成交';
		else $index_type = '接入入口';
		$a = [
			$i,
			iconv('utf-8', 'gbk', $v['types']),
			$v['self_url'],
			iconv('utf-8', 'gbk', $come[$v['source_type']]),
			iconv('utf-8', 'gbk', $index_type),
			$v['create_at']
		];
		yield $a;
		$i++;
	}
}
