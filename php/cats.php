<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php"); 
include("includes/output_cat.inc.php");
?>
<link rel="stylesheet" type="text/css" href="../css/dogs_cats.css">
<div class="break">
</div>
<div class="container">
	<div class="row">
		<div class="col-10 offset-1">
			<h1>Cats</h1>
			<hr>
		</div>
		<div class="col-10 offset-1">
			<div class="row">
				<?php foreach( $catResult as $row) { ?>				 
				<div class="part_divs col-md-3 offset-md-1 col-sm-5 offset-sm-2 mb-4 mt-2">
					<div class="small_parts">
						<img class="imag" src="<?php echo $row["image_cat"]; ?>" alt="">
						<div class="buttons_div">
							<button class="btn btn-success mb-2 btn-block buttons"  type="button" data-toggle="modal" data-target="#moreModal<?php echo $row["cat_id"]; ?>">More..</button>
							<button class="btn btn-success btn-block mb-2 buttons">Support</button>
							<button class="btn btn-success btn-block buttons">Adopt</button>
						</div>
					</div>
				</div>
				<!-- More.. Modal -->
				<div class="modal fade" id="moreModal<?php echo $row["cat_id"]; ?>" tabindex="-1" role="dialog" aria-labelledby="moreModalLabel" aria-hidden="true">
				  <div class="modal-dialog  modal-lg" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="moreModalLabel"><?php echo $row["cat_name"]; ?></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <b>Name:</b> <?php echo $row["cat_name"]; ?> <br>
				        <b>Born:</b> <?php echo $row["born_date"]; ?> <br>
				        <b>Height:</b> <?php echo $row["height"]; ?> <br>
				        <b>Weight:</b> <?php echo $row["weight"]; ?> <br>
				        <b>Castration:</b> <?php echo $row["castration"]; ?> <br>
				        <b>Description:</b> <?php echo $row["cat_desc"]; ?> <br>
				      </div>
				      <div class="container">
					      <div class="row mx-2">
					      	<div class="col-2 my-2">
					      		<img class="gallery_image" id="myImg" width="100%" height="90" style="object-fit: cover;" src="<?php echo $row["image_cat"]; ?>" alt="">
					      	</div>
					      </div>
					  </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
					  <div id="mypicture" class="picture">
						  <span id="sca" class="close">ix &times;</span>
						  <img class="picture-content" id="img01">
						  <div id="caption"></div>
			 		</div>
				</div>
			<?php }; ?>
			</div><!--inside row ends-->
		</div><!--col-10 ends-->
	</div><!--row ends-->	
</div><!--container ends-->	
<script>
// Get thepicture
var picture = document.getElementById('mypicture');

// Get the image and insert it inside thepicture - use its "alt" text as a caption
var img = document.getElementById('myImg');
var pictureImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
   picture.style.display = "block";
   pictureImg.src = this.src;
    captionText.innerHTML = this.alt;
}
// Get the <span> element that closes thepicture
var span = document.document.getElementById("sca");
// When the user clicks on <span> (x), close thepicture
span.onclick = function() { 
   picture.style.display = "none!important";
   console.log("HEY");
}
</script>
<?php include("includes/footer.inc.php"); ?>