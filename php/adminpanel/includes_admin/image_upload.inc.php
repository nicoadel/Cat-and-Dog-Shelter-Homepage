<?php 


if(isset($_POST['submit'])){

	$imageFkId = $_POST['fk_dog_id'];

	$file = $_FILES['file'];

	$fileName = $file['name'];
	$fileType = $file['type'];
	$fileTempName = $file['tmp_name'];
	$fileError = $file['error'];
	$fileSize = $file['size'];

	$fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

	$allowed = array('jpg', 'jpeg', 'png', 'pdf');

	if (in_array($fileActualExt, $allowed)) {
		if($fileError === 0) {
			if($fileSize < 20000000) {
				$imageFullName = "HELLO." . uniqid("", true) . "." . $fileActualExt;
				$fileDestination = "../../../image_upload/" . $imageFullName;



				include_once("dbh.inc.php");

				if(empty($imageFkId)) {
					header("Location: ../admin_landing_page.php?upload=empty");
					exit();
				} else {
					$sql = "SELECT * FROM image_dog;";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						echo "SQL statement failed!";
					} else {
						mysqli_stmt_execute($stmt);
						$result= mysqli_stmt_get_result($stmt);
						$rowCount = mysqli_num_rows($result);
						$setImageOrder = $rowCount + 1;


						$sql = "INSERT INTO image_dog(image_dog, fk_dog_id) VALUES ('".$imageFullName."', {$imageFkId} );";
						if(!mysqli_stmt_prepare($stmt, $sql)){
						echo "SQL statement failed!";
					} else {
						mysqli_stmt_bind_param($stmt, "ssss", $imageFullName, $setImageOrder);
						mysqli_stmt_execute($stmt);


						move_uploaded_file($fileTempName, $fileDestination);


						header("Location: ../admin_landing_page.php?upload=success");
					}
					}
				}

			} else {
				echo "File size is too big";
				exit();
			}
		} else {
			echo "You had an error!";
			exit();
		}
	} else {
		echo "You need to upload a proper file type!";
		exit();
	}

	print_r($file);










}



 ?>