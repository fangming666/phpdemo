<?php
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

function getKey($key, $default = "")
{
    return trim(isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default);
}

$month = date("m", time());
$day = date("d", time());
$cityInfo = file_get_contents("http://api.juheapi.com/japi/toh?key=6cb2b28d89943fb140b8f41d1ba71425&v=1.0&month=".$month."&day=".$day);
//var_dump(json_decode($cityInfo));
echo $cityInfo;