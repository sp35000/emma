<?php
// Create connection
$servername = "ckrops.com";
$username = "ckropae6_wp";
$password = "3166snaq(*";
$database = "ckropae6_serina";
$table = "news";
//echo "conf/db.php: ".$servername."/".$username."/".$password;
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
