<?php 
include("includes_admin/dbh.inc.php");
include("includes_admin/output_verify_adopter.inc.php");
include("includes_admin/upload_verify_adopter.inc.php");
include("includes_admin/navbar.inc.php"); ?>
<body id="page-top">
	<div class="container">
		<div class="row">
			<div class="col-8 offset-2">
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#ID</th>
							<th scope="col">Request Date</th>
							<th scope="col">Adopter Name</th>
							<th scope="col">Telephone</th>
							<th scope="col">E-mail address</th>
							<th scope="col">Address</th>
							<th scope="col">Another pet</th>
							<th scope="col">Supported Cat</th>
							<th scope="col">Supported Dog</th>
							<th scope="col">Verification</th>
						</tr>
						</thead><?php foreach($rows as $row) { ?>
							<tbody>
								<tr>
									<th scope="row"><?php echo $row["adoption_id"];?></th>
									<td><?php echo $row['req_date'] ?></td>
									<td><?php echo $row['name'] ?></td>
									<td><?php echo $row['telephone_number1'].", ".$row['telephone_number2'] ?></td>
									<td><?php echo $row['email'] ?></td>
									<td><?php echo $row['address'] ?></td>
									<td><?php echo $row['other_pets'].", ".$row['kind_of_pets'] ?></td>
									<td><?php echo $row['dog_name'] ?></td>
									<td><?php echo $row['cat_name'] ?></td>
									<td>
									<form method="POST">
										<div class="form-group">
											<input  type="hidden" class="form-control" name="sup_id" value="<?php echo $row["adoption_id"];?>">
										</div>
										<input class="btn btn-success" type="submit" value="Allow" name="verify"/>
									</form>
								</td>
							</tr>
						</tbody>
					<?php } ?>
				</table>
			</div>
		</div>
	</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>

