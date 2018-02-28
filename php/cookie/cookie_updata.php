<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/23
 * Time: 13:20
 */
session_start();
$names  =Postrequest("names");
$Pw = Postrequest("pw");
$_SESSION["names"] = $names;
$_SESSION["pw"] = $Pw;
function postRequest($key,$defeat = ""){
    return trim(isset($_REQUEST[$key])?$_REQUEST[$key]:$defeat);
}

$arr = ["user"=>$names,"password"=>$Pw];
echo json_encode($arr);

