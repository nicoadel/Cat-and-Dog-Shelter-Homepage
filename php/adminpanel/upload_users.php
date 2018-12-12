<!DOCTYPE html>

<html>

<head>


</head>

<body>
  
<?php include "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>User Upload</h2></center>
       
        <form action="includes_admin/upload_users.inc.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Users email :</label>
                <input type="email"
                class="form-control"
                name="users_email"
                placeholder="users_email"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Users pass:</label>
                <input type="text"
                class="form-control"
                name="users_pass"
                placeholder="users_pass"
                >
              </div>

           <div class="form-group">
                <label for="exampleInputEmail1">Users name :</label>
                <input type="text"
                class="form-control"
                name="users_name"
                placeholder="users_name"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Users role:</label>
                <input type="text"
                class="form-control"
                name="users_role"
                placeholder="users_role"
                >
              </div>
              <button type="submit" class=" btn btn-warning">
                Insert new user
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

