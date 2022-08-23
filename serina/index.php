<!doctype html>
<?php include("util/tools.php"); ?>
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
    <title>Work4Love - News</title>
    <meta  name="description" content="Work4Love.net - Notícias de hoje.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="../js/sig.js"></script>
    <link rel="stylesheet" href="../css/sig.css" />
   </head>
 <body>
   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NWRN5CB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
 <?php include("../include/menusup.html"); ?>
  <div class="container">
   <div class="row">
    <div class="col-sm-12 text-center">
    <h1 align="center">Serina</h1>
    <form method="post" action="news3.php">
     <input name="hashtag" size="40" type="text">&nbsp;
     <input type="submit" value="Search">
    </form>
    <br/>
</div>
<div class="col-sm-12">
<?php
include("../include/tradingViewWidget.html");

// Tell PHP that we'll be outputting UTF-8 to the browser
mb_http_output('UTF-8');

// main
include("./conf/db.php"); // create database connection
// include MVC
include("./model/newsModel.php");
include("./view/newsView.php");
include("./util/security.php");

// define and initialize variables
$category = $per = $hashtag = "";
$categories = array("Nature","World","Brasil","America","Europe","Asia","Africa","Oceania","Technology","Culture","Travel","Economy");
$lenghtCategories = sizeof($categories);
$divBreak = 1;
$media = "text";

// sanitize input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $title = test_input($_POST["title"]);
 $link = test_input($_POST["link"]);
 $per = test_input($_POST["per"]);
 $hashtag = test_input($_POST["hashtag"]);
 $category = test_input($_POST["category"]);
}
echo "</div>\n";
echo "<div class=\"col-sm-12 bg-grey\">\n";
echo "<div class=\"col-sm-8 bg-grey\">\n";

// show last news
echo "<h2 align=\"center\"><a href=\"news2.php?\">Latest News</a></h2>\n";
echo "<h3 align=\"center\"><a href=\"https://www.aljazeera.com/news/2022/2/28/russia-ukraine-crisis-in-maps-and-charts-live-news-interactive\" target=\"_blank\">Russia-Ukraine war by the numbers: Live Tracker</a></h3>\n";

echo "<h3 align=\"center\"><a href=\"news2.php?hashtag=corona\">Coronavirus</a></h3>\n";
echo "<p align=\"center\"><a href=\"https://work4love.net/coronavirus/\" class=\"alert-link\" target=\"_blank\">Sites úteis durante a quarentena do coronavírus</a></p>\n";
getAdvTgt(5);

// make queries
$result = create_query($categories[$counter],$media,10);

// show results
echo "<ul>\n";
show_result($result,"All");
echo "</ul></div>\n";

// embeding twitter
echo "<div class=\"col-sm-4 text-right\">\n";
?>
<a class="twitter-timeline" data-width="300" data-height="450" data-theme="light" href="https://twitter.com/slpng_giants_pt?ref_src=twsrc%5Etfw">Tweets by slpng_giants_pt</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
<?php
echo "</div>\n";

// show videos
?>
<div class="col-sm-12 text-center">
<h2 align="center"><a href="https://www.youtube.com/playlist?list=PL1wt1uIbBJ2cZqLDHTFJUHhife9lEiCzl" target="_blank">News - Video Playlist</a></h2>
<div class="frame-container">
<iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/videoseries?list=PL1wt1uIbBJ2cZqLDHTFJUHhife9lEiCzl" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
</div>
<?php

// show categories
echo "<div class=\"col-sm-12 bg-grey\">\n";
getAdvTgt(5);
for($counter = 0; $counter < $lenghtCategories; $counter++) {

// bootstrap: open a new col-sm-12 in each 2 col-sm-6
 echo "<div class=\"col-sm-6\">\n";
 echo "<h2 align=\"center\"><a href=\"news2.php?category=$categories[$counter]\">$categories[$counter]</a></h2>\n";
 getVideoPlaylist($categories[$counter]);
 echo "<ul>\n";

// make queries
 $media = "text";
 $result = create_query($categories[$counter],$media,4);

// show results
 show_result($result,$categories[$counter]);
 echo "</ul></div>\n";

// bootstrap: close col-sm-12 in each 3 col-sm-4
 if ($divBreak == 2) {
  echo "</div>\n";
  echo "<div class=\"col-sm-12 bg-grey\">\n";
  getAdvTgt(5);
  $divBreak = 0;
 }
 $divBreak++;
}

?>
</div>
<div class="col-sm-12 text-center">
<div class="col-sm-6 text-center">
<h2>Special Edition</h2>
<p><a href="https://www.canalmeio.com.br/edicoes/2020/05/22/edicao-extra-celso-de-mello-torna-publico-video-de-reuniao-de-bolsonaro/" target="_blank">[Canal Meio] EDIÇÃO EXTRA: CELSO DE MELLO TORNA PÚBLICO VÍDEO DE REUNIÃO DE BOLSONARO</a></p>

<div class="frame-container">
<iframe class="responsive-iframe" width="560" height="315" src="https://www.youtube.com/embed/by_uXO9EjUU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<p><a href="https://static.poder360.com.br/2020/05/transcricao-video-reuniao22abr.pdf" target="_blank">Transcri&ccedil;&atilde;o</a></p>
</div>

<div class="col-sm-6 text-center">
  <h2><a href="../charlotte/" target="_blank">Formula 1</a></h2>
  <!-- embedding Google spreadsheet-->
  <div class="frame-container">
  <iframe class="responsive-iframe" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQLPsbmxzdKacH8eAwqVVW2_OXZVEX6cEsEOoWxJhwpTy4ablWcb1J8uWXZN0IaDqiKfyO4t6qntxIj/pubhtml?gid=1518303276&amp;single=true&amp;widget=true&amp;headers=false" width="380 px" height="450 px"></iframe>
</div>
</div>
</div>
<script>includeHTML();</script>
</body>
</html>

<?php
?>
