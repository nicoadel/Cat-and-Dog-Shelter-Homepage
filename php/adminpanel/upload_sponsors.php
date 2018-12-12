<!DOCTYPE html>

<html>

<head>



</head>

<body>
  
 <?php include "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>Sponsors Upload</h2></center>
       
        <form action="includes_admin/upload_sponsors.inc.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Sponsors Logo :</label>
                <input type="text"
                class="form-control"
                name="sponsors_logo"
                placeholder="sponsors_logo"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sponsors address:</label>
                <input type="text"
                class="form-control"
                name="sponsors_address"
                placeholder="sponsors_address"
                >
              </div>

           <div class="form-group">
                <label for="exampleInputEmail1">Sponsors email :</label>
                <input type="email"
                class="form-control"
                name="sponsors_email"
                placeholder="sponsors_email"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Sponsors name:</label>
                <input type="text"
                class="form-control"
                name="sponsors_name"
                placeholder="sponsors_name"
                >
              </div>
              <button type="submit" class=" btn btn-warning">
                Insert new sponsor
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

