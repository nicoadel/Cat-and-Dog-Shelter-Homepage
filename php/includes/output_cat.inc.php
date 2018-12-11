$sql1 = "SELECT *FROM cat JOIN main_image_cat ON cat.cat_id = main_image_cat.fk_cat_id JOIN image_cat ON cat.cat_id = image_cat.fk_cat_id";
 $result=mysqli_query($conn, $sql1);
$data = array();
while($row = mysqli_fetch_array($result)){
	$data[$row['cat_id']]['cat_name'] = $row['cat_name'];
	$data[$row['cat_id']]['type'] = $row['type'];
	$data[$row['cat_id']]['post_date'] = $row['post_date'];
	$data[$row['cat_id']]['born_date'] = $row['born_date'];
	$data[$row['cat_id']]['main_image'] = $row['main_image'];
	$data[$row['cat_id']]['castration'] = $row['castration'];
	$data[$row['cat_id']]['height'] = $row['height'];
	$data[$row['cat_id']]['weight'] = $row['weight'];
	$data[$row['cat_id']]['cat_desc'] = $row['cat_desc'];
	$data[$row['cat_id']]['cat_id'][$row["image_cat_id"]] = array(
		'first'=>$row["image_cat"],
	);
};