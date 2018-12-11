<?php 

 $sql = "SELECT * FROM dog
         JOIN main_image_dog ON dog.dog_id = main_image_dog.fk_dog_id
         JOIN image_dog ON dog.dog_id = image_dog.fk_dog_id
         JOIN adaption ON dog.dog_id = adaption.fk_dog_id
         JOIN supporter ON dog.dog_id = supporter.fk_dog_id";

$dogRows = mysqli_query($conn, $sql);

$dogResult = $dogRows->fetch_all(MYSQLI_ASSOC);
 


 ?>