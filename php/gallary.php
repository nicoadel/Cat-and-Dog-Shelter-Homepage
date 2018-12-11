<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php include("includes/dbh.inc.php");
$sql= "SELECT * FROM place";
$result = mysqli_query($conn,$sql);

$newarray = $result->fetch_all(MYSQLI_ASSOC);

foreach ($newarray as $key) {
  print("<div id='main' class='container  mt-4 pt-4'><div class='row'><div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 pl-7'><img src='".$key['place_image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' height='300'>	<div>
         <a href='update_place.php?id=".$key['place_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete_place.php?id=".$key['place_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div></div><div class='col-lg-6 col-md-12 col-sm-12 col-xs-12 mb-5 pl-7'><img src='".$key['animal_image']."'class='img-thumbnail' id='img' alt='Cinque Terre' width='400' height='300'>
  	<div>
         <a href='update_place.php?id=".$key['place_id']."'><button type='button' class='btn btn-outline-success'>Edit</button></a>
         <a href='delete_place.php?id=".$key['place_id']."'><button type='button' class='btn btn-outline-danger'>Delete</button></a>
         </div></div></div></div><hr>");
}

 ?>
