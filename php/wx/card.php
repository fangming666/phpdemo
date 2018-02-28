<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2018/2/6
 * Time: 12:05
 */

$result = json_decode(file_get_contents("https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wx9c608a6237178170&secret=76b37743553b21a4421b9a1961ddc09b"));

function getData($key, $default = "")
{
    return trim(isset($_REQUEST[$key]) ? $_REQUEST[$key] : $default);
}

$token = $result->access_token;
$width = (int)getData("width");
$path = getData("path");
$getName  = trim(getData("imgName"));
$autoColor = (boolean)getData("auto_color");
$r = json_decode(getData("r"));
$g = json_decode(getData("g")) ;
$b = json_decode(getData("b")) ;
$lineColor = json_encode(array("r" =>(string)$r,"g" =>(string)$g,"b"=>(string)$b));

//curl模拟post提交数据
//初始化
$curl = curl_init();
//设置抓取的url
curl_setopt($curl, CURLOPT_URL, 'https://api.weixin.qq.com/wxa/getwxacode?access_token=' . $token);

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
    "width" => $width,
    "path" => $path,
    "auto_color" => $autoColor,
    "line_color" => json_decode($lineColor)
));
curl_setopt($curl, CURLOPT_POSTFIELDS, $post_data);
//执行命令
$data = curl_exec($curl);
//关闭url请求
curl_close($curl);
//显示获得的数据

$arr = explode("Content-Length:", $data);
if (!empty($arr)) {
    //获取文件的名称
    $nameTest = explode("Content-Type: image/", $arr[0]);
    $imgType = trim(explode("Content-disposition:", $nameTest[1])[0]);
    $imgText = trim(substr(trim($arr[1]), 6));

    //写入文件
    $counter_file =  $getName .".".$imgType;//文件名及路径,在当前目录下新建aa.txt文件
    $file = fopen($counter_file, 'wb ')or exit("无法打开文件");//新建文件命令
    fputs($file, $imgText);//向文件中写入内容;
    fclose($file);

    //移动到新目录下面
    $file=$counter_file; //旧目录
    $newFile="imgs/".$counter_file; //新目录
    copy($file,$newFile); //拷贝到新目录
    unlink($file); //删除旧目录下的文件


    echo $newFile;
}






