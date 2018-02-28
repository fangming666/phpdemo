<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/24
 * Time: 9:23
 */
$conn = mysqli_connect("localhost","root","","test") or die("链接失败");
$conn->query("SET NAMES utf8");
$sql = "select * from user where name = '李嘉诚'";
$request = $conn->query($sql);
while ($row = $request->fetch_object()){
    echo "姓名".$row->name."年龄".$row->age."性别".$row->sex;
}