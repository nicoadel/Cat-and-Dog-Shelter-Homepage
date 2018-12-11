<?php 
	include_once "dbh.inc.php";
	
	// initialize variables
	$name = "";
	$image = "";
	$position = "";
	$description = "";

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$image = $_POST['image'];
	$position = $_POST['position'];
	$description = $_POST['description'];
	$id = $_POST['id'];
	mysqli_query($conn, "UPDATE team SET name='$name', image='$image' , position='$position' , description='$description' WHERE team_id='$id'");
	$_SESSION['message'] = "Team updated!"; 
	header('location: ../edit_team.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM team WHERE team_id=$id");
	$_SESSION['message'] = "Team deleted!"; 
	header('location: edit_team.php');
}
?>