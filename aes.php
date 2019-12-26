<?php

//aes 加解密demo

class Aes
{
	public $key = '';
 
	public $iv = '';
 
	public function __construct($config)
	{
		foreach($config as $k => $v){
			$this->$k = $v;
		}
	}
	//加密
	public function aesEncrypt($data){
	 	return  base64_encode(openssl_encrypt($data, $this->method,$this->key, OPENSSL_RAW_DATA , $this->iv));  
	}
 
    //解密
	public function aesDecrypt($data){
	 	return openssl_decrypt(base64_decode($data),  $this->method, $this->key, OPENSSL_RAW_DATA, $this->iv);
	}
}
 
 $config = [
	'key'	=>	'reter4446fdfgdfgdfg', 			//加密key 
	'iv'	=>  md5(time(). uniqid(),true), 	//偏移量
	'method'	=> 'AES-128-CBC' 				//加密方式  
 ];
 
$obj = new Aes($config);
 
$res = $obj->aesEncrypt('this is tata'); 		//加密数据
 
echo $res;
echo '<hr>';
 
echo $obj->aesDecrypt($res);					//解密