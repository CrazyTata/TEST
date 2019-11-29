<?php
namespace observer;
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/13
 * Time: 15:44
 */
interface Main{
    public function register(Observer $observer);
    public function notify($wear);
}