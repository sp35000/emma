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
include("../serina/util/tools.php");

?>

<div class="container">
<div class="col-md-12 columns text-center firstdiv">

<h1>Videos</h1>

<p><a href="https://work4love.net/videos/" class="btn btn-lg btn-success" target="_blank">All Playlists</a></p>

<h2>News</h2>
<?php getVideoPlaylist("News"); ?>

<h2>Economy</h2>
<?php getVideoPlaylist("Economy"); ?>

<h2>Culture</h2>
<?php getVideoPlaylist("Culture"); ?>

<h2>Travel</h2>
<?php getVideoPlaylist("Travel"); ?>

<h2>Technology</h2>
<?php getVideoPlaylist("Technology"); ?>

<p><a href="https://work4love.net/videos/" class="btn btn-lg btn-success" target="_blank">All Playlists</a></p>

</div>
</div>
<?php include("../include/footer.php"); ?>
</div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
