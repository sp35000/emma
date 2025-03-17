<?php include("util/tools.php"); ?>

<?php
$title="Work4Love.net - Banco de dados de Notícias";
$description=$title.".";
$keywords="news,database,nature,world,brazil,brasil,america,europe,asia,oceania,africa,finance,culture,travel,technology";
include("../include/header.php");
?>
<body>
<?php
include("../include/bodystart.php");
include("../include/menusup.php");
?>

<div class="container">
<div class="row">
<div class="col-sm-12 text-center firstdiv">
<h1 align="center">News</h1>
<br/>
<!-- <div class="col-sm-12"> -->
<?php
// include("../include/tradingViewWidget.html");

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
$categories = array("Nature","World","Brasil","America","Europe","Asia","Middle East","Africa","Oceania","Health","Technology","Culture","Travel","Economy");
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
?>
<!-- </div> -->
<div class="col-sm-12 bg-grey">
<div class="col-sm-8 bg-grey">
<h2 align="center"><a href="news2.php?">Latest News</a></h2>
<p align="center"><a href="news3.php?hashtag=%23ai" class="btn btn-lg btn-success">A.I. News</a></p>
<h3 align="center">[
<a href="https://www.aljazeera.com/news/2022/2/28/russia-ukraine-crisis-in-maps-and-charts-live-news-interactive" target="_blank">Ukraine war</a>&nbsp;|&nbsp;
<a href="https://www.aljazeera.com/news/longform/2023/10/9/israel-hamas-war-in-maps-and-charts-live-tracker" target="_blank">Israel-Gaza</a>]
</h3>
<?php
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
</div>
</div>
</div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
