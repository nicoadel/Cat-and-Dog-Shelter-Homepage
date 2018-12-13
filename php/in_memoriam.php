<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php"); 
include("includes/output_in_memoriam.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/dogs_cats.css">
<div class="break">
</div>
<div class="container">
	<div class="row">
		<div class="col-10 offset-1">
			<h1>In Memoriam...</h1>
			<hr>
		</div>   
		<div class="col-10 offset-1">
			<div class="row">
				<?php foreach($data as $row){  ?>

				<div class="part_divs col-md-3 offset-md-1 col-sm-5 offset-sm-2 mb-4 mt-2">
					<div class="small_parts">
						<img class="imag" src="<?php echo $row["main_image"]; ?>" alt="">
						<div class="buttons_div">
							<button class="btn btn-success mb-2 btn-block buttons"  type="button" data-toggle="modal" data-target="#moreModal<?php
								foreach($row["dog_id"] as $subkey => $subvalue){ 
							 echo $subkey;};
							 ?>">More..</button>

						</div>
					</div>
				</div>
				<div class="modal fade" id="moreModal<?php foreach($row["dog_id"] as $subkey => $subvalue){ 
							 echo $subkey;};?>" tabindex="-1" role="dialog" aria-labelledby="moreModalLabel" aria-hidden="true">
				  <div class="modal-dialog  modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="moreModalLabel"><?php echo $row["dog_name"]; ?></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <b>Name:</b> <?php echo $row["dog_name"]; ?> <br>
				        <b>Adopter Name:</b> <?php echo $row["name"]; ?> <br>
				        <b>Type:</b> <?php echo $row["type"]; ?> <br>
				        <b>Born:</b> <?php echo $row["born_date"]; ?> <br>
				        <b>Height:</b> <?php echo $row["height"]; ?> <br>
				        <b>Weight:</b> <?php echo $row["weight"]; ?> <br>
				        <b>Castration:</b> <?php echo $row["castration"]; ?> <br>
				        <b>Description:</b> <?php echo $row["dog_desc"]; ?> <br>
				      </div>
				      <div class="container">
					      <div class="row mx-2">
					      	<?php foreach($row["dog_id"] as $subkey => $subvalue){ ?>
					      	<div class="col-2 my-2">
					      		<img class="gallery_image" id="myImg<?php echo $subkey ?>" onClick="reply_click(this.id)" width="100%" height="90" style="object-fit: cover;" src="<?php echo $subvalue["first"]; ?>" alt="">
					      	</div>
					      <?php }; ?>
					      </div>
					  </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
			<?php }; ?>
 
			 		</div> 
			</div><!--inside row ends-->
		</div><!--col-10 ends-->
	</div>
		
</div><!--container ends-->	
<div class="break">
</div>
<?php include("includes/footer.inc.php"); ?>