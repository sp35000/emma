<?php
$limit = " LIMIT 0,10";
include("newsCore.php");
include("util/tools.php");
      // echo "<p><a href=index.php>[News]</a> - Date: ".$today." - Category: ".$category." - Period: ".$per." - Hashtag: ".$hashtag."</p>";
      // echo "<p>Debug [".$sql."]</p>";
if ($category <> "All") {
 echo "<h2 align=center>$category</a></h2><ul>";
}
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
echo "</ul>";
?>
