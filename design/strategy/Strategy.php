<?php
namespace strategy;
/**
 * 策略模式
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/12
 * Time: 9:31
 */
class Strategy
{
    private static $obj;
    public function __construct($name){
        $coon = new \ReflectionClass("\\strategy\\".$name);
        self::$obj = $coon->newInstance();
    }

    public function get(){
        return self::$obj->wayToSchool();
    }
}