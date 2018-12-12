<?php 
include("dbh.inc.php");
if(isset($_POST['upload_cat_table'])) {
  $cat_name = $_POST['cat_name'];
  $type = $_POST['type'];
  $desc = $_POST['desc'];
  $weight = $_POST['weight'];
  $height = $_POST['height'];
  $spec_id = $_POST['spec_id'];
  $castration = $_POST['castration'];
  $born_date =$_POST['born_date'];
  $gender = $_POST['gender'];

  $sql = "INSERT INTO cat (cat_name,born_date,castration,cat_user_id,height,weight,cat_desc,type,gender,in_memoriam)
  VALUES ('$cat_name', '$born_date', '$castration', '$spec_id','$height', '$weight','$desc','$type','$gender',1)
  ";
  if (mysqli_query($conn, $sql)) {
   echo "<h2 class='mt-4'>Successfully uploaded</h2>";
   header("Location: ../image_upload_cat.php");
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}
 ?>