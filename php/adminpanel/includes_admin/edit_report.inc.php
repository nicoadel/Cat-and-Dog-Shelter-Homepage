<?php 
	include_once "dbh.inc.php";
	
	// initialize variables
	$date = "";
	$description = "";
	$image = "";
	$name = "";

if (isset($_POST['update'])) {
	$date = $_POST['report_date'];
	$description = $_POST['report_description'];
	$image = $_POST['report_image'];
	$name = $_POST['report_name'];
	$id = $_POST['id'];
	mysqli_query($conn, "UPDATE reports SET  reports_date='$date', reports_descriptions='$description', reports_image='$image', name='$name' WHERE reports_id='$id'");
	$_SESSION['message'] = "Reports updated!"; 
	header('location: ../edit_report.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM sponsors WHERE sponsors_id=$id");
	$_SESSION['message'] = "Sponsors deleted!"; 
	header('location: edit_report.php');
}
?>