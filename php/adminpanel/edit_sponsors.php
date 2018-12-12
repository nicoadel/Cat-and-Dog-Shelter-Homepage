
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../../css/users.css">
</head>
<body>
	<?php include "includes_admin/navbar.inc.php"; ?>
	<div class="content">
		<?php 
	include_once "includes_admin/dbh.inc.php";
	include_once "includes_admin/edit_sponsors.inc.php";
	  if (isset($_SESSION['userUid']))
	                      {
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM sponsors WHERE sponsors_id=$id");
		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$logo = $n['sponsors_logo'];
			$address = $n['sponsors_address'];
			$email = $n['sponsors_email'];
			$name = $n['sponsors_name'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM sponsors"); ?>
	<div class="users_content">
		<div class="card card_adminpanel">
		<div class="card-body">
			
		<table class="table bordered">
	<thead>
		<tr>
			<th>Logo</th>
			<th>Address</th>
			<th>Email</th>
			<th>Name</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['sponsors_logo']; ?></td>
			<td><?php echo $row['sponsors_address']; ?></td>
			<td><?php echo $row['sponsors_email']; ?></td>
			<td><?php echo $row['sponsors_name']; ?></td>
			<?php 
			echo '<td>
				<a href="edit_sponsors.php?edit='. $row['sponsors_id']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="edit_sponsors.php?del='.$row['sponsors_id'].'" class="btn btn-danger">Delete</a>
			</td>';
			?>
			</tr>
	<?php } ?>
</table>
</div>
</div>
	</div>
	
		<div class="inputform">
			<form method="post" action="includes_admin/edit_sponsors.inc.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group form-group">
					<label class="col">Logo: </label>
					<input class="form-control " type="text" name="sponsors_logo" value="<?php echo $logo; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Address: </label>
					<input class="form-control " type="text" name="sponsors_address" value="<?php echo $address; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Email: </label>
					<input class="form-control " type="text" name="sponsors_email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Name: </label>
					<input class="form-control " type="text" name="sponsors_name" value="<?php echo $name; ?>">
				</div>
				<button class="btn btn-center" type="submit" name="update"  >update</button>
			</form>
		</div>
<?php
	if (isset($_SESSION['message']))
	{
	display_message($_SESSION['message']);
	}
	 ?>
	
	
	</div>
</body>
</html>
<?php } ?>