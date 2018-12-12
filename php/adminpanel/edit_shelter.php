
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
	include "includes_admin/dbh.inc.php";
	include "includes_admin/edit_shelter.inc.php";
	  if (isset($_SESSION['userUid']))
	                      {
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM place WHERE place_id=$id");
		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$place_image = $n['place_image'];
			$animal_image = $n['animal_image'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM place"); ?>
	<div class="users_content">
		<div class="card card_adminpanel">
		<div class="card-body">
			
		<table class="table bordered">
	<thead>
		<tr>
			<th>Place Image</th>
			<th>Animal Place Image</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['place_image']; ?></td>
			<td><?php echo $row['animal_image']; ?></td>
			<?php 
			echo '<td>
				<a href="edit_shelter.php?edit='. $row['place_id']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="edit_shelter.php?del='.$row['place_id'].'" class="btn btn-danger">Delete</a>
			</td>';
			?>
			</tr>
	<?php } ?>
</table>
</div>
</div>
	</div>
	
		<div class="inputform">
			<form method="post" action="includes_admin/edit_shelter.inc.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group form-group">
					<label class="col">Shelter: </label>
					<input class="form-control " type="text" name="place_image" value="<?php echo $place_image; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Animal Place: </label>
					<input class="form-control " type="text" name="animal_image" value="<?php echo $animal_image; ?>">
				</div>
				<button class="btn btn-center" type="submit" name="update">update</button>
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