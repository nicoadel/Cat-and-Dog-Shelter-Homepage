<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="../../css/login.css">

<body>
<?php include_once "includes_admin/navbar.inc.php"; ?>
<main class="login_main upload_form">
	<div class="wrapper-main">
		<section class="section-default">
			<h1>Login</h1>
			<br>
			<form class="forminput" action="includes_admin/login.inc.php" method="POST">
                         <input class="form-control" type="text" name="mailuid" placeholder="Username/Email...">
                         <input class="form-control" type="password" name="pwd" placeholder="Password...">
                         <button class="btn btn-info" type="submit" name="login-submit">Login</button>
                   </form>
		</section>
	</div>
</main>


</body>
</html>