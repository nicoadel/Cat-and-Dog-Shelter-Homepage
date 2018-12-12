
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
	include_once "includes_admin/edit_users.inc.php";
	  if (isset($_SESSION['userUid']))
	                      {
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM users WHERE users_id=$id");
		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['users_name'];
			$email = $n['users_email'];
			$admin = $n['users_role'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM users"); ?>
	<div class="card card_adminpanel">
		<div class="card-body">
			
		<table class="table bordered">
	<thead>
		<tr>
			<th>Username</th>
			<th>E-Mail</th>
			<th>Admin (1 = yes // 0 = no)</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['users_name']; ?></td>
			<td><?php echo $row['users_email']; ?></td>
			<td><?php echo $row['users_role']; ?></td>
			<?php 
			echo '<td>
				<a href="users.php?edit='. $row['users_id']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="users.php?del='.$row['users_id'].'" class="btn btn-danger">Delete</a>
			</td>';
			?>
			</tr>
	<?php } ?>
</table>


		<div class="inputform">
			<form method="post" action="includes_admin/edit_users.inc.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group form-group">
					<label class="col">Username: </label>
					<input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">E-Mail: </label>
					<input class="form-control" type="text" name="email" value="<?php echo $email; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Admin: </label>
					<input class="form-control" type="text" name="admin" value="<?php echo $admin; ?>">
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
	</div>
	</div>
</body>
</html>
<?php } ?>