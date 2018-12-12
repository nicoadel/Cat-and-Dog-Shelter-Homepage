<?php  
include_once "dbh.inc.php";

if(isset($_POST['verify'])) {
  $adoption_id = $_POST['sup_id'];

  $sql = "UPDATE adaption SET verify = 1 
  			WHERE adoption_id='$adoption_id'";
  if (mysqli_query($conn, $sql)) {
   echo "<div class='alert alert-success mt-6' role='alert'>
         Verificated successfully.
        </div>";
 } else {
   echo "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
 }
}
?>