<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_dog.inc.php");
 ?>


<h1>CAT</h1>
    <?php foreach( $dogResult as $row) { ?>

<h2>Dog name: <?php echo $row["dog_name"]; ?></h2>



 <?php 
}; 

include("includes/footer.inc.php");
  ?>