<?php

 

require_once 'includes/dbh.inc.php';

 

if($_GET['id']) {

    $id = $_GET['id'];

 

    $sql1 = "SELECT * FROM reports WHERE reports_id = {$id}";

    $result1 = $conn->query($sql1);

 

    $data1 = $result1->fetch_assoc();

 

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

 

    <form action="reports_stuff/a_update.php" method="GET">

        <table cellspacing="0" cellpadding="0">

            <tr>

                <th>reports_image</th>

                <td><input type="text" name="reports_image" placeholder="reports_image" value="<?php echo $data1['reports_image'] ?>" /></td>

            </tr>     


<tr>

                <th>reports_descriptions</th>

                <td><input type="text" name="reports_descriptions" placeholder="reports_descriptions" value="<?php echo $data1['reports_descriptions'] ?>" /></td>

            </tr>
            <tr>

                <th>reports_date</th>

                <td><input type="text" name="reports_date" placeholder="reports_date" value="<?php echo $data1['reports_date'] ?>" /></td>

            </tr>
            <tr>

                <th>name</th>

                <td><input type="text" name="name" placeholder="name" value="<?php echo $data1['name'] ?>" /></td>

            </tr>
            <tr>

                <input type="hidden" name="reports_id" value="<?php echo $data1['reports_id']?>" />

                <td><button type="submit">Save Changes</button></td>

                <td><a href="reports.php"><button type="button">Back</button></a></td>

            </tr>

        </table>

    </form>

 

</fieldset>

 


 

</body>

</html>

 

<?php

}

?>