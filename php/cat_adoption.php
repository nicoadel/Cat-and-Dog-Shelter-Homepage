<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_cat.inc.php");
 ?>


<h1>CAT</h1>
    <?php foreach( $catResult as $row) { ?>

<h2>Cat name: <?php echo $row["cat_name"]; ?></h2>



 <?php 
}; 
include("includes/footer.inc.php");
  ?>