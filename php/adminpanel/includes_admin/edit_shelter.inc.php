<?php 
	include_once "dbh.inc.php";
	
	// initialize variables
	$place_image = "";
	$animal_image = "";

if (isset($_POST['update'])) {
	$place_image = $_POST['place_image'];
	$animal_image = $_POST['animal_image'];
	$id = $_POST['id'];
	mysqli_query($conn, "UPDATE place SET  place_image='$place_image', animal_image='$animal_image' WHERE place_id='$id'");
	$_SESSION['message'] = "Shelter updated!"; 
	header('location: ../edit_shelter.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM place WHERE place_id=$id");
	$_SESSION['message'] = "Shelter deleted!"; 
	header('location: edit_shelter.php');
}
?>