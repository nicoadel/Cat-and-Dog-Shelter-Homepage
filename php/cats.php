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
				<?php foreach($data as $row){  ?>

				<div class="part_divs col-md-3 offset-md-1 col-sm-5 offset-sm-2 mb-4 mt-2">
					<div class="small_parts">
						<img class="imag" src="<?php echo $row["main_image"]; ?>" alt="">
						<div class="buttons_div">
							<button class="btn btn-success mb-2 btn-block buttons"  type="button" data-toggle="modal" data-target="#moreModal<?php
								foreach($row["cat_id"] as $subkey => $subvalue){ 
							 echo $subkey;};
							 ?>">More..</button>
							<button class="btn btn-success btn-block mb-2 buttons"  type="button" data-toggle="modal" data-target="#supportModal<?php echo $row["cat_id"]; ?>">Support</button>
                            <button class="btn btn-success btn-block buttons" type="button" data-toggle="modal" data-target="#adoptModal<?php echo $row["cat_id"]; ?>">Adopt</button>
						</div>
					</div>
				</div>
				<div class="modal fade" id="moreModal<?php foreach($row["cat_id"] as $subkey => $subvalue){ 
							 echo $subkey;};?>" tabindex="-1" role="dialog" aria-labelledby="moreModalLabel" aria-hidden="true">
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
				        <b>Type:</b> <?php echo $row["type"]; ?> <br>
				        <b>Born:</b> <?php echo $row["born_date"]; ?> <br>
				        <b>Height:</b> <?php echo $row["height"]; ?> <br>
				        <b>Weight:</b> <?php echo $row["weight"]; ?> <br>
				        <b>Castration:</b> <?php echo $row["castration"]; ?> <br>
				        <b>Description:</b> <?php echo $row["cat_desc"]; ?> <br>
				      </div>
				      <div class="container">
					      <div class="row mx-2">
					      	<?php foreach($row["cat_id"] as $subkey => $subvalue){ ?>
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
				
			</div><!--inside row ends-->
		</div><!--col-10 ends-->
	</div>
	<div id="mypicture" class="picture">
		<span id="sca" class="close">ix &times;</span>
		<img class="picture-content" src="#">
		<div id="caption"></div>
	</div> 		<!--row ends-->	
</div><!--container ends-->	
<script>
// Get thepicture
var picBlock = document.getElementById("mypicture");
var bigPic = document.getElementsByClassName('picture-content');
function reply_click(x){
	var pictureSrc = $('#'+x).attr('src');
	console.log(pictureSrc);
	//var bigPic = $('#img01');
	bigPic[0].src = pictureSrc;

	
	picBlock.style.display='block';

}



/*function reply_click(clicked_id){
	var img = $('#'+clicked_id).attr('src');
	console.log("CSákü maákó: "+clicked_id);
	var pictureImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");

   picture.style.display = "block";
   pictureImg.src = img;
    
}


// Get the image and insert it inside thepicture - use its "alt" text as a caption
;

// Get the <span> element that closes thepicture

// When the user clicks on <span> (x), close thepicture*/
$("#sca").click(function(){
    picBlock.style.display = "none";
   	bigPic[0].src = ""; 

});
</script>
<?php include("includes/footer.inc.php"); ?>