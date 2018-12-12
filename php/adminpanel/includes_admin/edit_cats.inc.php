<?php 
    include_once "dbh.inc.php";
    
    // initialize variables
    $cat_name = "";
    $post_date = "";
    $born_date = "";
    $castration = "";
    $cat_user_id = "";
    $height = "";
    $weight = "";
    $cat_desc = "";
    $type = "";
    $gender = "";
    $in_memoriam = "";


if (isset($_POST['update'])) {
    $cat_name = $_POST['cat_name'];
    $post_date = $_POST['post_date'];
    $born_date = $_POST['born_date'];
    $castration = $_POST['castration'];
    $cat_user_id = $_POST['cat_user_id'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];
    $cat_desc = $_POST['cat_desc'];
    $type = $_POST['type'];
    $gender = $_POST['gender'];
    $in_memoriam = $_POST['in_memoriam'];
    $id = $_POST['id'];
    mysqli_query($conn, "UPDATE cat SET  cat_name='$cat_name', post_date='$post_date', born_date='$born_date', castration='$castration', cat_user_id='$cat_user_id', height='$height', weight='$weight', cat_desc='$cat_desc', type='$type', gender='$gender', in_memoriam='$in_memoriam' WHERE cat_id='$id'");
    $_SESSION['message'] = "Cat updated!"; 
    header('location: ../edit_cats.php');
}
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($conn, "DELETE FROM cat WHERE cat_id=$id");
    mysqli_query($conn, "DELETE FROM image_cat WHERE fk_cat_id=$id");
    mysqli_query($conn, "DELETE FROM main_image_cat WHERE fk_cat_id=$id");
    $_SESSION['message'] = "Shelter deleted!"; 
    header('location: edit_cats.php');
}
?>