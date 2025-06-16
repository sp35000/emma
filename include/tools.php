<?php
function getAdvTgt($advSrcId) {
  // Create connection
  include("../serina/conf/db.php");
  // Create query
  $advTgtSql = "select url,advtext
  from ckropae6_serina.advtgt where id in (
   select target_fk
   from ckropae6_serina.advlnk
   where origin_fk = ".$advSrcId.
  ")";
  // echo "<p>Debug [".$advTgtSql."]</p>";
  $advTgtResult = $conn->query($advTgtSql);
  $randId=rand(0,$advTgtResult->num_rows-1);
  // echo "<p>Debug [".$randId."]</p>";
  if ($advTgtResult->num_rows > 0) {
    $rowAdvTgtCount=0;
    while($rowAdvTgt = $advTgtResult->fetch_assoc())
    {
      // echo "<p>Debug [rowAdvTgtCount=".$rowAdvTgtCount."]</p>";
      if ($rowAdvTgtCount == $randId) {
       echo "<p align=\"center\"><strong>Patrocinado: <a href=\""
       .$rowAdvTgt["url"]
       ."\" target=\"_blank\">"
       .$rowAdvTgt["advtext"]."</a></strong></p>";
      }
      $rowAdvTgtCount++;
    }
  $conn->close();
  }
}

function getVideoPlaylist($category) {
// playlist parameters
$playlists["Culture"]="https://youtube.com/playlist?list=PL1wt1uIbBJ2dkvevskW3G1TPYcb42gqfY";
$playlists["Economy"]="https://www.youtube.com/playlist?list=PL1wt1uIbBJ2fS1Yq54r-iErhKkvDxGgI-";
$playlists["Technology"]="https://www.youtube.com/playlist?list=PL1wt1uIbBJ2ddnqc-VFCJ_ASKs9ioZwrb";
$playlists["Travel"]="https://youtube.com/playlist?list=PL1wt1uIbBJ2did88IPc_X8Du8VyNZyHih";

$playlistsEmbed["Culture"]="https://www.youtube.com/embed/videoseries?list=PL1wt1uIbBJ2dkvevskW3G1TPYcb42gqfY";
$playlistsEmbed["Economy"]="https://www.youtube.com/embed/videoseries?list=PL1wt1uIbBJ2fS1Yq54r-iErhKkvDxGgI-";
$playlistsEmbed["Technology"]="https://www.youtube.com/embed/videoseries?list=PL1wt1uIbBJ2ddnqc-VFCJ_ASKs9ioZwrb";
$playlistsEmbed["Travel"]="https://www.youtube.com/embed/videoseries?list=PL1wt1uIbBJ2did88IPc_X8Du8VyNZyHih";

// show playlist
if (
  $category == "Culture"
or $category == "Economy"
or $category == "Technology"
or $category == "Travel"
) {
  $playlistUrl=$playlists[$category];
  $playlistUrlEmbed=$playlistsEmbed[$category];
  // echo "<p align=\"center\">Debug [".$playlistUrl."]</p>";

  // show url video
  echo
  "<p align=\"center\">\n"
  ."<iframe  class=\"responsive-iframe\" width=\"560\" height=\"315\" src=\""
  .$playlistUrlEmbed
  ."\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe><br/>\n"
  ."<a href=\""
  .$playlistUrl
  ."\" target=\"_blank\">".$category." Playlist</a></p>\n";
}
}

// show random image
function getRandomImage($category) {
  if ($category == "Travel") {
echo "<p align=\"center\"><span id=\"random_image\">
    <script type=\"text/javascript\"
    src=\"https://work4love.net/sig/serina/util/piwigo-random-backend.php?size=2small\"
    async>
    </script>
    </span><br/>
    <a href=\"https://work4love.net/finn/\" target=\"_blank\"><strong>Ver galeria completa de fotos</strong></a>
    <br/><br/>
    </p>";
  }
}
