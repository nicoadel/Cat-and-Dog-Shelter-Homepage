<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_search.inc.php");
 ?>
<link rel="stylesheet" type="text/css" href="../css/search.css">
<div class="break">
    
</div>

<h1 style="text-align: center;">REPORTS</h1>
<div class="container">
<?php
  if(isset ($_GET['search']) ){
    $animal = $_GET['animal'];
    $gender = $_GET['gender'];
    $date = $_GET['date'];
  }
  $sql = "SELECT * FROM $animal
          WHERE gender = '$gender'
          AND born_date > '$date'";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC); 
          if (count($rows)>1) {   
 foreach($rows as $row) {
 	?>
	<div class="row">
    	<div class="card col-md-12 p-3 mb-4">
    		<div class="row">
    			<div class="col-md-8 mb-3">
    				<div class="card-block">
    					<h6 class="card-title"><?php echo $row['type'] ?></h6>
    					<p class="card-text text-justify text str"><?php echo $row[''.$animal.'_name'] ?></p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<img class="w-100 imag" src="<?php ?>">
    			</div>
    		</div>
    	</div>
    </div>
<?php  
 }} else {
  echo "noooo";}; 
?>
</div>
<?php
include("includes/footer.inc.php");
  ?>