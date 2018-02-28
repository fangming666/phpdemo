<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/1/30
 * Time: 16:29
 */

header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

function getData($key, $default = "")
{
    return trim(isset($_REQUEST[$key])? $_REQUEST[$key]:$default );
}
$tabName = getData("tabName");
$coon = mysqli_connect("rm-bp1ca0fx022o8x0qg6o.mysql.rds.aliyuncs.com", "root", "Xiaofangzi123", "wx") or die("连接数据库失败");
$coon->query("SET NAMES utf8");
$sql = "select * from ".$tabName." order by y";
$result = $coon->query($sql);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    array_push($arr, $row);
}
$arr2 = ["data" => $arr];
echo json_encode($arr2);
$coon->close();
