<?php 

$sql = "SELECT * FROM sponsors";

$sponsorsRows = mysqli_query($conn, $sql);

$sponsorsResult = $sponsorsRows->fetch_all(MYSQLI_ASSOC);


 ?>