<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/11
 * Time: 16:44
 */

define('BASE_ROOT',__DIR__);
include_once 'Autoload.php';
spl_autoload_register("Autoload::doAutoload");


$waybill = new Waybill(
    '254241929757',
    '顺丰'
);
// echo "<pre>";
// var_dump($waybill);
//var_dump($waybill);die;
(new \lib\Kuaidi100)->track($waybill);
// die();
//(new \Kuaidi\Trackers\Kuaidiwang)->track($waybill);
//(new \Kuaidi\Trackers\Kuaidiniao('Business ID', 'APP Key'))->track($waybill);

// 获取状态，所有状态列表见 `Waybill::STATUS_*` 常量。
$waybill->getStatus();
// 获取详情，支持直接 foreach / while / 数组下标 形式访问。
$waybill->getTraces();
die;