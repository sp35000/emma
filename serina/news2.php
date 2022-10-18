<!doctype html>
<?php
$limit = " LIMIT 0,10";
include("newsCore.php");
include("util/tools.php");
?>
<html class="no-js" lang="en">
 <head>
   <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NWRN5CB');</script>
<!-- End Google Tag Manager -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
   <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <script src="../js/sig.js"></script>
  <link rel="stylesheet" href="../css/sig.css" />
  <title>Work4Love - News - <?=$category ?></title>
  <meta  name="description" content="Work4Love.net - Banco de dados de Notícias - <?=$category ?>">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../starter-template.css" rel="stylesheet">
    <!-- <link href="../emma/w5.css" rel="stylesheet"> -->
 </head>
 <body>
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWRN5CB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
 <div w3-include-html="/sig/include/menusup-news.html"></div>
  <div class="container">
   <div class="row">
    <div class="col-md-12 text-center">
    <h1 align="center"><a href="index.php">News</a></h1>
     <form method="post" action="news3.php">
      <input name="hashtag" size="40" type="text">&nbsp;
      <input type="submit" value="Search">
     </form>
     <br/>
     <?php
      //echo "<p><a href=index.php>[News]</a> - Date: ".$today." - Category: ".$category." - Period: ".$per." - Hashtag: ".$hashtag."</p>";
      //echo "<p>Debug [".$sql."]</p>";
     ?>
</div>
 <div class="col-sm-12 bg-grey">
<?php
if ($category <> "All") {
 echo "<h2 align=center>$category</a></h2><ul>";
}
getAdvTgt(5);
getVideoPlaylist($category);
getRandomImage($category);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   if ($row["initial_date"]<= 20190101) {
     echo "<li><a href=\"".$row["link"]."\" target=\"_blank\">".$row["initial_date"]." [".$row["category"]."] ".$row["link"]."</a></li>\n";
   } else {
     echo "<li><a href=\"".$row["link"]."\" target=\"_blank\">".$row["initial_date"]." [".$row["category"]."] ".$row["title"]."</a></li>\n";
   }
  }
} else {
 echo "<li>No result.</li>\n";
}

$conn->close();
?>
  </ul>
<p align="center"><a href="news3.php?category=<?=$category?>">More...</a></p>
</div>
<div w3-include-html="/sig/include/footer.html"></div>
</div>
</div>
<script>includeHTML();</script>
 </body>
</html>
