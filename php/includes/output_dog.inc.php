<?php 

 $sql = "SELECT * FROM dog
  		 INNER JOIN  adaption on  dog.fk_adaption_id = adaption.adaption_id
  		 INNER JOIN image_dog on  dog.fk_image_dog = image_dog.image_dog_id
  		 INNER JOIN supporter on  dog.fk_support = supporter.supporter_id";

$dogRows = mysqli_query($conn, $sql);

$dogResult = $dogRows->fetch_all(MYSQLI_ASSOC);
 


 ?>