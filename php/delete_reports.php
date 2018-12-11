
<?php

 

include("includes/dbh.inc.php");


if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql1 = "SELECT * FROM reports WHERE reports_id = {$id}";

    $result1 = $conn->query($sql1);

    $data1 = $result1->fetch_assoc();

 

    $conn->close();

?>

 

<!DOCTYPE html>

<html style="background-image: url(https://cdn.pixabay.com/photo/2016/06/01/06/26/open-book-1428428_960_720.jpg);background-repeat: no-repeat; background-size: 100% 100%">

<head>

    <title>Delete User</title>

</head>

<body>

 

<h3>Do you really want to delete this user?</h3>

<form action="reports_stuff/a_delete.php" method="GET">

 

    <input type="hidden" name="id" value="<?php echo $data1['reports_id'] ?>" />

    <button type="submit">Yes, delete it!</button>

    <a href="reports.php"><button type="button">No, go back!</button></a>

</form>

 

</body>

</html>

 

<?php

}

?>