
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
	include_once "includes_admin/edit_team.inc.php";
	  if (isset($_SESSION['userUid']))
	                      {
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM team WHERE team_id=$id");
		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$name = $n['name'];
			$image = $n['image'];
			$position = $n['position'];
			$description = $n['description'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM team"); ?>
	<div class="users_content">
		<div class="card card_adminpanel">
		<div class="card-body">
			
		<table class="table bordered">
	<thead>
		<tr>
			<th>Name</th>
			<th>Image</th>
			<th>Position</th>
			<th>Description</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['name']; ?></td>
			<td><?php echo $row['image']; ?></td>
			<td><?php echo $row['position']; ?></td>
			<td><?php echo $row['description']; ?></td>
			<?php 
			echo '<td>
				<a href="edit_team.php?edit='. $row['team_id']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="edit_team.php?del='.$row['team_id'].'" class="btn btn-danger">Delete</a>
			</td>';
			?>
			</tr>
	<?php } ?>
</table>
</div>
</div>
	</div>
	
		<div class="inputform">
			<form method="post" action="includes_admin/edit_team.inc.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group form-group">
					<label class="col">Name: </label>
					<input class="form-control input_user" type="text" name="name" value="<?php echo $name; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">image: </label>
					<input class="form-control input_user" type="text" name="image" value="<?php echo $image; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">position: </label>
					<input class="form-control input_user" type="text" name="position" value="<?php echo $position; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">description: </label>
					<textarea id="textarea_users" class="form-control" type="text" name="description"><?php echo $description; ?></textarea>
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