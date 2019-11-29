<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/13
 * Time: 15:48
 */

namespace observer;



class Weather implements Main
{
    private $objects=[];
    public function register(Observer $observer)
    {
        if(!in_array($observer,$this->objects)){
            $this->objects []=$observer;
        }
    }

    public function notify($wear)
    {
        foreach ($this->objects as $obj){
            $obj->modify($wear);
        }
    }
}