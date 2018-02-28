<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/24
 * Time: 9:41
 */
$conn = mysqli_connect("localhost", "root", "", "test") or die("链接失败");
$conn->query("set names utf8");
//order by为升序进行排序；order by name desc为降序进行排序
$sql = "select * from user order by  age desc";
$result = $conn->query($sql);
while ($row=$result->fetch_assoc()){
    echo "name".$row["name"]."age".$row["age"]."sex".$row["sex"]."<br/>";
}
$conn->close();