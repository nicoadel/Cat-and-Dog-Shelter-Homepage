<?php

 

require_once '../includes/dbh.inc.php';

 

if($_GET) {

    $id = $_GET['id'];

 

    $sql1 = "DELETE FROM reports WHERE reports_id = {$id}";

    if($conn->query($sql1) === TRUE) {

        echo "<p>Successfully deleted!!</p>";

        echo "<a href='../reports.php'><button type='button'>Back</button></a>";

    } else {

        echo "Error deleting record : " . $conn->error;

    }

 

    $conn->close();
}

 

?>