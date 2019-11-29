<?php

class Stack{
	private $end_index=null;
	private $array = [];

	/**
	 * 入栈
	 */
	public function push($data){
		if(is_null($this->end_index)){
			$this->end_index=0;
			$this->array [0] = $data;
		}else{
			$this->end_index ++;
			$this->array [$this->end_index] = $data;
		}
	}

	public function pop(){
		if($this->end_index<0){
			return false;
		}else{
			$return = $this->array [$this->end_index];
			unset($this->array [$this->end_index]);
			$this->end_index --;
			return $return;
		}
	}

	public function getData(){
		$end_index = $this->end_index;
		return ['end_index'=>$this->end_index, 'array'=> $this->array ];
	}
}

$obj = new Stack();
$obj->push('张三');
$obj->push('李四');
$obj->push('王五');
$obj->push('赵六');
$obj->push('钱七');

echo "<pre>";
$last =$obj->getData();
print_r($last);
echo "<hr>";
$pop =$obj->pop();
print_r($pop);
echo "<hr>";
$last2 =$obj->getData();
print_r($last2);