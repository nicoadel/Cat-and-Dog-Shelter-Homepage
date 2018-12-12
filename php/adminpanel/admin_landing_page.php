<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../../css/admin_landing_page.css">
</head>
<body>
	<?php include "includes_admin/navbar.inc.php"; ?>
	<?php
	if (isset($_SESSION['userUid']))
                      {
 ?><br>
 <div class="container">
 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><h3>Upload pages</h3></th>
      <th scope="col"><h3>Edit pages</h3></th>
    </tr>
  </thead>
  <tbody>
  	    <tr>
      <td><a href="upload_users.php"><h4>Upload User</h4></a></td>
      <td><a href="edit_users.php"><h4>Edit User</h4></a></td>
    </tr>
    <tr>
      <td><a href="upload_cat.php"><h4>Upload Cat</h4></a></td>
      <td><a href="edit_cats.php"><h4>Edit Cat</h4></a></td>
    </tr>
    <tr>
      <td><a href="upload_dog.php"><h4>Upload Dog</h4></a></td>
      <td><a href="edit_dogs.php"><h4>Edit dog</h4></a></td>
    </tr>
    <tr>
      <td><a href="upload_team.php"><h4>Upload Team</h4></a></td>
      <td><a href="edit_team.php"><h4>Edit Team</h4></a></td>
    </tr>
    <tr>
      <td><a href="upload_Sponsors.php"><h4>Upload Sponsors</h4></a></td>
      <td><a href="edit_Sponsors.php"><h4>Edit Sponsors</h4></a></td>
    </tr>
       <tr>
      <td><a href="upload_report.php"><h4>Upload reports</h4></a></td>
      <td><a href="edit_report.php"><h4>Edit reports</h4></a></td>
    </tr>
          <tr>
      <td><a href="upload_shelter.php"><h4>Upload Shelter</h4></a></td>
      <td><a href="edit_Shelter.php"><h4>Edit Shelter</h4></a></td>
    </tr>
  </tbody>
</table>

</body>
</html>



<?php }
else{
	echo "<p>You shouldn't be here - log in ! </p>";
}?>
