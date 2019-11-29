<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/12
 * Time: 11:46
 */

namespace strategy;


class Bus implements CommonStrategy
{
    public function wayToSchool(){
        return "go to school by bus";
    }
}