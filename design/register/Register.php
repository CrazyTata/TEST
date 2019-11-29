<?php
/**
 * Created by PhpStorm.
 * User: AS
 * Date: 2019/3/12
 * Time: 13:32
 */
class Register{
    private $arr=[];//保存所有实例化对象
    public function registerSet($alias,$obj){
        $this->arr[$alias]=$obj;
    }

    public function registerGet($alias) {
        return $this->arr[$alias]??'';
    }

    public function registerDelete($alias){
        unset($this->arr[$alias]);
    }
}