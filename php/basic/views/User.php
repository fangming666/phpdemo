<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/29
 * Time: 14:37
 */

class User
{
    private $name;
    public $age;
    function __get($name){
        if($name !="name"){
            return "dog";
        }else{
            return $this->name;
        }
    }
    function __set($name,$value)
    {
        if($name == "age"){

        }else{
            $this->$name = $value;
        }
    }
}