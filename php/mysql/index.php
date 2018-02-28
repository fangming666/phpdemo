<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/23
 * Time: 17:24
 */
$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "nodetest";

//创建链接
$coon = new mysqli($serverName,$username,$password,$dbname) or die("链接失败");
$coon->query("SET NAMES utf8");



$sql = "select * from test";
$result = $coon->query($sql);
while ($row=$result->fetch_assoc()){
    echo "name".$row["name"]."age".$row["age"]."sex".$row["sex"];
}
$coon ->close();