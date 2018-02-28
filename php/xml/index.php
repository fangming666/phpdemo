<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 2017/11/27
 * Time: 11:36
 */
$xmlDoc = new DOMDocument();
$xmlDoc->load("index.xml");
$x = $xmlDoc->documentElement;
foreach ($x->childNodes as $item){
    print $item->nodeName."=".$item->nodeValue."<br>";
}
