<?php 
$servername = "mustafa.codefactory.live";
$username = "mustafac_piestan";
$password = "cosmos@@"; 
$dbname = "mustafac_piestany";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}
?>

