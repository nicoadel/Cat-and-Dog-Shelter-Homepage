<?php 
$sql= "SELECT dog.dog_name, cat.cat_name, main_image_dog.main_image_dog, main_image_cat.main_image
		FROM dog
		JOIN adoption ON dog.dog_id = adoption.fk_dog_id
		JOIN cat ON cat.cat_id = adoption.fk_cat_id";

$newAnimRows = mysqli_query($conn, $sql);

$newAnimResult = $newAnimRows->fetch_all(MYSQLI_ASSOC);
 ?>