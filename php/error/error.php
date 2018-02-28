<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/23
 * Time: 16:47
 */

if(!file_exists("test.txt")){
    die("文件不存在");
}else{
    $text = fopen("test.txt","r");
}