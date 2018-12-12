<?php 
if(isset($_POST['support_cat'])) {
  $support_name = $_POST['support_name'];
  $support_email = $_POST['support_email'];
  $support_zip = $_POST['support_zip'];
  $support_city = $_POST['support_city'];
  $support_street = $_POST['support_street'];
  $support_tel = $_POST['support_tel'];
  $fk_cat_id = $_POST['cat_id'];

  $sql = "INSERT INTO supporter (name, email, zip, city, street, tel, fk_cat_id, verify)
  VALUES ('$support_name','$support_email','$support_zip','$support_city','$support_street','$support_tel','$fk_cat_id',2)";
  if (mysqli_query($conn, $sql)) {
   echo "<div class='alert alert-success mt-6' role='alert'>
          Support request has been sent successfully.
        </div>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}

if(isset($_POST['support_dog'])) {
  $support_name = $_POST['support_name'];
  $support_email = $_POST['support_email'];
  $support_zip = $_POST['support_zip'];
  $support_city = $_POST['support_city'];
  $support_street = $_POST['support_street'];
  $support_tel = $_POST['support_tel'];
  $fk_dog_id = $_POST['dog_id'];

  $sql = "INSERT INTO supporter (name, email, zip, city, street, tel, fk_dog_id, verify)
  VALUES ('$support_name','$support_email','$support_zip','$support_city','$support_street','$support_tel','$fk_dog_id',2)";
  if (mysqli_query($conn, $sql)) {
   echo "<div class='alert alert-success mt-6' role='alert'>
          Support request has been sent successfully.
        </div>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}
 ?>