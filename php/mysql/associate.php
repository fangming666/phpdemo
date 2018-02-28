<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/24
 * Time: 14:12
 */
//关联查询
$conn = mysqli_connect("localhost","root","","test");
$conn->query("set names utf8");
$sql = "select c1.*,c2.* from class1 c1,class2 c2 where c1.name=c2.data_name";
$result = $conn->query($sql);
while($row=$result->fetch_row()){
    echo $row[0],$row[1],$row[2],$row[3],$row[4],$row[5];
};
$conn->close();