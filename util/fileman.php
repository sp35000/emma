<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
 <title>Serina File Manager</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
 <script src="/bootstrap/js/bootstrap.min.js"></script>
 <script src="/sig/js/sig.js"></script>
 <link rel="stylesheet" href="/sig/css/sig.css" />
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<?php include("./menusup.html"); ?>
<div class="col-sm-12 text-center bg-grey">
  <h1>Serina File Manager</h1>
  <h2><?php echo $_SERVER['SCRIPT_FILENAME']; ?></h2>
  <!-- <p><img src="fileman.jpg" width="30%" height="30%"></p> -->
  <hr/>
  <p><strong>[<a href="/sig/" target="_top">Home</a>&nbsp;|&nbsp;<a href ="javascript:history.back()">Back</a>]</strong></p>
  <p><?php foreach(glob("*") as $file) { echo "<a href=\"".$file."\">".$file."</a><br/>\n"; } ?></p>
  <hr/>
</div>
</body>
</html>
