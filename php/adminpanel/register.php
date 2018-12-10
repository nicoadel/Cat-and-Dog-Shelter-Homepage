<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<main class="login_main upload_form">
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Signup</h1>
			<br>
			<form action="includes_admin/signup.inc.php" method="post">
				<input class="form-control" type="text" name="uid" placeholder="Username">
				<br>
				<input class="form-control" type="text" name="mail" placeholder="E-Mail">
				<br>
				<input class="form-control" type="password" name="pwd" placeholder="Password">
				<br>
				<input class="form-control" type="password" name="pwd-repeat" placeholder="Repeat Password">
				<br>
				<button class="btn btn-info" type="submit" name="signup-submit">Signup</button>
			</form>
		</section>
	</div>
</main>
</body>
</html>