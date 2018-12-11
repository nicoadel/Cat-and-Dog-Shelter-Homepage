<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_reports.inc.php");
 ?>



<h1 style="text-align: center;">REPORTS</h1>
<div class="container">
<?php
$i=1;
 foreach($reportsResult as $row) {
 	if($i%2==0){ ?>

<div class="row">
    	<div class="card col-md-12 p-3">
    		<div class="row ">
    			<div class="col-md-4">
    				<img class="w-100" src="<?php echo $row['reports_image'] ?>">
    			</div>
    			<div class="col-md-8">
    				<div class="card-block">
    					<h6 class="card-title"><?php echo $row['name'] ?></h6>
    					<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    				<div>
         <a href='update_reports.php?id=".$key['place_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete_reports.php?id=".$key['place_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div>
    				</div>
    			</div>
    		</div>
    	</div>
</div>
 <?php
}else{ ?>
	<div class="row">
    	<div class="card col-md-12 p-3">
    		<div class="row">
    			<div class="col-md-8">
    				<div class="card-block">
    					<h6 class="card-title"><?php echo $row['name'] ?></h6>
    					<p class="card-text text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    				<div>
         <a href='update_reports.php?id=".$key['reports_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete_reports.php?id=".$key['reports_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div>
    				</div>
    			</div>
    			<div class="col-md-4">
    				<img class="w-100" src="<?php echo $row['reports_image'] ?>">
    			</div>
    		</div>
    	</div>
    </div>
<?php  
}
$i++; }; 
?>


</div>
<?php
include("includes/footer.inc.php");
  ?>