<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/22
 * Time: 15:34
 */
include_once "Person.class.php";

class personChild extends Person
{
    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
$perChild = new personChild("fangMing","18");
echo $perChild->say();