<?php 

	$_SESSION['username'] = "Admin";

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>MySQL image upload</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>



<div class="row">
	
			<?php

			include_once("includes_admin/dbh.inc.php");

			$sql = "SELECT * FROM image_dog";

			$stmt = mysqli_stmt_init($conn);

			if(!mysqli_stmt_prepare($stmt, $sql)){
				echo "SQL statement falied!";
			} else {
				mysqli_stmt_execute($stmt);
				$result = mysqli_stmt_get_result($stmt);

				while($row = mysqli_fetch_assoc($result)){
						 echo '
						 <div class="col-lg-4>"
						 		<a href="" title="">
									<img src="../../img/gallery/'.$row["image_dog"].'" alt="" style="width: 200px;"> 
									<h3>'.$row["image_dog_id"].'</h3>
									<p>'.$row["fk_dog_id"].'</p>
								</a>
						</div>';
				}
			}

		
			?>
</div>
		

		<?php
		if(isset($_SESSION['username'])){

	echo	'<div class="col-lg-4">
			<h2>Upload</h2>
			<form action="includes_admin/gallery-image.inc.php" method="post" enctype="multipart/form-data">
				<input type="text" name="fk_dog_id" placeholder="Image title...">
				<input type="file" name="file">
				<button type="submit" name="submit">UPLOAD</button>
			</form>
		</div>';
		} 



	 ?>





	</div>
</section>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>