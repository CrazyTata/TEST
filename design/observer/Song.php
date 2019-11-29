<?php
namespace observer;
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/13
 * Time: 15:40
 */

class Song implements Observer
{
    protected $wearing='';
    public function modify($wear){
        $this->wearing=$wear;
    }

    public function getWearing(){
        return 'song need wear '.$this->wearing;
    }
}