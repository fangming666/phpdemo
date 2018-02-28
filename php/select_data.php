<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/12/8
 * Time: 14:31
 */
header("Access-Control-Allow-Origin:*");
$callback = isset($_REQUEST['callback']) ? trim($_REQUEST['callback']) : ''; //jsonp回调参数，必需
function getKey($key,$default=""){
    return trim(isset($_REQUEST[$key])?$_REQUEST[$key]:$default);
}
$id = getKey("id");
$conn = mysqli_connect("localhost","root","","test") or die("连接失败");
$conn->query("set names utf8");
$sql = "select * from data where ".$id." is not null";
$result = $conn->query($sql);
$arr = [];
while($row=$result->fetch_assoc()){
    array_push($arr,json_encode($row));
}
$json = json_encode($arr);  //json 数据
echo $callback.'('.$json.')';  //返回格式，必需