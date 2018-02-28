<?php
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

function getKey($key,$default = ""){
    return trim(isset($_REQUEST[$key])?$_REQUEST[$key]:$default);
}
//$qq = getKey("qq");
$qq = "1393622322";
if(!empty($qq)&&is_numeric($qq)&&strlen($qq)>4&&strlen($qq)<13){
    $qqName = file_get_contents('https://way.jd.com/he/freeweather?city=beijing&appkey=86d15a3db19f29dccae449f8426a8cb3');
    echo $qqName;
//
//    if($qqName){
//        $qqName = mb_convert_encoding($qqName,"UTF-8","GBK");
//        echo $qqName;
//    }
}