<link rel="stylesheet" type="text/css" href="../css/gallery.css">
<?php include("includes/navbar.inc.php"); ?>
<?php include("includes/dbh.inc.php");
$sql= "SELECT * FROM place";
$result = mysqli_query($conn,$sql);

$newarray = $result->fetch_all(MYSQLI_ASSOC);
?>

<div id='main' class='containerr pb-5 pt-5'>

<?php foreach ($newarray as $key) { ?>


		<a data-toggle="modal" data-target="#imageModal<?php echo $key["place_id"];?>"><img src='<?php echo $key['place_image'] ?>' class='img-thumbnail make_bigger' alt='Cinque Terre'></a>



 <div class="modal fade" id="imageModal<?php echo $key["place_id"];?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog image_modal modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Image</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src='<?php echo $key['place_image'] ?>' class='img-large make_bigger' alt='Cinque Terre'>
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
