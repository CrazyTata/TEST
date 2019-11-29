<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/13
 * Time: 16:05
 */

namespace observer;


class Factory
{
    private static $instances=[];
    private function __construct(){  }
    public static function getInstace($alias){
        if(!isset(self::$instances [$alias])){
            $class = "\\observer\\".$alias;
            self::$instances [$alias] = new $class;
        }
        return self::$instances [$alias];
    }
    private function __clone(){}
}