<?php 
include("includes_admin/dbh.inc.php");
include("includes_admin/navbar.inc.php");
include("includes_admin/image_upload_cat.inc.php");
?>


<div class="container">
<div class="row">
	<div class="col-lg-6">
		<h2>Upload Profile Picture</h2>
		<form  method="post" enctype="multipart/form-data" class="mb-4">
			<button class="btn btn-primary"><input type="file" name="file" value="add" onchange="readURL(this)"></button>
			<button type="submit" class="btn btn-primary" name="submit">UPLOAD</button>
		</form>
		<hr>
		<div>
		<h2>Upload Other Pictures</h2>
		<form  method="post" enctype="multipart/form-data" class="mb-4">
			<input type="file" name="file" class="mb-4" onchange="readURL(this);">
			<input type="file" name="file1" class="mb-4" onchange="readURL(this);">
			<input type="file" name="file2" class="mb-4" onchange="readURL(this);">
			<input type="file" name="file3" class="mb-4" onchange="readURL(this);">
			<input type="file" name="file4" class="mb-4" onchange="readURL(this);">
			<p><button type="submit" class="btn btn-primary" name="submitOther">UPLOAD</button></p>
		</form>
			
	</div>
	</div>
	<div class="col-lg-6"><img id="blah" src="#" alt=""></div>
	
</div>
</div>
<script>
	function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function (e) {
      $('#blah')
        .attr('src', e.target.result)
        .width(450)
        .height(500);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
</script>