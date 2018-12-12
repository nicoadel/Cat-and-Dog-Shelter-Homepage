<?php 
include("includes_admin/dbh.inc.php");
include("includes_admin/navbar.inc.php");
include("includes_admin/image_upload.inc.php");
?>

<div class="col-lg-4">
	<h2>Upload</h2>
	<form action="includes_admin/image_upload.inc.php" method="post" enctype="multipart/form-data">
		<input type="text" name="fk_dog_id" placeholder="Image title...">
		<input type="file" name="file">
		<button type="submit" name="submit">UPLOAD</button>
	</form>
</div>