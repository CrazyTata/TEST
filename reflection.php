<?php

class Human{
	public function humanPublic(){

	}

	protected function humanProtected(){

	}

	private function humanPrivate(){

	}
}

class Person extends Human{
 

 /**
  * For the sake of demonstration, we"re setting this private
  */
 private $_allowDynamicAttributes = false;

 /**
  * type=primary_autoincrement
  */
 protected $id = 0;

 /**
  * type=varchar length=255 null
  */
 protected $name;

 /**
  * type=text null
  */
 protected $biography;

 public function getId() {
  return $this->id;
 }

 public function setId($v) {
  $this->id = $v;
 }

 public function getName() {
  return $this->name;
 }

 public function setName($v) {
  $this->name = $v;
 }

 public function getBiography() {
  return $this->biography;
 }

 public function setBiography($v) {
  $this->biography = $v;
 }
}


$class = new ReflectionClass('Person'); // 建立 Person这个类的反射类  
echo "<pre>";
// print_r($class);
$instance  = $class->newInstanceArgs(); // 相当于实例化Person 类 
// print_r($instance);
// $properties = $class->getProperties();
/*foreach ($properties as $property) {
 echo $property->getName() . "\n";
}*/
/*$private_properties = $class->getProperties(ReflectionProperty::IS_PRIVATE); // 获取类的私有属性 
print_r($private_properties);*/
$name = $class->getMethods(); // 获取类的所有方法，父类的也能获取到，并且不管共有还是私有都能获取到 
var_dump($name);

/*

getMethods()       来获取到类的所有methods。
hasMethod(string)  是否存在某个方法
getMethod(string)  获取方法
getDocComment()    获取注释信息

*/