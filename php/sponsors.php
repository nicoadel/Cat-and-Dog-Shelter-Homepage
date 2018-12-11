<?php
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_sponsors.inc.php"); ?>

<link rel="stylesheet" type="text/css" href="../css/sponsors.css">
<div class="sponsors_content">
	<h1 class="sponsors_heading">Our Sponsors</h1>
	<div class="sponsors_description">
	<img src="../img/sponsor-cat.png" alt="">
	
	<p class="sponsors_description_text">Because we are a non-profit organization, our activities would be impossible without voluntary donations and sponsorship gifts. We are grateful for any help and interest expressed. We would also like to publicly express our gratitude to our following sponsors. We would like to thank all who have supported us with donations or gifts in public gatherings or in any other way.</p>
	
	</div>
	<div class="sponsors_sponsor_content">
		<h3>Special thanks to:</h3>
	<?php 
	foreach($sponsorsResult as $row) { ?>
 	
		<div class="sponsors_box">
			<h5><?php echo $row['sponsors_name'] ?></h5>
			<img src="<?php echo $row['sponsors_logo'] ?>" alt="">
			<p><?php echo $row['sponsors_email'] ?></p>
			<p><?php echo $row['sponsors_address'] ?></p>
		</div>
	
<?php }; ?>

	</div>
</div>


<?php include("includes/footer.inc.php"); ?>