<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/24
 * Time: 9:58
 */
$conn = mysqli_connect("localhost","root","","test") or die("链接失败");
$conn->query("set names utf8");
$sql = "update user set age=18 where name='王思聪' ";
$conn->query($sql);
if($conn){
    echo "修改数据成功";
}else{
    echo "链接数据失败";
};
$sql2 = "select * from user";
$request2 = $conn->query($sql2);
while ($row=$request2->fetch_assoc()){
    echo "name".$row["name"]."sex".$row["sex"]."age".$row["age"]."<br/>";
}
$conn->close();
