<?php
namespace observer;
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/13
 * Time: 15:40
 */

class Wang implements Observer
{
    protected $wearing='';
    public function modify($wear){
        $this->wearing=$wear;
    }

    public function getWearing(){
        return 'wang need wear '.$this->wearing;
    }
}