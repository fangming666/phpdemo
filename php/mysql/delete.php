<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/24
 * Time: 10:08
 */
$conn = mysqli_connect("localhost","root","","test") or die("链接失败");
$conn ->query("set names utf8");
$sql = "delete from user where name='李嘉诚'";
$reqult=$conn->query($sql);
if($reqult){
    echo "删除成功";
}else{
    echo "删除失败";
}
$sql2 = "select * from user";
$result2 = $conn->query($sql2);
while($row=$result2->fetch_assoc()){
    echo "name".$row["name"]."age".$row["age"]."sex".$row["sex"];
}
$conn->close();