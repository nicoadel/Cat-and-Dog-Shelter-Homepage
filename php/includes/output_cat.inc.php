<?php 

 $sql = "SELECT * FROM cat
         JOIN main_image_cat ON cat.cat_id = main_image_cat.fk_cat_id
         JOIN image_cat ON cat.cat_id = image_cat.fk_cat_id
         JOIN adaption ON cat.cat_id = adaption.fk_cat_id
         JOIN supporter ON cat.cat_id = supporter.fk_cat_id";


$catRows = mysqli_query($conn, $sql);

$catResult = $catRows->fetch_all(MYSQLI_ASSOC);



 ?>





