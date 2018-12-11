<?php 
$servername = "127.0.0.1";
$username = "root";
$password = ""; 
$dbname = "piestany";
// Create connection
$connect = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$connect) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
?>

