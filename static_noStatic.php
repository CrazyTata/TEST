<?php
class father{
	public function fatherPublic(){
			return "fatherPublic111";
	}
	public static function fatherPublic2(){
			return "fatherPublic222";
	}
	protected function fatherProtected(){
			return	"fatherProtected";
	}
	private function fatherPrivate(){
			return	"fatherPrivate";
	}

}

class son extends father{
	public static function sonPublic(){
			return	"sonPublic";
	}
	protected function sonProtected(){
			return	"sonProtected";
	}
	private function sonPrivate(){
			return	"sonPrivate";
	}
	/*public static function test1(){
		// echo self::fatherPublic();   //Deprecated fatherPublic111  不推荐  但是可以调用
		//echo self::fatherPublic2();   //fatherPublic222  可以调用
		//echo parent::fatherPublic();   //Deprecated fatherPublic111   不推荐  但是可以调用
		//echo parent::fatherPublic2();   //fatherPublic222   可以调用
		//echo $this->sonProtected();   //直接报错  $this 不能再静态方法中使用  
	}*/

	public function test(){
		// echo self::fatherPublic();   //fatherPublic111  可以调用
		// echo self::fatherPublic2();   //fatherPublic222  可以调用
		// echo parent::fatherPublic();   //fatherPublic111 可以调用
		// echo parent::fatherPublic2();   //fatherPublic222   可以调用
		// echo $this->sonProtected();   //sonProtected   可以调用
	}
}
// echo son::test1();

// echo son::test();    //fatherPublic111 fatherPublic111 不推荐  但是可以调用

echo (new son())->test();

class person{
	public static function test(){
		parent::sonPublic();
	}

	public function test1(){
		return 'test1';
	}
}
 // echo (new person()) ->test();
// echo son::test();
/*$obj = new son();

echo son::fatherPublic2();
echo "<br>";
echo $obj->sonPublic();*/

 /*class Foo {
     public function bar() {
         var_dump($this);
     }
 }
 class A {
     public function test() {
         Foo::bar();
     }
 }
 $a = new A();
 $a->test();*/

/*结论：①可以用"->"调用静态，也可以用"::"调用非静态 但是会有个不推荐的报错，但是也能正常返回内容
	   ② 非静态方法里面调用静态方法完全没问题；
       ③ 静态方法里面用$this调用非静态的方法直接报错，用parent或者self调用非静态方法会提示一个不推荐使用的报错，但是也能正常返回内容*/
