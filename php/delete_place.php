
<?php

 

include("includes/dbh.inc.php");


if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM place WHERE place_id = {$id}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

 

    $conn->close();

?>

 

<!DOCTYPE html>

<html style="background-image: url(https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_960_720.jpg);background-repeat: no-repeat; background-size: 100% 100%">

<head>

    <title>Delete User</title>

</head>

<body>

 

<h3>Do you really want to delete this user?</h3>

<form action="place_stuff/a_delete.php" method="GET">

 

    <input type="hidden" name="id" value="<?php echo $data['place_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="landing.php"><button type="button">No, go back!</button></a>

</form>

 

</body>

</html>

 

<?php

}

?>