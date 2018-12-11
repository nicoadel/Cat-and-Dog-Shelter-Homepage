
<!DOCTYPE html>
<html>
<head>
	<title></title>
    <link rel="stylesheet" type="text/css" href="../../css/users.css">
</head>
<body>
	<?php include_once "includes_admin/navbar.inc.php"; ?>
	<div class="content">
		<?php 
	include_once "includes_admin/dbh.inc.php";
	include_once "includes_admin/edit_report.inc.php";
	  if (isset($_SESSION['userUid']))
	                      {
	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$record = mysqli_query($conn, "SELECT * FROM reports WHERE reports_id=$id");
		if (@count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$date = $n['reports_date'];
			$description = $n['reports_descriptions'];
			$image = $n['reports_image'];
			$name = $n['name'];
		}
	}
?>
	<?php $results = mysqli_query($conn, "SELECT * FROM reports"); ?>
	<div class="users_content">
		<div class="card card_adminpanel">
		<div class="card-body">
			
		<table class="table bordered">
	<thead>
		<tr>
			<th>Date</th>
			<th>Description</th>
			<th>Image</th>
			<th>Name</th>
		</tr>
	</thead>
	
	<?php while ($row = mysqli_fetch_array($results)) { ?>
		<tr>
			<td><?php echo $row['reports_date']; ?></td>
			<td><?php echo $row['reports_descriptions']; ?></td>
			<td><?php echo $row['reports_image']; ?></td>
			<td><?php echo $row['name']; ?></td>
			<?php 
			echo '<td>
				<a href="edit_report.php?edit='. $row['reports_id']. '" class="btn btn-info" >Edit</a>
			</td>
			<td>
				<a href="edit_report.php?del='.$row['reports_id'].'" class="btn btn-danger">Delete</a>
			</td>';
			?>
			</tr>
	<?php } ?>
</table>
</div>
</div>
	</div>
	
		<div class="inputform">
			<form method="post" action="includes_admin/edit_report.inc.php" >
				<input type="hidden" name="id" value="<?php echo $id; ?>">
				<div class="input-group form-group">
					<label class="col">Date: </label>
					<input class="form-control " type="text" name="report_date" value="<?php echo $date; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Description: </label>
					<input class="form-control " type="text" name="report_description" value="<?php echo $description; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Image: </label>
					<input class="form-control " type="text" name="report_image" value="<?php echo $image; ?>">
				</div>
				<div class="input-group form-group">
					<label class="col">Name: </label>
					<input class="form-control " type="text" name="report_name" value="<?php echo $name; ?>">
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