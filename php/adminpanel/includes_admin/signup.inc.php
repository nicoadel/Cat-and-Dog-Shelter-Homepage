<?php 
if (isset($_POST['signup-submit'])){
require 'dbh.inc.php';

$username = $_POST['uid'];
$email = $_POST['mail'];
$password = $_POST['pwd'];
$passwordRepeat = $_POST['pwd-repeat'];
// ALWAYS CREATE ERROR HANDLERS FIRST
// check if everything is filled out - if not error + exit
if(empty($username) || empty($email) || empty($password) ||  empty($passwordRepeat)){
		header("Location: ../register.php?error=emptyfields&uid=".$username."&mail=".$email);
		exit();
	} 
	// Check if the email && the username is in a correct format - if not error + exit
	else if ( !filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
		header("Location: ../register.php?error=invalidmailuid");
		exit();
	}
	// Check if the email is in a correct format - if not error + exit
else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		header("Location: ../register.php?error=invalidmail&uid=".$username);
		exit();
	}
	// Check if the username is in a correct format - if not error + exit
else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../register.php?error=invaliduid&mail=".$mail);
		exit();
	}
	// Check if the password is the same as passwordRepeat - if not error + exit
else if($password !== $passwordRepeat){
		header("Location: ../register.php?error=passwordcheck&uid=".$username."&mail=".$email);
		exit();
}
else{
	// We use prepared statements that are executed in the database and not in the server
	$sql = "SELECT users_name FROM users WHERE users_name=?"; // ? is a placeholder
	$stmt = mysqli_stmt_init($conn);	//creating the prepared statement
	if (!mysqli_stmt_prepare($stmt, $sql)){ //checking if the sql statement works with our database - if not error + exit()
		header("Location: ../register.php?error=sqlerror");
		exit();
	} 
	else {
		mysqli_stmt_bind_param($stmt, "s", $username); //binding the parameters of the users to the statement we created, (take the information of the user and send it later to the database using the statement we created) s stands for string
		mysqli_stmt_execute($stmt); //execute the statement inside the database
		mysqli_stmt_store_result($stmt); //the result we got from the database get stored in the variable stmt 
		$resultCheck = mysqli_stmt_num_rows($stmt); //how many rows of data did we get? if yes the result is one (only one username is allowed) if not 0
		if ($resultCheck > 0) {
			header("Location: ../register.php?error=usertaken&mail=".$email);
		exit();
		}
		else {
			$sql = "INSERT INTO users (users_name, users_email, users_pass) VALUES (?, ?, ?)";
			$stmt = mysqli_stmt_init($conn); //initializing the statement again for 3 placeholder values
			if(!mysqli_stmt_prepare($stmt,$sql)){
				header("Location: ../register.php?error=sqlerror");
				exit();
			} 
			else {
				$hashedPWD = password_hash($password, PASSWORD_DEFAULT);
				mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPWD);
				mysqli_stmt_execute($stmt);
				header("Location: ../register.php?signup=success");
				exit();
			}
		}
	}

}
 mysqli_stmt_close($stmt);
 mysqli_clsoe($conn);

}
else {
	header("Location: ../register.php");
	exit();

}