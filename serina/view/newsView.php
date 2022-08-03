<?php
function show_result($result,$category) {
  // define variables and set to empty values
  $per = $hashtag = "";
  if ($result->num_rows > 0) {
  // if exists, output data of each row
  while($row = $result->fetch_assoc()) 
  {
   if ($row["initial_date"]<= 20190101) {
     echo "<li><a href=\"".$row["link"]."\" target=\"_blank\">".$row["link"]."</a></li>";
   } else {
     echo "<li><a href=\"".$row["link"]."\" target=\"_blank\">".$row["title"]."</a></li>\n"; 
   }
  }
 } else {
  // if not, a message.
  echo "<li>No result.</li>\n";
 } 
}

function show_video($result,$category) {
 // define variables and set to empty values
 $per = $hashtag = "";
 if ($result->num_rows > 0) {
  // if exists, output data of each row
  while($row = $result->fetch_assoc()) 
  {
   echo "<div class=\"col-sm-4\">\n";
   echo "<p><iframe src=\"".$row["link"]."\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>\n<br/>".$row["title"]."</div>\n"; 
  }
 } else {
  // if not, a message.
  echo "<p align=\"center\">No videos available at this moment.</p>\n";
 } 
}

?>
