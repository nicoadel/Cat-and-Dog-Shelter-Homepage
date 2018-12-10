<?php 

 $sql = "SELECT * FROM cat
         INNER JOIN  adaption on  cat.fk_adaption_id = adaption.adaption_id
         INNER JOIN image_cat on  cat.fk_cat_image = image_cat.image_cat_id
         INNER JOIN supporter on  cat.fk_supporter = supporter.supporter_id";


$catRows = mysqli_query($conn, $sql);

$catResult = $catRows->fetch_all(MYSQLI_ASSOC);



 ?>





