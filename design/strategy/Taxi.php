<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/12
 * Time: 11:46
 */

namespace strategy;


class Taxi implements CommonStrategy
{
    public function wayToSchool(){
        return "go to school by taxi";
    }
}