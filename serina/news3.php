<!doctype html>
<?php
$limit = " LIMIT 0,1000";
include("newsCore.php");
include("util/tools.php");
?>

<?php
$title="Work4Love.net - Banco de dados de Notícias.";
$description=$title;
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
    <h1 align="center"><a href="news1.php">News</a></h1>
     <br/>
     <?php
      // echo "<p><a href=index.php>[News]</a> - Date: ".$today." - Category: ".$category." - Period: ".$per." - Hashtag: ".$hashtag."</p>";
      // echo "<p>Debug [".$sql."]</p>";
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

<?php include("../include/footer.php"); ?>
</div>
</div>
<?php include("../include/bodyend.php"); ?>
</body>
</html>
