<?php
function create_query($category,$media,$itens) {
    // Create connection
    include("./conf/db.php");

    // Define period
    $today = date("Ymd");
    $current_year = date("Y");
    $current_month = date("m");
    $current_day = date("d");
    $mt_year = $current_year + 1;
    $mt_date = $mt_year.$current_month.$current_day;
    $lt_year = $current_year + 5;
    $lt_date = $lt_year.$current_month.$current_day;

    if ($per == "ST") {
     $when = "final_date <= ".$mt_date;
     $per = "Short Term";
    }
    elseif ($per == "MT") {
     $when = "final_date > ".$mt_date." AND final_date < ".$lt_date;
     $per = "Medium Term";
     }
     elseif ($per == "LT") {
     $when = "final_date > ".$lt_date;
     $per = "Long Term";
    }
    else {
     $when = "final_date > 0";
     $per = "All";
    }

    // Define category
    if (($category != "") && ($category != "All")) {
     $clause = " AND category = '".$category."'";
    } else {
     $category = "All";
    }

    // Define media
    $mediaclause = " AND media = '".$media."'";

    // Add hashtag, if exists
    if ($hashtag != "") {
     $hashtagclause = " AND link LIKE '%".$hashtag."%' OR hashtag LIKE '%".$hashtag."%'";
    }

    // Order by date
    $orderby = " ORDER BY initial_date DESC,id DESC";
    $limit = " LIMIT 0,".$itens;
    $sql = "
    SELECT id,title,category,link,initial_date
    FROM ".$database.".".$table."
    WHERE ".$when.$clause.$mediaclause.$hashtagclause." "
    .$orderby.$limit;
    // echo "<p>Debug [".$sql."]</p>";
    $result = $conn->query($sql);
    $conn->close();
    return $result;
   }
?>
