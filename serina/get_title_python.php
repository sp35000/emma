<?php
$url = $_REQUEST["url"];
$title = system("/home/yzmu/pythonStudy/getTitle.py ".$url,$retCode);
#echo "/home/yzmu/pythonStudy/getTitle.py ".$url." >2&1";
?>
