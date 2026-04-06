<?php
// Tell PHP that we'll be outputting UTF-8 to the browser
mb_http_output('UTF-8');

// Create connection
include("./conf/db.php");

// define variables and set to empty values
$category = $per = $hashtag = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $title = test_input($_POST["title"]);
 $link = test_input($_POST["link"]);
 $per = test_input($_POST["per"]);
 $hashtag = test_input($_POST["hashtag"]);
 $category = test_input($_POST["category"]);
 $date = test_input($_POST["date"]);
}

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $title = test_input($_GET["title"]);
  $link = test_input($_GET["link"]);
  $per = test_input($_GET["per"]);
  $hashtag = test_input($_GET["hashtag"]);
  $category = test_input($_GET["category"]);
  $date = test_input($_GET["date"]);
}

function test_input($data) {
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}

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

// search specific date
if ($date != "") {
  $when = "initial_date = ".$date;
}

// Define category
if (($category != "") && ($category != "All")) {
 $clause = " AND category = '".$category."'";
} else {
 $category = "All";
}

// Add hashtag, if exists
if ($hashtag != "") {
 $hashtagclause =
  " AND (title LIKE '%".$hashtag.
  "%' OR link LIKE '%".$hashtag.
  "%' OR hashtag LIKE '%".$hashtag."%')";
}

// and logical delection = 0 (active)
$logicaldelection = " AND in_logical_deletion = 0";

// Order by date
$orderby = " ORDER BY initial_date DESC, id DESC".$limit.";";

$sql = "
(SELECT pk_news as id,title,category,link,initial_date,hashtag
FROM ".$database.".cnews
WHERE ".$when.$clause.$mediaclause.$hashtagclause.")
UNION
(SELECT id,title,category,link,initial_date,hashtag
FROM ".$database.".".$table."
WHERE ".$when.$clause.$mediaclause.$hashtagclause.$logicaldelection.")"
.$orderby;

$result = $conn->query($sql);
?>
