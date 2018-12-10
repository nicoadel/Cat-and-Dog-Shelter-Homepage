<?php

$sql = "SELECT * FROM team";

$teamRows = mysqli_query($conn, $sql);

$teamResult = $teamRows->fetch_all(MYSQLI_ASSOC);


 ?>