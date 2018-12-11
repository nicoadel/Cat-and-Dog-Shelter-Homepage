<?php 
	include_once "dbh.inc.php";
	
	// initialize variables
	$name = "";
	$email = "";
	$admin = "";

if (isset($_POST['update'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$admin = $_POST['admin'];
	$id = $_POST['id'];
	mysqli_query($conn, "UPDATE users SET users_name='$name', users_email='$email' , users_role='$admin' WHERE users_id='$id'");
	$_SESSION['message'] = "User updated!"; 
	header('location: ../users.php');
}
if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($conn, "DELETE FROM users WHERE users_id=$id");
	$_SESSION['message'] = "User deleted!"; 
	header('location: users.php');
}
?>