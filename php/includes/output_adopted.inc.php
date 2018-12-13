<?php 

$sql1 = "SELECT * FROM dog
		 LEFT JOIN main_image_dog ON dog.dog_id = main_image_dog.fk_dog_id 
		LEFT JOIN image_dog ON dog.dog_id = image_dog.fk_dog_id
		 LEFT JOIN adaption ON dog.dog_id = adaption.fk_dog_id
		 WHERE adaption.fk_dog_id = dog.dog_id
		 AND adaption.verify = '1'
         UNION
SELECT * FROM cat
		 LEFT JOIN main_image_cat ON cat.cat_id = main_image_cat.fk_cat_id 
		LEFT JOIN image_cat ON cat.cat_id = image_cat.fk_cat_id 
		 LEFT JOIN adaption ON cat.cat_id = adaption.fk_cat_id
		 WHERE adaption.fk_cat_id = cat.cat_id
		 AND adaption.verify = '1'
		 ORDER BY dog_name";

$result=mysqli_query($conn, $sql1);
$data = array();
while($row = mysqli_fetch_array($result)){
	$data[$row['dog_id']]['dog_name'] = $row['dog_name'];
	$data[$row['dog_id']]['type'] = $row['type'];
	$data[$row['dog_id']]['name'] = $row['name'];
	$data[$row['dog_id']]['born_date'] = $row['born_date'];
	$data[$row['dog_id']]['main_image'] = $row['main_image_dog'];
	$data[$row['dog_id']]['castration'] = $row['castration'];
	$data[$row['dog_id']]['height'] = $row['height'];
	$data[$row['dog_id']]['weight'] = $row['weight'];
	$data[$row['dog_id']]['dog_desc'] = $row['dog_desc'];
	$data[$row['dog_id']]['in_memoriam'] = $row['in_memoriam'];
	$data[$row['dog_id']]['dog_id'][$row["image_dog_id"]] = array(
		'first'=>$row["image_dog"],
	);
};


/*

SELECT * FROM dog
		 LEFT JOIN main_image_dog ON dog.dog_id = main_image_dog.fk_dog_id 
		 LEFT JOIN image_dog ON dog.dog_id = image_dog.fk_dog_id 
		 LEFT JOIN adaption ON dog.dog_id = adaption.fk_dog_id
		 WHERE adaption.fk_dog_id IS NOT NULL
         UNION
         SELECT * FROM cat
		 LEFT JOIN main_image_cat ON cat.cat_id = main_image_cat.fk_cat_id 
		 LEFT JOIN image_cat ON cat.cat_id = image_cat.fk_cat_id 
		 LEFT JOIN adaption ON cat.cat_id = adaption.fk_cat_id
		 WHERE adaption.fk_cat_id IS NOT NULL */?>
