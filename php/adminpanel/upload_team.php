<!DOCTYPE html>

<html>

<head>
</head>

<body>
  
<?php include "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>Team Upload</h2></center>
       
        <form action="includes_admin/upload_team.inc.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Team name :</label>
                <input type="text"
                class="form-control"
                name="name"
                placeholder="team name"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Image:</label>
                <input type="text"
                class="form-control"
                name="image"
                placeholder="team image"
                >
              </div>

   <div class="form-group">
                <label for="exampleInputEmail1">Position:</label>
                <input type="text"
                class="form-control"
                name="position"
                placeholder="position"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Description:</label>
                <input type="text"
                class="form-control"
                name="description"
                placeholder="descripStion"
                >
              </div>
              <button type="submit" class=" btn btn-warning">
                Insert to team
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

