<?php include("includes/navbar.inc.php"); ?>

<link rel="stylesheet" type="text/css" href="../css/sponsors.css">
<div class="sponsors_content">
	<h1 class="sponsors_heading">Our Sponsors</h1>
	<div class="sponsors_description">
	<img src="../img/sponsor-cat.png" alt="">
	
	<p class="sponsors_description_text">Because we are a non-profit organization, our activities would be impossible without voluntary donations and sponsorship gifts. We are grateful for any help and interest expressed. We would also like to publicly express our gratitude to our following sponsors. We would like to thank all who have supported us with donations or gifts in public gatherings or in any other way.</p>
	
	</div>
	<h3 class="sponsors_heading">Special thanks to:</h3>
	<?php 
		for ($x = 0; $x <= 3; $x++) {

	?>
	<div class="sponsors_sponsor_content">

		<div class="sponsors_box">
			<h5>Sponsor Name</h5>
			<img src="http://via.placeholder.com/300x100 " alt="">
			<p>N. Teslu 6711/25, Piešťany</p>
		</div>
	</div>
	<?php } ?>

</div>


<?php include("includes/footer.inc.php"); ?>