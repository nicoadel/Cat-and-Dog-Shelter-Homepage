<?php
require_once '../includes/dbh.inc.php';

if($_GET) {
 $reports_image = $_GET['reports_image'];
$reports_descriptions = $_GET['reports_descriptions'];
$reports_date = $_GET['reports_date'];
$name = $_GET['name'];
$reports_id = $_GET['reports_id'];



    $sql1 = " UPDATE place SET
     reports_image = ' $reports_image',
    reports_descriptions = '$reports_descriptions'
     reports_date = ' $reports_date',
    name = '$name' WHERE reports_id = {$reports_id}";
    if($conn->query($sql1) === TRUE) {

        echo "<p>Succcessfully Updated</p>";

        echo "<a href='../update_place.php?id=".$reports_id."'><button type='button'>Back</button></a>";

        echo "<a href='../reports.php'><button type='button'>reports</button></a>";

    } else {

        echo "Erorr while updating record : ". $conn->error;

    }

 

    $conn->close();
 

}

 

?>
