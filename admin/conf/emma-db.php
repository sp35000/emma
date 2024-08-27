<?php
// Create connection
$servername = "work4love.net";
$username = "ckropae6_wp";
$password = "3161fimu(*";
$database = "ckropae6_emma";
$table = "news";
//echo "conf/db.php: ".$servername."/".$username."/".$password;
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
?>
