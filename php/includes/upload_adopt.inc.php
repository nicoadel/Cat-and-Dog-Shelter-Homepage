<?php 
if(isset($_POST['adopt_cat'])) {
  $adopt_name = $_POST['adopt_name'];
  $kind = $_POST['kind'];
  $other1 = $_POST['other1'];
  $other2 = $_POST['other2'];
  $adopt_email = $_POST['adopt_email'];
  $adopt_address = $_POST['adopt_address'];
  $adopt_tel1 = $_POST['adopt_tel1'];
  $adopt_tel2 = $_POST['adopt_tel2'];
  $fk_cat_id = $_POST['cat_id'];

  $sql = "INSERT INTO adaption (name,kind,other_pets,kind_of_pets,email,address,telephone_number1,telephone_number2,fk_cat_id,verify)
  VALUES ('$adopt_name','$kind','$other1','$other2','$adopt_email','$adopt_address','$adopt_tel1','$adopt_tel2','$fk_cat_id',2)";
  if (mysqli_query($conn, $sql)) {
   echo "<div class='alert alert-success mt-6' role='alert'>
          Adoption request has been sent successfully.
        </div>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}

if(isset($_POST['adopt_dog'])) {
  $adopt_name = $_POST['adopt_name'];
  $kind = $_POST['kind'];
  $other1 = $_POST['other1'];
  $other2 = $_POST['other2'];
  $adopt_email = $_POST['adopt_email'];
  $adopt_address = $_POST['adopt_address'];
  $adopt_tel1 = $_POST['adopt_tel1'];
  $adopt_tel2 = $_POST['adopt_tel2'];
  $fk_dog_id = $_POST['dog_id'];

  $sql = "INSERT INTO adaption (name,kind,other_pets,kind_of_pets,email,address,telephone_number1,telephone_number2,fk_dog_id,verify)
  VALUES ('$adopt_name','$kind','$other1','$other2','$adopt_email','$adopt_address','$adopt_tel1','$adopt_tel2','$fk_dog_id',2)";
  if (mysqli_query($conn, $sql)) {
   echo "<div class='alert alert-success mt-6' role='alert'>
          Adoption request has been sent successfully.
        </div>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}
 ?>