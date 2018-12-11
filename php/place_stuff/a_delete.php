<?php

 

require_once '../includes/dbh.inc.php';

 

if($_GET) {

    $id = $_GET['id'];

 

    $sql = "DELETE FROM place WHERE place_id = {$id}";

    if($conn->query($sql) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../gallary.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error deleting record : " . $conn->error;

    }

 

    $conn->close();
}

 

?>