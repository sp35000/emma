<!doctype html>
<html class="no-js" lang="en">
 <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="../js/sig.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/sig.css" />
  <title>Serina Admin</title>
 </head>
 <body>
  <div class="container">
   <div class="row">
   <div class="col-md-12">
    <br/><br/>
    <h1 align="center">Serina Admin</h1>
     <form method="post" action="admin.php">
      <p>Title:&nbsp;<input type="text" name="title" id="title" size="80"></input>
      <br/>
      <!-- URL:&nbsp;<input type="text" id="link" name="link"></input> -->
      URL:&nbsp;<textarea id="link" name="link" rows="4" cols="80"></textarea><br/>
      &nbsp;Date:&nbsp;<input type="text" id="initial_date" name="initial_date"></input>
      &nbsp;<input type="button" value="Clean Fields" onclick="cleanField('title','link')"></input>
      &nbsp;<input type="button" value="Clear" onclick="clearField('title')"></input>
      &nbsp;<input type="button" value="Get Title" onclick="getTitle()"></input>
      &nbsp;<input type="button" value="Get Title Python" onclick="getTitlePython()"></input>
      <span id="loaderDiv" style="display:none;"><img src="../js/ajax-loader.gif" alt="Loading" /></span>
      </p>
      <p>Category:
      <select name="category">
        <option value="Economy">Economy</option>
        <option value="Brasil">Brasil</option>
        <option value="World">World</option>
        <option value="Technology">Technology</option>
        <option value="Europe">Europe</option>
        <option value="Nature">Nature</option>
        <option value="America">America</option>
        <option value="Asia">Asia</option>
        <option value="Culture">Culture</option>
        <option value="Travel">Travel</option>
        <option value="Africa">Africa</option>
        <option value="Oceania">Oceania</option>
        <option value="Health">Health</option>
        <option value="Middle East">Middle East</option>
       <option value="AI">AI</option>
      </select>&nbsp;
      <input type="hidden" name="media" value="text" />
      <!-- Media:&nbsp;
      <select name="media">Media
       <option value="text">Text</option>
       <option value="video">Video</option>
      </select>&nbsp; 
      Period:&nbsp;
      <select name="per">Period
       <option value="All">All</option>
       <option value="ST">Short Term</option>
       <option value="MT">Medium Term</option>
       <option value="LT">Long Term</option>
      </select>&nbsp;-->
      Hashtag:&nbsp;
      <input name="hashtag" type="text">&nbsp;
      <input type="reset" value="Reset">&nbsp;
      <input type="submit" value="OK">
     </form>
     <hr/>
     <form method="get" action="/sig/serina/news5.php" target="_blank">
      Keyword:&nbsp;
      <input name="hashtag" type="text">&nbsp;
      <input type="submit" value="News Edit">&nbsp;
    </form>
    <hr/>
    <div class="col-md-12">
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
    $media = test_input($_POST["media"]);
    $per = test_input($_POST["per"]);
    $hashtag = test_input($_POST["hashtag"]);
    $category = test_input($_POST["category"]);
    $initial_date = test_input($_POST["initial_date"]);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// validate date provided by user
if ($initial_date != "") {
    $current_year = substr($initial_date,0,4);
    $current_month = substr($initial_date,4,2);
    $current_day = substr($initial_date,6,2);
}

if (checkdate($current_month,$current_day,$current_year)) {
    $today = $initial_date;
// if date is invalid, consider as empty
} else {
    $initial_date = "";
}

// define initial date if empty
if ($initial_date == "") {
    $today = date("Ymd");
    $current_year = date("Y");
    $current_month = date("m");
    $current_day = date("d");
}
// define final date
$mt_year = $current_year + 1;
$mt_date = $mt_year . $current_month . $current_day;
$lt_year = $current_year + 5;
$lt_date = $lt_year . $current_month . $current_day;

if ($per == "ST") {
    $when = "final_date <= " . $mt_date;
    $per = "Short Term";
} elseif ($per == "MT") {
    $when = "final_date > " . $mt_date . " AND final_date < " . $lt_date;
    $per = "Medium Term";
} elseif ($per == "LT") {
    $when = "final_date > " . $lt_date;
    $per = "Long Term";
} else {
    $when = "final_date > 0";
    $per = "All";
}

// Define category
if (($category != "") && ($category != "World")) {
    $clause = " AND category = '" . $category . "'";
} else {
    $category = "World";
}

// Add hashtag, if exists
if ($hashtag != "") {
    $hashtagclause = " AND link LIKE '%" . $hashtag . "%' OR hashtag LIKE '%" . $hashtag . "%'";
}

// if URL and title are not empty, insert the register
if (($link != "") && ($title != "")) {
    $sql = "INSERT INTO " . $database . "." . $table . " (title,category,link,media,initial_date,final_date,hashtag) VALUES(";
    $sql = $sql . "'" . $title . "',";
    $sql = $sql . "'" . $category . "',";
    $sql = $sql . "'" . $link . "',";
    $sql = $sql . "'" . $media . "',";
    $sql = $sql . $today . ",";
    $sql = $sql . $lt_date . ",";
    $sql = $sql . "'" . $hashtag . "');";
    if ($conn->query($sql) === true) {
        echo "<p class=\"bg-success\">New record created successfully.</p>";
    } else {
        echo "<p\"bg-danger\">Error: " . $sql . "<br>" . $conn->error;
    }
    echo "<p>Debug [" . $sql . "]</p>";
} else {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if ($link == "") {echo "<p\"bg-danger\">Error: empty link.<br>";}
      else {echo "<p\"bg-danger\">Error: empty title.<br>";}
  }
}

$conn->close();
?>
  </ul><hr/>
</div>
</body>
</html>
