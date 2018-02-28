<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/8
 * Time: 11:14
 */
$result = json_decode(file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9c608a6237178170&secret=76b37743553b21a4421b9a1961ddc09b"));
$token = $result->access_token;
function postData($key, $default = "")
{
    return trim(isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default);
}

//$beginDay = postData("beginDay");
//$endDay = postData("endDay");
$beginDay = "2017-02-06";
$endDay = "2017-02-07";
//curl模拟post提交数据
//初始化
$curl = curl_init();
//设置抓取的url
curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/datacube/getweanalysisappiddailysummarytrend?access_token=' . $token);

curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);

//设置头文件的信息作为输出流
$headers = array("Content-type: application/json;charset=UTF-8", "Accept: application/json", "Cache-Control: no-cache", "Pragma: no-cache");
curl_setopt($curl, CURLOPT_HEADER, $headers);
//设置获取的信息以及文件流的形式返回，而不是直接输出
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//是指post进行提交
curl_setopt($curl, CURLOPT_POST, 1);
//设置post数据
$post_data = json_encode(array(
    "begin_date" => $beginDay,
    "end_date" => $endDay
));
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
//执行命令
$data = curl_exec($curl);
//关闭url请求
curl_close($curl);

var_dump($data);