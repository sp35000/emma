<?php
$limit = " LIMIT 0,10";
include("/home2/ckropae6/public_html/sig/serina/newsCore.php");
include("/home2/ckropae6/public_html/sig/serina/util/tools.php");
      // echo "<p><a href=index.php>[News]</a> - Date: ".$today." - Category: ".$category." - Period: ".$per." - Hashtag: ".$hashtag."</p>";
      // echo "<p>Debug [".$sql."]</p>";
if ($category <> "All") {
 echo "<h2 align=center>$category Last News</a></h2><ul>";
}
$dateUrl = "https://work4love.net/news/index.php?date=";
$categoryUrl = "https://work4love.net/sig/serina/news2.php?category=";
$hashtagUrl = "https://work4love.net/sig/news/search.php?hashtag=";
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   $line = "<li>[<a href=\"".$dateUrl.$row["initial_date"]."\">".$row["initial_date"]."</a>]&nbsp;";
   $line = $line."[<a href=\"".$categoryUrl.$row["category"]."\">".$row["category"]."</a>]&nbsp;";
   if ($row["initial_date"]<= 20190101) {
     $line = $line."<a href=\"".$row["link"]."\" target=\"_blank\">".$row["link"]."</a>";
   } else {
     $line = $line."<a href=\"".$row["link"]."\" target=\"_blank\">".$row["title"]."</a>";
   }
   if ($row["hashtag"] != "") {
     $hashtagParm = str_replace("#","%23",$row["hashtag"]);
     $line = $line."&nbsp;[<a href=\"".$hashtagUrl.$hashtagParm."\">".$row["hashtag"]."</a>]";
   }
   $line=$line."</li>\n";
   echo $line;
  }
} else {
 echo "<li>No result.</li>\n";
}
$conn->close();
echo "</ul>";
?>
