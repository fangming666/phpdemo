<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/23
 * Time: 10:57
 */
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');
header("Content-type: text/html; charset=utf-8");
$file = $_FILES["file"];
$name = iconv('utf-8', 'gb2312', "upload/" . $file["name"]);
move_uploaded_file($file['tmp_name'], $name);
move_uploaded_file($file['tmp_name'], "upload/" . $file["name"]);
echo $file["name"];
die();
