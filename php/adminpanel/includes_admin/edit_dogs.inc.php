<?php 
    include_once "dbh.inc.php";
    
    // initialize variables
    $dog_name = "";
    $post_date = "";
    $born_date = "";
    $castration = "";
    $dog_user_id = "";
    $height = "";
    $weight = "";
    $dog_desc = "";
    $type = "";
    $gender = "";
    $in_memoriam = "";


if (isset($_POST['update'])) {
    $dog_name = $_POST['dog_name'];
    $post_date = $_POST['post_date'];
    $born_date = $_POST['born_date'];
    $castration = $_POST['castration'];
    $dog_user_id = $_POST['dog_user_id'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $dog_desc = $_POST['dog_desc'];
    $type = $_POST['type'];
    $gender = $_POST['gender'];
    $in_memoriam = $_POST['in_memoriam'];
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE dog SET  dog_name='$dog_name', post_date='$post_date', born_date='$born_date', castration='$castration', dog_user_id='$dog_user_id', height='$height', weight='$weight', dog_desc='$dog_desc', type='$type', gender='$gender', in_memoriam='$in_memoriam' WHERE dog_id='$id'");
    $_SESSION['message'] = "dog updated!"; 
    header('location: ../edit_dogs.php');
}
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM dog WHERE dog_id=$id");
    mysqli_query($conn, "DELETE FROM image_dog WHERE fk_dog_id=$id");
    mysqli_query($conn, "DELETE FROM main_image_dog WHERE fk_dog_id=$id");
    $_SESSION['message'] = "Shelter deleted!"; 
    header('location: edit_dogs.php');
}
?>