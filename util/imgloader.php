<?php
session_start();
$cont=1;
$folder="ScreenMaster";
$filetype="*";
foreach(glob($folder."/".$filetype) as $file) {
 $vfile[$cont] = $file;
 $cont++;
}
// Sort files by modified time, latest to earliest 
// Use SORT_ASC in place of SORT_DESC for earliest to latest
array_multisort(array_map('filetime',$vfile),SORT_NUMERIC,SORT_ASC,$vfile );
$_SESSION['vfile'] = $vfile;
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Image Loader</title>

    <!-- Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="../css/starter-template.css" rel="stylesheet">
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
<br/>
<br/>
<h1>Image Loader</h1>
<p><a href="imgmenu.php?current=1" class="btn btn-lg btn-success">Start</a></p>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <!-- Include all compiled plugins (below), or include individual files as needed -->
     <script src="/bootstrap/js/bootstrap.min.js"></script> 
  </body>
