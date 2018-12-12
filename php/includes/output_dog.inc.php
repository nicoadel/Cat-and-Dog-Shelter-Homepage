<?php 

$sql1 = "SELECT * FROM dog LEFT JOIN main_image_dog ON dog.dog_id = main_image_dog.fk_dog_id LEFT JOIN image_dog ON dog.dog_id = image_dog.fk_dog_id LEFT JOIN adaption ON dog.dog_id = adaption.fk_dog_id
	WHERE adaption.fk_dog_id IS NULL ORDER BY dog_name";

$result=mysqli_query($conn, $sql1);
$data = array();
while($row = mysqli_fetch_array($result)){
	$data[$row['dog_id']]['dog_name'] = $row['dog_name'];
	$data[$row['dog_id']]['type'] = $row['type'];
	$data[$row['dog_id']]['post_date'] = $row['post_date'];
	$data[$row['dog_id']]['born_date'] = $row['born_date'];
	$data[$row['dog_id']]['main_image'] = $row['main_image_dog'];
	$data[$row['dog_id']]['castration'] = $row['castration'];
	$data[$row['dog_id']]['height'] = $row['height'];
	$data[$row['dog_id']]['weight'] = $row['weight'];
	$data[$row['dog_id']]['dog_desc'] = $row['dog_desc'];
	$data[$row['dog_id']]['dog_id'] = $row['dog_id'];
	$data[$row['dog_id']]['image_dog'][$row["image_dog"]] = array();
};

 ?>