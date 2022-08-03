<?php

$girls = getImages("images");
$address[1]="/r target=\"_blank\"";
$address[2]="trilena";
$address[3]="";
$address[4]="elle";
$address[5]="\"https://work4love.net/finn\" target=\"_blank\"";
$address[6]="\"https://work4love.net/coronavirus\" target=\"_blank\"";
$address[7]="marla";
$address[8]="";
$address[9]="\"https://work4love.net/rommie\" target=\"_blank\"";
$address[10]="index.php#serina";
$address[11]="trance";
$address[12]="index.php#veronica";
$address[13]="violet";
$address[14]="\"https://work4love.net/\" target=\"_blank\"";

$flow="start ";

# load image files path in session
if (isset($_SESSION["max"])) {
 $max = $_SESSION["max"];
}
else {
 $max = array_merge(getImages("max/serpro")
 ,getImages("max/outros")
 ,getImages("max/elo316"));
 $_SESSION["max"]=$max;
 $flow = $flow . "Max ";
}

if (isset($_SESSION["amidala"])) {
 $amidala = $_SESSION["amidala"];
}
else {
 $amidala = getImages("max/amidala");
 $_SESSION["amidala"]=$amidala;
 $flow = $flow . "Amidala ";
}

if (isset($_SESSION["finn"])) {
 $finn = $_SESSION["finn"];
}
else {
 $finn = getImages("finn-DES/old");
 $_SESSION["finn"]=$finn;
 $flow = $flow . "Finn ";
}

if (isset($_SESSION["mesg52"])) {
 $mesg52 = $_SESSION["mesg52"];
}
else {
 $mesg52 = array_merge(getImages("mesg52/draw"));
 $_SESSION["mesg52"]=$mesg52;
 $flow = $flow . "Mesg52 ";
}

if (isset($_SESSION["trilena"])) {
 $trilena = $_SESSION["trilena"];
}
else {
 $trilena = array_merge(getImages("trilena")
   ,getImages("trilena/img"));
 $_SESSION["trilena"]=$trilena;
 $flow = $flow . "trilena ";
}

# calculate the random image number
$widthPortrait="15%";
$widthLandscape="10%";

$randMax = mt_rand(1,sizeof($max));
$imgXMax = imagesx(imagecreatefromjpeg($max[$randMax]));
$imgYMax = imagesy(imagecreatefromjpeg($max[$randMax]));
if ($imgXMax > $imgYMax) {
 $widthMax = $widthPortrait;
} else {
 $widthMax = $widthLandscape;
}

$randAmidala = mt_rand(1,sizeof($amidala));
$imgXAmidala = imagesx(imagecreatefromjpeg($amidala[$randAmidala]));
$imgYAmidala = imagesy(imagecreatefromjpeg($amidala[$randAmidala]));
if ($imgXAmidala > $imgYAmidala) {
 $widthAmidala = $widthPortrait;
} else {
 $widthAmidala = $widthLandscape;
}

$randFinn = mt_rand(1,sizeof($finn));
$imgXFinn = imagesx(imagecreatefromjpeg($finn[$randFinn]));
$imgYFinn = imagesY(imagecreatefromjpeg($finn[$randFinn]));
if ($imgXFinn > $imgYFinn) {
 $widthFinn = $widthPortrait;
} else {
 $widthFinn = $widthLandscape;
}

$randMesg52 = mt_rand(1,sizeof($mesg52));
$imgXMesg52 = imagesx(imagecreatefromjpeg($mesg52[$randMesg52]));
$imgYMesg52 = imagesY(imagecreatefromjpeg($mesg52[$randMesg52]));
if ($imgXMesg52 > $imgYMesg52) {
 $widthMesg52 = $widthPortrait;
} else {
 $widthMesg52 = $widthLandscape;
}

$randTrilena = mt_rand(1,sizeof($trilena));
$imgXTrilena = imagesx(imagecreatefromjpeg($trilena[$randTrilena]));
$imgYTrilena = imagesY(imagecreatefromjpeg($trilena[$randTrilena]));
if ($imgXTrilena > $imgYTrilena) {
 $widthTrilena = $widthPortrait;
} else {
 $widthTrilena = $widthLandscape;
}

?>
