<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/24
 * Time: 13:49
 */
$conn = mysqli_connect("localhost","root","","test");
$conn->query("set names utf8");
$sql = "select sum(sex) from class1";
$request = $conn->query($sql);
while($row=$request->fetch_row()){
    echo $row[0];
}
$conn->close();