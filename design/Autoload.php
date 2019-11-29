<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/12
 * Time: 9:23
 */
class Autoload{
    public static function doAutoload($class){
        $arr = explode('\\',$class);
        $name = array_pop($arr);
        $rote = BASE_ROOT.'/';
        array_map(function($val) use(&$rote){
            $rote.= $val.'\\';
        },$arr);
        return require_once($rote.$name.'.php');
    }
}