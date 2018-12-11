<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php"); 
include("includes/output_dog.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/dogs_cats.css">
<div class="break">
</div>
<div class="container">
	<div class="row">
		<div class="col-10 offset-1">
			<h1>Dogs</h1>
			<hr>
		</div>
		<div class="col-10 offset-1">
			<div class="row">
				<?php foreach( $dogResult as $row) { ?>				 
				<div class="part_divs col-md-3 offset-md-1 col-sm-5 offset-sm-2 mb-4 mt-2">
					<div class="small_parts">
						<img class="imag" src="<?php echo $row["image_dog"]; ?>" alt="">
						<div class="buttons_div">
							<button class="btn btn-success mb-2 btn-block buttons"  type="button" data-toggle="modal" data-target="#moreModal<?php echo $row["dog_id"]; ?>">More..</button>
							<button class="btn btn-success btn-block mb-2 buttons">Support</button>
							<button class="btn btn-success btn-block buttons">Adopt</button>
						</div>
					</div>
				</div>
				<!-- More.. Modal -->
				<div class="modal fade" id="moreModal<?php echo $row["dog_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="moreModalLabel" aria-hidden="true">
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
				        <b>Born:</b> <?php echo $row["born_date"]; ?> <br>
				        <b>Height:</b> <?php echo $row["height"]; ?> <br>
				        <b>Weight:</b> <?php echo $row["weight"]; ?> <br>
				        <b>Castration:</b> <?php echo $row["castration"]; ?> <br>
				        <b>Description:</b> <?php echo $row["dog_desc"]; ?> <br>
				      </div>
				      <div class="container">
					      <div class="row mx-2">
					      	<div class="col-2 my-2">
					      		<img class="gallery_image" id="myImg" width="100%" height="90" style="object-fit: cover;" src="<?php echo $row["image_dog"]; ?>" alt="">
					      	</div>
					      </div>
					  </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
				<div id="img_modal_large" class="modal hide fade" tabindex="-1" data-focus-on="input:first">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                      </div>
                     <div class="modal-body">
                      <img src="<?php echo $row["image_dog"]; ?>" alt="">
                     </div>
                     <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn">Close</button>
                    </div>
                </div>
			<?php }; ?>
			</div><!--inside row ends-->
		</div><!--col-10 ends-->
	</div><!--row ends-->	
</div><!--container ends-->	
<?php include("includes/footer.inc.php"); ?>