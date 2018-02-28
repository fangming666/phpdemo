<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/22
 * Time: 18:09
 */
//设置跨域的头部信息，允许跨域
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');
$conn = mysqli_connect("rm-bp1ca0fx022o8x0qg6o.mysql.rds.aliyuncs.com", "root", "Xiaofangzi123", "blog_xiaofany_com") or die("连接数据库失败");
$conn->query("SET NAMES UTF8 ");
$SQL = "select info from protest";
$result = $conn->QUERY($SQL);
$Arr = array();
while ($row = $result->fetch_assoc()) {
    array_push($Arr, $row["info"]);
}
$resultArr = ["all" => $Arr];
echo json_encode($resultArr);
$conn->close();

