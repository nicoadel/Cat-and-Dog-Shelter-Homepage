<?php
require_once '../includes/dbh.inc.php';

if($_GET) {
 $place_image = $_GET['place_image'];
$animal_image = $_GET['animal_image'];
$place_id = $_GET['place_id'];



    $sql = " UPDATE place SET
     place_image = ' $place_image',
        animal_image = '$animal_image' WHERE place_id = {$place_id}";
    if($conn->query($sql) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update.php?id=".$place_id."'><button type='button'>Back</button></a>";

        echo "<a href='../gallary.php'><button type='button'>gallary</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();
 

}

 

?>
