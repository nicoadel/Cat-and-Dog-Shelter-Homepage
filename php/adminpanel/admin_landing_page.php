
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/admin_landing_page.css">
</head>
<body>
	<?php include_once "includes_admin/navbar.inc.php"; ?>
	<?php
	if (isset($_SESSION['userUid']))
                      {
 ?>
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