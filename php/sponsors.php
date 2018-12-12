<link rel="stylesheet" type="text/css" href="../css/gallery.css">
<?php include("includes/navbar.inc.php"); ?>
<?php include("includes/dbh.inc.php");
$sql= "SELECT * FROM sponsors";
$result = mysqli_query($conn,$sql);

$newarray = $result->fetch_all(MYSQLI_ASSOC);
?>

<div id='main' class='containerr pb-5 pt-5'>

<?php foreach ($newarray as $key) { ?>


		<a data-toggle="modal" data-target="#imageModal<?php echo $key["sponsors_id"];?>"><img src='<?php echo $key['sponsors_logo'] ?>' class='img-thumbnail make_bigger' alt='Cinque Terre'></a>



 <div class="modal fade" id="imageModal<?php echo $key["sponsors_id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog image_modal modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sponsor</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <img src='<?php echo $key['sponsors_logo'] ?>' class='img-large' alt='Cinque Terre'>
        <h5 class="text-center"><?php echo $key['sponsors_name'] ?></h5>
        <p class="text-center"><?php echo $key['sponsors_email'] ?></p>
        <p class="text-center"><?php echo $key['sponsors_address'] ?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>



<?php } ?>
 </div>
<?php include("includes/footer.inc.php"); ?>
