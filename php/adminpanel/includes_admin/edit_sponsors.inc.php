<?php 
	include_once "dbh.inc.php";
	
	// initialize variables
	$logo = "";
	$address = "";
	$email = "";
	$name = "";

if (isset($_POST['update'])) {
	$logo = $_POST['sponsors_logo'];
	$address = $_POST['sponsors_address'];
	$email = $_POST['sponsors_email'];
	$name = $_POST['sponsors_name'];
	$id = $_POST['id'];
	mysqli_query($conn, "UPDATE sponsors SET  sponsors_logo='$logo', sponsors_address='$address', sponsors_email='$email', sponsors_name='$name' WHERE sponsors_id='$id'");
	$_SESSION['message'] = "Sponsors updated!"; 
	header('location: ../edit_sponsors.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM sponsors WHERE sponsors_id=$id");
	$_SESSION['message'] = "Sponsors deleted!"; 
	header('location: edit_sponsors.php');
}
?>