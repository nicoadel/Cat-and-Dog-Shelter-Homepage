<?php
if (isset($_POST['login-submit'])) {
	require 'dbh.inc.php';

	$mailuid = $_POST['mailuid'];
	$password = $_POST['pwd'];

	if (empty($mailuid) || empty($password)){
		header("Location: ../login.php?error=emptyfields");
		exit();
	}
	else {
		$sql = "SELECT * FROM users WHERE users_name=? OR users_email=?;";
		$stmt = mysqli_stmt_init($conn);
		if (!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../login.php?error=sqlerror");
			exit();
		}
		else {

			mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){//fetching data from the result
				$pwdCheck = password_verify($password, $row['users_pass']);  //take the password the user tried to loged in and compares it with the hashed database password
				if ($pwdCheck == false){
					header("Location: ../login.php?error=wrongpwd");
					exit();
				}
				else if($pwdCheck == true){
					session_start();
					$_SESSION['userId'] = $row['users_id'];
					$_SESSION['userUid'] = $row['users_name'];
					header("Location: ../admin_landing_page.php?login=success");
					exit();
				}
				else {
					header("Location: ../login.php?error=wrongpwd");
					exit();
				}
			}
			else{
				header("Location: ../login.php?error=nouser");
				exit();
			}
		}
	}

}
else {
	header("Location: ../login.php");
	exit();
}
