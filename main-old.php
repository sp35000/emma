<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Emma</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sig.css" />
</head>

<?php

$girls = getImages("images");
$address[1]="/r target=\"_blank\"";
$address[2]="trilena";
$address[3]="";
$address[4]="elle";
$address[5]="finn";
$address[6]="\"https://work4love.net/coronavirus\" target=\"_blank\"";
$address[7]="marla";
$address[8]="";
$address[9]="rommie";
$address[10]="serina";
$address[11]="trance";
$address[12]="#veronica";
$address[13]="violet";
$address[14]="emma";

$flow="start ";

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

$randMax = mt_rand(1,sizeof($max));
$imgXMax = imagesx(imagecreatefromjpeg($max[$randMax]));
$imgYMax = imagesy(imagecreatefromjpeg($max[$randMax]));
if ($imgXMax > $imgYMax) {
 $widthMax = "30%";
} else {
 $widthMax = "20%";
}

$randAmidala = mt_rand(1,sizeof($amidala));
$imgXAmidala = imagesx(imagecreatefromjpeg($amidala[$randAmidala]));
$imgYAmidala = imagesy(imagecreatefromjpeg($amidala[$randAmidala]));
if ($imgXAmidala > $imgYAmidala) {
 $widthAmidala = "30%";
} else {
 $widthAmidala = "20%";
}

$randFinn = mt_rand(1,sizeof($finn));
$imgXFinn = imagesx(imagecreatefromjpeg($finn[$randFinn]));
$imgYFinn = imagesY(imagecreatefromjpeg($finn[$randFinn]));
if ($imgXFinn > $imgYFinn) {
 $widthFinn = "30%";
} else {
 $widthFinn = "20%";
}
?>
<body>
  <div class="row">
    <div class="large-12 columns text-center">
      <article>
<br/>
<br/>
<p><?php show_thumbnail($girls,$address,1,sizeof($girls)); ?> </p>

<h1>Emma</h1>

<ul id="hlist">
  <li><A HREF="https://www.timeanddate.com/" target="_blank">TIME</A>
[<li><A HREF="https://www.todamateria.com.br/eras-geologicas/" target="_blank">Geology</A>|
<li><A HREF="https://www.todamateria.com.br/divisao-da-historia/" target="_blank">History</A>]&nbsp;
(E)&nbsp;SPACE]
  <br />
  <li>[NATURE&nbsp;(E)&nbsp;
    <a href="https://www.bouncymaps.com" target="_blank">WORLD</a>[
  <li><a href="https://www.cia.gov/library/publications/resources/the-world-factbook/"
  target="_blank">CIA</a>|
  </li>
  <li><a href="https://www.un.org/en/" target="_blank">UN</a>|</li>
  <li><a href="https://www.unpri.org/" target="_blank">PRI</a>] ] </li>
  <br />

<p>
<a href="<?= $finn[$randFinn] ?>" target="_blank"><img src="<?= $finn[$randFinn] ?>" width="<?= $widthFinn ?>"></a>
<a href="<?= $amidala[$randAmidala] ?>" target="_blank"><img src="<?= $amidala[$randAmidala] ?>" width="<?= $widthAmidala ?>"></a>
<a href="<?= $max[$randMax] ?>" target="_blank"><img src="<?= $max[$randMax] ?>" width="<?= $widthMax ?>"></a>
<br/>
</p>
</div>
<div id="elle" class="large-12 columns text-center">
<br/>
<br/>

<h2>Elle Admin</h2>
<p>Emma [ <?=$flow ?>]</p>
<p>
<a href="/" class="btn btn-lg btn-success" target="_blank">server</a>
<a href="/phpinfo.php" class="btn btn-lg btn-success">phpinfo</a>
<a href="/adminer.php" class="btn btn-lg btn-success" target="_blank">adminer</a>
<a href="http://localhost:32400" class="btn btn-lg btn-success" target="_blank">plex</a>
<a href="http://192.168.1.1" class="btn btn-lg btn-success" target="_blank">r01</a>
<a href="http://192.168.0.1" class="btn btn-lg btn-success" target="_blank">r02</a>
</p>
<p>
<a href="/cgi-bin/htrance.cgi" class="btn btn-lg btn-success" target="_blank">hl</a>
<a href="/cgi-bin/trance.cgi" class="btn btn-lg btn-success" target="_blank">wl</a>
<a href="trance/logs.html" class="btn btn-lg btn-success" target="_blank">TranceLogs</a>
<a href="https://www.work4love.net/sig/trance/tranceacc.php" class="btn btn-lg btn-success" target="_blank">TranceAcc</a>
<a href="finn-old.php" class="btn btn-lg btn-success" target="_blank">FinnOld</a>
<a href="finn.php" class="btn btn-lg btn-success" target="_blank">FinnCurrent</a>
<a href="https://docs.google.com/spreadsheets/d/1JeT-BPOfqis06Zrg9wVS-557m-kqP8lPQhElDNM2HgI/edit#gid=0" class="btn btn-lg btn-success" target="_blank">RommieQuotes</a>
<a href="https://www.work4love.net/sig/serina/admin.php" class="btn btn-lg btn-success" target="_blank">SerinaAdm</a>
</p>

<h2><a href="/lab/" target="_blank">Elle Lab</a></h2>
  <p align="center">
  <a href="http://pc19.ck:1000" class="btn btn-lg btn-success" target="_blank">Ngnix</a>
  <a href="http://pc19.ck:2000" class="btn btn-lg btn-success" target="_blank">Flask</a>
  <a href="http://pc19.ck:3000" class="btn btn-lg btn-success" target="_blank">Node.js</a>
  <a href="http://pc19.ck:4000" class="btn btn-lg btn-success" target="_blank">Tutum-PHP</a>
  <a href="http://pc19.ck:5000" class="btn btn-lg btn-success" target="_blank">Next Cloud</a>
  <a href="http://pc19.ck:10000" class="btn btn-lg btn-success" target="_blank">Serina CRUD</a>
  <a href="http://pc19.ck:11000" class="btn btn-lg btn-success" target="_blank">Marla CRUD</a>
</p>

<h2>Serina Intranet</h2>
<iframe src="serina/books/" width="800" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
<p><a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></p><hr/>
</div>

<div id="veronica" class="large-12 columns text-center" style="padding-left:5%;padding-right:5%">
<br/>
<br/>
<h2 align="center">Veronica</h2>
<ul id="hlist">
<li>[<a href="http://www.cassi.com.br" target="_blank">Cassi</a>|</li>
<li><a href="http://www.onofre.com.br/" target="_blank">Onofre</a>] </li>
<li><a href="https://www.panelinha.com.br" target="_blank">Panelinha</a></li>
<li>[<a href="http://www.idealclube.org.br" target="_blank">Ideal</a>|</li>
<li><a href="http://fortaleza.aabb.com.br" target="_blank">AABB</a>] </li>
</ul>
</div>

<div id="veronica02" class="large-12 columns" style="padding-left:5%;padding-right:5%">
<br/>
<br/>
<small><?php include 'veronica/alcoolismo.html' ?></small>
<p align="center"><a href="#"><span class="glyphicon glyphicon-chevron-up"></span></a></p>
</div>
</article>
</div>
</div>
<footer class="row">
<hr />
<div class="col-md-12 columns">
<p class="annotation">Alpha Bravo Charlie Delta Echo Foxtrot Golf
Hotel India Juliet King*** Lima Mike<br />
November Oscar Papa Quebec Romeo Sierra Tango Uniform Victor
Whisky<br>
Xavier* Ypsilon** Zebra*** (Otan *French **German ***American)
</div>
</footer>
</body>
</html>
