<?php
session_start();
$vfile = $_SESSION['vfile'];
$current = $_GET['current'];
$previous = $current - 1;
$next = $current + 1;
$minus = $current - 50;
$plus = $current + 50;
$minus1k = $current - 1000;
$plus1k = $current + 1000;
$last = sizeof($vfile);
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
<script>
var myVar = setInterval(myTimer, 3000);
var counter = <?= $current ?>;
function myTimer() {
 counter++;
 var newLocation = window.location.protocol + "://" + window.location.hostname + window.location.pathname + "?current=" + counter;
 newLocation = "?current=" + counter;
 window.location = newLocation;
}
</script>
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
    <h1>Image Slider</h1>
    <p>
    <a href="imgloader.php" class="btn btn-lg btn-success">Start</a>
    <a href=./imgmenu.php?current=<?= $previous?> class="btn btn-lg btn-success">Menu</a>
    <a href=./imgslider.php?current=<?= $last?> class="btn btn-lg btn-success">End</a><br/><br/>
    <br/>
    <a href=./imgslider.php?current=<?= $previous?> class="btn btn-lg btn-success">Previous</a>
    <a href=./<?= $vfile[$current] ?>>
    <img src=<?= $vfile[$current] ?> width="60%" alt=<?= $vfile[$current] ?> title=<?= $vfile[$current] ?> >
    </img></a>
    <a href=./imgslider.php?current=<?= $next?> class="btn btn-lg btn-success">Next</a><br/>
    [<?= $vfile[$current] ?>]
    <br/><br/>
    <a href=./imgslider.php?current=<?= $minus1k?> class="btn btn-lg btn-success">-1k</a>
    <a href=./imgslider.php?current=<?= $minus?> class="btn btn-lg btn-success">-50</a>
    <a href=./imgmenu.php?current=<?= $previous?> class="btn btn-lg btn-success">Menu</a>
    <a href=./imgslider.php?current=<?= $plus?> class="btn btn-lg btn-success">+50</a>
    <a href=./imgslider.php?current=<?= $plus1k?> class="btn btn-lg btn-success">+1k</a>
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
