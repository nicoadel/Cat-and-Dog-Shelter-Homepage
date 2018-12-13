<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_search.inc.php");
 ?>
<link rel="stylesheet" type="text/css" href="../css/search.css">
<div class="break">  
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="jumbotron backg2 p-3 p-md-5 text-white rounded">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-weight-bold">Search Results</h1>
        </div>
      </div>
    </div>
  </div>
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
          $rows = $result->fetch_all(MYSQLI_ASSOC); ?>
<h2 class="text-center mb-4"><?php echo $animal." - ".$gender." - born after: ".$date; ?></h2>
  <div class="row pt-4">         
    <?php
          if (count($rows)>1) {   
 foreach($rows as $row) { 	?>
    	<div class="card col-md-12 p-3 mb-4">
    		<div class="row">
    			<div class="col-md-8 mb-3">
    				<div class="card-block">
    					<h6 class="card-title"><?php echo $row[''.$animal.'_name'] ?></h6>
    					<p class="card-text text-justify text str"><?php echo $row['type'] ?></p>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<img class="w-100 imag" src="<?php ?>">
    			</div>
    		</div>
    	</div>
    
<?php  
 }} else {
  echo "No Result.";}; 
?>
</div>
</div>
<div class="break">  
</div>
<?php
include("includes/footer.inc.php");
  ?>