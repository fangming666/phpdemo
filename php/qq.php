<?php
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');

function getKey($key,$default = ""){
    return trim(isset($_REQUEST[$key])?$_REQUEST[$key]:$default);
}
$qq = getKey("qq");
if(!empty($qq)&&is_numeric($qq)&&strlen($qq)>4&&strlen($qq)<13){
    $qqName = file_get_contents('http://r.pengyou.com/fcg-bin/cgi_get_portrait.fcg?uins='.$qq);
    if($qqName){
        $qqName = mb_convert_encoding($qqName,"UTF-8","GBK");
        echo $qqName;
    }
}else{
    echo 0;
}