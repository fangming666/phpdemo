<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/6
 * Time: 18:10
 */
$result = file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9c608a6237178170&secret=76b37743553b21a4421b9a1961ddc09b");
echo($result);