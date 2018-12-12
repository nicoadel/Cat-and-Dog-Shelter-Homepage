<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_reports.inc.php");
 ?>
<link rel="stylesheet" type="text/css" href="../css/reports.css">
<div class="break">
    
</div>
<div class="container">
  <div class="jumbotron backg2 p-3 p-md-5 text-white rounded">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-weight-bold">Reports</h1>
          </div>
      </div>
<?php
  if(isset ($_GET['id']) ){
    $singl = $_GET['id'];
  }
  $sql2 ="SELECT * FROM reports WHERE reports_id='$singl'";

$reportsRows2 = mysqli_query($conn, $sql2);
$reportsResult2 = $reportsRows2->fetch_all(MYSQLI_ASSOC);
 foreach($reportsResult2 as $row2) {
  ?>
  <div class="row">
      <div class="card col-md-12 p-3 mb-4">
        <div class="row">
          <div class="col-md-8 mb-3">
            <div class="card-block">
              <h6 class="card-title"><?php echo $row2['name'] ?></h6>
              <p class="card-text text-justify text str"><?php echo $row2['reports_descriptions'] ?></p>
              <a href="reports.php"><button class="btn btn-info" >Back</button>  </a>
            </div>
          </div>
          <div class="col-md-4">
            <img class="w-100 imag" src="<?php echo $row2['reports_image'] ?>">
          </div>
        </div>
      </div>
    </div>
<?php  
 }; 
?>
</div>
<div class="break">
    
</div>
<?php
include("includes/footer.inc.php");
  ?>