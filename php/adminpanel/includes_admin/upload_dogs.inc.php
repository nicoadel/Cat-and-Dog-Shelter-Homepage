<?php
require_once 'dbh.inc.php';

if($_POST) {

    $dog_user_id =$_POST['dog_user_id'];
    $dog_name =$_POST['dog_name'];
    $born_date =$_POST['born_date'];
    $height =$_POST['height'];
    $weight =$_POST['weight'];
    $castration =$_POST['castration'];
      $dog_desc =$_POST['dog_desc'];
  $type =$_POST['type'];
    $image_dog =$_POST['image_dog'];
/*
    $adaption_name =$_POST['adaption_name'];
    $adaption_kind =$_POST['adaption_kind'];
    $adaption_address =$_POST['adaption_address'];
    $adaption_email =$_POST['adaption_email'];
    $adaption_replacement =$_POST['adaption_replacement'];
    $adaption_other_pets =$_POST['adaption_other_pets'];
    $adaption_caption =$_POST['adaption_caption'];
    $adaption_kind_of_pets =$_POST['adaption_kind_of_pets'];
    $telephone_number1 =$_POST['telephone_number1'];
    $telephone_number2 =$_POST['telephone_number2'];
    $other_pet =$_POST['other_pet'];
*/
    


    $sql = "INSERT INTO dog (
            dog_user_id,
            dog_name,
            born_date,
            height,
            weight,
            castration,
            dog_desc,
            type


            ) VALUES (
            $dog_user_id,
            '$dog_name',
            '$born_date',
            '$height',
            '$weight',
            '$castration',
            '$dog_desc',
            '$type'
           
            )";

    $sql1 = "INSERT INTO image_dog (
            image_dog,
            fk_dog_id
            ) VALUES (
            '$image_dog',
         11
       
            )";
/*
    $sql2 = "INSERT INTO adaption (
            adaption_name,
            adaption_kind,
            adaption_address,
            adaption_email,
            adaption_replacement,
            adaption_other_pets,
            adaption_caption,
            adaption_kind_of_pets,
           telephone_number1,
           telephone_number2,
           other_pet
       

            ) VALUES (
            '$adaption_name,'
            '$adaption_kind',
            '$adaption_address',
            '$adaption_email',
            '$adaption_replacement',
            '$adaption_other_pets',
            '$adaption_caption',
            '$adaption_kind_of_pets',
            $telephone_number1,
            $telephone_number2,
            $other_pet
       
            )";
            */
    if($connect->query($sql) === TRUE) {
    echo'<html>

    <head>

    <title>PHP CRUD  |  Add User</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><body>'
        ;
        echo "<h1 class='text-center text-danger'>New Record Successfully Created</h1> </html>";

    } else {

        echo "Error " . $sql . ' ' . $connect->connect_error;

    }


        if($connect->query($sql1) === TRUE) {
    echo'<html>

    <head>

    <title>Add dog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><body>'
        ;
        echo "<div class=' text-center container'>";
        echo "<a href='../upload_dog.php' style='text-decoration:none'>
                <button type='button' class='btn btn-warning m-1'>
                    Back
                </button>
                </a>";

        echo "<a href='../index.php'><button type='button' class='btn btn-warning m-1'>Home</button></a>";
        echo'</div></body>

            </html>';
    } else {

        echo "Error " . $sql1 . ' ' . $connect->connect_error;

    }
/*
     if($connect->query($sql2) === TRUE) {
    echo'<html>

    <head>

    <title>Add dog</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script><body>'
        ;
        echo "<h1 class='text-center text-danger'>New Record Successfully Created</h1>";
        echo "<div class=' text-center container'>";
        echo "<a href='../uploade_dog.php' style='text-decoration:none'>
                <button type='button' class='btn btn-warning m-1'>
                    Back
                </button>
                </a>";

        echo "<a href='../index.php'><button type='button' class='btn btn-warning m-1'>Home</button></a>";
        echo'</div></body>

            </html>';
    } else {

        echo "Error " . $sql2 . ' ' . $connect->connect_error;

    }
*/
    $connect->close();

}

?>

