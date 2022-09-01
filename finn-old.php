<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
 <title>Finn iHome Edition</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
 <script src="/bootstrap/js/bootstrap.min.js"></script>
 <script src="js/sig.js"></script>
 <link rel="stylesheet" href="css/sig.css" />
</head>

<?php
$vfile = $_SESSION['finnall'];
include("./util/imgutils.php");
if (isset($_SESSION["finnall"])) {
 $finn = $_SESSION["finnall"];
}
else {
 $finn = getImages("finn-DES/old");
 $_SESSION["finnall"]=$finn;
}
$current = $_GET['current'];
if ($current == 0) {
 $current = mt_rand(1,sizeof($finn));
}
$previous = $current - 1;
$next = $current + 1;
$minus = $current - 100;
$plus = $current + 100;
$minus1k = $current - 1000;
$plus1k = $current + 1000;
$step = 99;
$pg_ini = $current;
$pg_fin = $current + $step;

function show_thumbnail_finn($vfile,$ini,$fin) {
 $eol=0;
 for($i=$ini;$i<=$fin;$i++) {
   $eol++;
   echo "<a href=\"" . $vfile[$i] . "\" target=\"_blank\">";
   echo "<img src=\"" . $vfile[$i] . "\" width=25% alt=\"" . $vfile[$i] . "\" loading=\"lazy\" title=\"" . $vfile[$i] . "\"></img></a>\n";
   if ($eol == 3) {
    echo "<br/><br/>\n";
    $eol=0;
   }
 }
}

?>
<body>
<?php include("./include/menusup.html"); ?>
 <div class="container">
  <div class="row text-center">
   <div class="col-sm-12">
<br/><br/>
<h1 align="center">Finn</h1>
    <p>
    <a href=./finn-old.php?current=<?= $minus1k?> class="btn btn-lg btn-success"><<</a>
    <a href=./finn-old.php?current=<?= $minus?> class="btn btn-lg btn-success"><</a>
    <a href=./finn-old.php?current=<?= $plus?> class="btn btn-lg btn-success">></a>
    <a href=./finn-old.php?current=<?= $plus1k?> class="btn btn-lg btn-success">>></a><br/>
<p>
<?php
show_thumbnail_finn($vfile,$pg_ini,$pg_fin);
?>
</p>
    <a href=./finn-old.php?current=<?= $minus1k?> class="btn btn-lg btn-success"><<</a>
    <a href=./finn-old.php?current=<?= $minus?> class="btn btn-lg btn-success"><</a>
    <a href=./finn-old.php?current=<?= $plus?> class="btn btn-lg btn-success">></a>
    <a href=./finn-old.php?current=<?= $plus1k?> class="btn btn-lg btn-success">>></a><br/>
    </p>
   </div>
  </div>
 </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
