<?php

 

require_once 'includes/dbh.inc.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql = "SELECT * FROM place WHERE place_id = {$id}";

    $result = $conn->query($sql);

 

    $data = $result->fetch_assoc();

 

    $conn->close();

 

?>


<!DOCTYPE html>

<html>

<head>

    <title>Edit User</title>

 

    <style type="text/css">

        fieldset {

            margin: auto;

            margin-top: 100px;

            width: 50%;

        }

 

        table tr th {

            padding-top: 20px;

        }

    </style>

 

</head>

<body>

 

<fieldset>

    <legend>Update media</legend>

 

    <form action="place_stuff/a_update.php" method="GET">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>place_image</th>

                <td><input type="text" name="place_image" placeholder="place_image" value="<?php echo $data['place_image'] ?>" /></td>

            </tr>     


<tr>

                <th>animal_image</th>

                <td><input type="text" name="animal_image" placeholder="animal_image" value="<?php echo $data['animal_image'] ?>" /></td>

            </tr>
            <tr>

                <input type="hidden" name="place_id" value="<?php echo $data['place_id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="landing.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 


 

</body>

</html>

 

<?php

}

?>