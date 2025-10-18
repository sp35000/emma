<?php  
$advSrcId=1;
include("/home2/ckropae6/public_html/sig/serina/conf/db.php");
  // Create query
  $advTgtSql = "select url,advtext
  from ckropae6_serina.advtgt where id in (
   select target_fk
   from ckropae6_serina.advlnk
   where origin_fk = ".$advSrcId.
  ")";
  $advTgtResult = $conn->query($advTgtSql);
  $randId=rand(0,$advTgtResult->num_rows-1);
  if ($advTgtResult->num_rows > 0) {
    $rowAdvTgtCount=0;
    while($rowAdvTgt = $advTgtResult->fetch_assoc())
    {
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
?>
