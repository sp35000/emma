<?php
session_start();
$vfile = $_SESSION['vfile'];
$current = $_GET['current'];
$previous = $current - 1;
$next = $current + 1;
$minus = $current - 100;
$plus = $current + 100;
$minus1k = $current - 1000;
$plus1k = $current + 1000;
$step = 99;
$pg_ini = $current;
$pg_fin = $current + $step;

function show_thumbnail($vfile,$ini,$fin) {
 for($i=$ini;$i<=$fin;$i++) {
   echo "<a href=imgslider.php?current=" . $i . ">";
   echo "<img src=" . $vfile[$i] . " width=25% alt=\"" . $vfile[$i] . "\ loading=\"lazy\" title=\"" . $vfile[$i] . "\"></img></a>\n";
 }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Image Slider - <?= $vfile[$current] ?></title>

    <!-- Bootstrap -->
 <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
<style>
body {
    font-family: 'Open Sans';font-size: 22px;
}
</style>
  </head>
<body>
 <div class="container">
  <div class="row text-center">
   <div class="col-sm-12">
    <p>
    <a href=./imgmenu.php?current=<?= $minus1k?> class="btn btn-lg btn-success"><<</a>
    <a href=./imgmenu.php?current=<?= $minus?> class="btn btn-lg btn-success"><</a>
    <a href=./imgmenu.php?current=<?= $plus?> class="btn btn-lg btn-success">></a>
    <a href=./imgmenu.php?current=<?= $plus1k?> class="btn btn-lg btn-success">>></a><br/>
<p>
<?php 
show_thumbnail($vfile,$pg_ini,$pg_fin);
?>
</p>
    <a href=./imgmenu.php?current=<?= $minus1k?> class="btn btn-lg btn-success"><<</a>
    <a href=./imgmenu.php?current=<?= $minus?> class="btn btn-lg btn-success"><</a>
    <a href=./imgmenu.php?current=<?= $plus?> class="btn btn-lg btn-success">></a>
    <a href=./imgmenu.php?current=<?= $plus1k?> class="btn btn-lg btn-success">>></a><br/>
    <a href="imgloader.php" class="btn btn-lg btn-success">Start</a>
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
