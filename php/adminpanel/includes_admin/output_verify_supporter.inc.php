<?php 
 $sql = "SELECT * FROM supporter
 		LEFT JOIN cat ON supporter.fk_cat_id = cat.cat_id 
 		LEFT JOIN dog ON supporter.fk_dog_id = dog.dog_id 
 		WHERE verify = 2";
          $result = mysqli_query($conn, $sql);
          $rows = $result->fetch_all(MYSQLI_ASSOC);
 ?>