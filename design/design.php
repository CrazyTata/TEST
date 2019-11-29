<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/12
 * Time: 9:22
 */
define('BASE_ROOT',__DIR__);
include_once 'Autoload.php';
spl_autoload_register("Autoload::doAutoload");
///////////////////////////////////策略模式////////////////////////
/*$obj = new \strategy\Strategy($_GET['a']);
$res = $obj->get();
echo $res;*/
///////////////////////////////////策略模式////////////////////////

///////////////////////////////////观察者模式////////////////////////
/*$params         = $_GET['a'];
//实例化各个类
$weather   = \observer\Factory::getInstace('Weather');
$wang      = \observer\Factory::getInstace('Wang');
$song      = \observer\Factory::getInstace('Song');
$li        = \observer\Factory::getInstace('Li');

//将实例化的类进行注册
$weather->register($wang);
$weather->register($song);
$weather->register($li);

//根据外部环境触发被观察者的变化
$weather->notify($params);

//打印被观察者变化后推送给各个观察者的变化
echo $wang->getWearing()."<br>";
echo $song->getWearing()."<br>";
echo $li->getWearing()."<br>";*/
///////////////////////////////////观察者模式////////////////////////
