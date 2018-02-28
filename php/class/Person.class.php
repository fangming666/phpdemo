<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/22
 * Time: 15:33
 */

class Person
{
    public $name;
    public $age;
    public function say(){
        return $this->name."say my age is".$this->age;
    }
}