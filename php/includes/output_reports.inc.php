<?php 

$sql ="SELECT * FROM reports";

$reportsRows = mysqli_query($conn, $sql);
$reportsResult = $reportsRows->fetch_all(MYSQLI_ASSOC);

 ?>