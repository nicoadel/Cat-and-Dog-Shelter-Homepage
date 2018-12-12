<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php"); 
include("includes/output_cat.inc.php");
include("includes/upload_support.inc.php");
include("includes/upload_adopt.inc.php");
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
								echo $row["cat_id"];?>">More..</button>
							<button class="btn btn-success btn-block mb-2 buttons"  type="button" data-toggle="modal" data-target="#supportModal<?php
								echo $row["cat_id"];?>">Support</button>
							<button class="btn btn-success btn-block buttons" type="button" data-toggle="modal" data-target="#adoptModal<?php
								echo $row["cat_id"];?>">Adopt</button>
						</div>
					</div>
				</div>
				<!----MoreMOdal--->
				<div class="modal fade" id="moreModal<?php echo $row["cat_id"];?>" tabindex="-1" role="dialog" aria-labelledby="moreModalLabel" aria-hidden="true">
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
					      	<?php foreach($row["image_cat"] as $subkey => $subvalue){ ?>
					      	<div class="col-2 my-2">
					      		<img class="gallery_image" id="myImg<?php echo $row["cat_id"]; ?>" onClick="reply_click(this.id)" width="100%" height="90" style="object-fit: cover;" src="<?php echo $subkey; ?>" alt="">
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
				 <!--Support Modal-->
                <div class="modal fade" id="supportModal<?php echo $row["cat_id"];?>" tabindex="-1" role="dialog" aria-labelledby="supportModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="supportModalLabel">Support <?php echo $row["cat_name"]; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form  method="post" >
                          <div class="form-group">
                            <input type="hidden" class="form-control" name="cat_id" value="<?php echo $row["cat_id"];?>" placeholder="<?php echo $row["cat_name"]; ?>">
                          </div>
                          <div class="form-group">
                            <label>Your Full Name</label>
                            <input type="text" class="form-control" name="support_name" placeholder="Your Name">
                          </div>
                          <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="support_email" placeholder="name@example.com">
                          </div>
                          <div class="form-group">
                            <label>ZIP</label>
                            <input type="number" class="form-control" name="support_zip" placeholder="ZIP of city">
                          </div>
                          <div class="form-group">
                            <label>City</label>
                            <input type="text" class="form-control" name="support_city" placeholder="City">
                          </div>
                          <div class="form-group">
                            <label>Street</label>
                            <input type="text" class="form-control" name="support_street" placeholder="Street 23">
                          </div>
                          <div class="form-group">
                            <label>Phone Number</label>
                            <input type="text" class="form-control" name="support_tel" placeholder="01 234 567">
                          </div>
                          <input class="btn btn-success" type="submit" value="Support" name="support_cat" />
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Adopt Modal-->
                <div class="modal fade" id="adoptModal<?php echo $row["cat_id"];?>" tabindex="-1" role="dialog" aria-labelledby="adoptModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="adoptModalLabel">Adopt <?php echo $row["cat_name"]; ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form  method="post" >
                          <div class="form-group">
                            <input type="hidden" class="form-control" name="cat_id" value="<?php echo $row["cat_id"];?>" placeholder="<?php echo $row["cat_name"]; ?>">
                          </div>
                          <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" class="form-control" name="adopt_name" placeholder="Your Name">
                          </div>
                          <div class="form-group">
                            <label >Kind of keeping</label>
                            <select name="kind" class="form-control">
                              <option value="inside">Inside</option>
                              <option value="inside & outside">Inside & Outside</option>
                              <option value="outside">Outside</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label >Other pets in the household</label>
                            <select  name="other1" class="form-control">
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label >Other pets in the household</label>
                            <input type="text" class="form-control" name="other2" placeholder="2 friendly cats">
                          </div>
                          <div class="form-group">
                            <label >Email address</label>
                            <input type="email" class="form-control" name="adopt_email" placeholder="name@example.com">
                          </div>
                          <div class="form-group">
                            <label >Address</label>
                            <input type="text" class="form-control" name="adopt_address" placeholder="1234 City Street 12">
                          </div>
                          <div class="form-group">
                            <label >Phone Number 1</label>
                            <input type="text" class="form-control" name="adopt_tel1" placeholder="01 234 567">
                          </div>
                          <div class="form-group">
                            <label >Phone Number 2 (optional)</label>
                            <input type="text" class="form-control" name="adopt_tel2" placeholder="01 234 567">
                          </div>
                          <input class="btn btn-success" type="submit" value="Adopt" name="adopt_cat" />
                        </form>
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


$("#sca").click(function(){
    picBlock.style.display = "none";
   	bigPic[0].src = ""; 

});
</script>
<?php include("includes/footer.inc.php"); ?>