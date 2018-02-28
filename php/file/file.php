<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文件</title>
</head>
<body>
<?php
$yuan = file_get_contents("https://www.yuandingbang.cn");
file_put_contents("yuandingbang.text", $yuan);


//fopen：打开文件
$file = fopen("yuandingbang.text", "r") or exit("无法打开文件");

//逐行读取数据:feof(文章末尾),fgets(逐行读取文件)
while (!feof($file)) {
    echo fgets($file) . "<br/>";
}


//fclose关闭文件
fclose($file)
?>
</body>
</html>