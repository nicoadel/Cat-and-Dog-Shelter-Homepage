<?php  
include_once "dbh.inc.php";

if(isset($_POST['verify'])) {
  $supporter_id = $_POST['sup_id'];

  $sql = "UPDATE supporter SET verify = 1 
  			WHERE supporter_id='$supporter_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<div class='alert alert-success mt-6' role='alert'>
         Verificated successfully.
        </div>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}
?>