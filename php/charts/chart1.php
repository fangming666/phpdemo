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

$coon = new mysqli("localhost", "wx", "fpz0825", "wx");
$coon->query("SET NAMES utf8");
$sql = "select * from subject order by y";
$result = $coon->query($sql);
$arr = array();
while ($row=$result->fetch_assoc()){
    array_push($arr,$row);
}
$arr2 = ["data" => $arr];
echo json_encode($arr2);
$coon->close();
