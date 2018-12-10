<?php
	session_start();
	if (isset($_SESSION['userUid']))
                      {
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/admin_landing_page.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="content">
		<a href="upload_cat.php"><h1>Upload Cat</h1></a>
		<a href="upload_dog.php"><h1>Upload Dog</h1></a>
		<a href="edit_cats.php"><h1>Edit Cats</h1></a>
		<a href="edit_dogs.php"><h1>Edit dogs</h1></a>
		<a href="users.php"><h1>Users</h1></a>
	</div>


</body>
</html>



<?php }
else{
	echo "<p>You shouldn't be here - log in ! </p>";
}?>