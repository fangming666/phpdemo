<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/6
 * Time: 12:05
 */
function getData($key, $default = "")
{
    return trim(isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default);
}

$code = getData("code");
//$code = "00336IZk2fqmUG0B12Zk2m1mZk236IZv";
if (!empty($code)) {
    $result = file_get_contents("https://api.weixin.qq.com/sns/jscode2session?appid=wx9c608a6237178170&secret=76b37743553b21a4421b9a1961ddc09b&js_code=".$code."&grant_type=authorization_code");
    echo $result;
}


