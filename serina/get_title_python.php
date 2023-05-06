<?php
// echo get_include_path();
$url = $_REQUEST["url"];
$title = system("/home/yzmu/git/side_projects/getTitle.py ".$url,$retCode);
#echo "/home/yzmu/pythonStudy/getTitle.py ".$url." >2&1";
?>
