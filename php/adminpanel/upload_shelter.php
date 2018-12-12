<!DOCTYPE html>

<html>

<head>
</head>

<body>
  
<?php include "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>Shelter upload</h2></center>
       
        <form action="includes_admin/upload_shelter.inc.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Shelter Image :</label>
                <input type="text"
                class="form-control"
                name="place_image"
                placeholder="place_image"
                >
              </div>  
              <button type="submit" class=" btn btn-warning">
                Insert to places
              </button>

              <a href="users.php">
              <button type="button" class=" btn btn-warning">
                Back
              </button>
                </a>
            </form> 

  </div>
</body>
</html>

