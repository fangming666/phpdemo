<?php
header("Access-Control-Allow-Origin:*");
// 响应类型
header('Access-Control-Allow-Methods:POST');
// 响应头设置
header('Access-Control-Allow-Headers:x-requested-with, content-type');
header("Content-type: text/html; charset=utf-8");
$file = $_FILES["file"];
if ($file["error"] > 0) {
    echo "错误：" . $file["error"];
} else {
    $name = iconv('utf-8', 'gb2312', "upload/" . $file["name"]);
    echo "文件名称：" . $file["name"] . "</br>";
    echo "文件类型：" . $file["type"] . "</br>";
    echo "文件大小：" . ($file["size"] / 1024) . "K</br>";
    echo "文件临时存储的位置：" . $file["tmp_name"] . "</br>";


    //保存上传的文件
    if (file_exists("upload" . $file["name"])) {
        echo $file["name"] . "文件已经存在";
    } else {
        //如果目录不存在则将该文件上传
        if (move_uploaded_file($file['tmp_name'], $name)) {
            move_uploaded_file($file['tmp_name'],"upload/".$file["name"]);
//            echo '文件上传成功!';
//            echo '图片信息：';
//            print_r($file);
        }
    }
}
