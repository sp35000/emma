<?php

function getImages($folder) {
$cont=1;
$filetype="*.jpg";
foreach(glob($folder."/".$filetype) as $file) {
 $vfile[$cont] = $file;
 $cont++;
 }
return $vfile;
}

function show_thumbnail($vfile,$address,$ini,$fin) {
 for($i=$ini;$i<=$fin;$i++) {
   echo "<a href=" . $address[$i] . ">";
   echo "<img src=\"" . $vfile[$i] . "\" width=6% height=100px></img></a>\n";
 }
}
?>
