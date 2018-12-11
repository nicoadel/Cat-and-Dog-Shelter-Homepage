<?php

 ob_start();
session_start();

 

require_once 'dbh.inc.php';

 

if($_GET['cat_id']) {

    $cat_id = $_GET['cat_id'];

 

    $sql = "SELECT * FROM media WHERE cat_id = {$cat_id}";

    $result = $connect->query($sql);

 

    $data = $result->fetch_assoc();

 

    $connect->close();

 

?>

 

<!DOCTYPE html>

<html>

<head>

    <title>Edit User</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
  <div id="navBar">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <div class="container">
                    
                
                <a class="navbar-brand text-warning" href="#">CodeReview 10</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarsExample04">
                <ul class="navbar-nav mr-auto">
                    <!-- <li class="nav-item active">
                                  <a class="nav-link btn btn-outline-warning" href="#" data-toggle="modal" data-target="#exampleModalCenter4"> Add New Book <span class="sr-only">(current)</span></a>
                                  
                </li>
                 -->
                 
                </ul>
                <form class="form-inline my-2 my-md-0">
          
                </form>
            </div>
            </div>
            </nav>
        </div>
<div class="container">
  

    <form action="includes_admin/upload_cats.inc.php"  method="post" class="my-2">
              <div class="form-group">
                <label for="exampleInputEmail1">cat user id :</label>
                <input type="text"
                class="form-control"
                name="cat_user_id"
                placeholder="cat user id"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">cat name:</label>
                <input type="text"
                class="form-control"
                name="cat_name"
                placeholder=" cat name"
                >
              </div>

   <div class="form-group">
                <label for="exampleInputEmail1">born date:</label>
                <input type="date"
                class="form-control"
                name="born_date"
                placeholder="born date"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">height:</label>
                <input type="text"
                class="form-control"
                name="height"
                placeholder="height"
                >
              </div>

                <div class="form-group">
                <label for="exampleInputEmail1">weight:</label>
                <input type="text"
                class="form-control"
                name="weight"
                placeholder="weight"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">castration:</label>
                <select class="custom-select" name="castration">
                <option selected>Choose...</option>
                <option value="yes">yes</option>
                <option value="no">no</option>
              </select>
              </div>

               <div class="form-group">
                <label for="exampleInputEmail1">image cat:</label>
                <input type="text"
                class="form-control"
                name="image_cat"
                placeholder="image_cat"
                > </div>
              <button type="hidden" class=" btn btn-warning" name="cat_id" value="<?php echo $data['cat_id']?>">
                Save Changes
              </button>
              <a href="index.php"><button type="button" class=" btn btn-warning">Back</button>
            </form> 

 </div>



 

</body>

</html>

 

<?php

}
ob_end_flush(); 
?>

