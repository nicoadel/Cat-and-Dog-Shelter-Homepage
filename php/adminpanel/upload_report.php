<!DOCTYPE html>

<html>

<head>

</head>

<body>
  <?php include "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>Reports Upload</h2></center>
       
        <form action="includes_admin/upload_reports.inc.php" method="post" class="my-4">
              <div class="form-group">
                <label for="exampleInputEmail1">Reports Date :</label>
                <input type="date"
                class="form-control"
                name="reports_date"
                placeholder="reports_date"
                >
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Reports descriptions:</label>
                <input type="text"
                class="form-control"
                name="reports_descriptions"
                placeholder=" reports_descriptions"
                >
              </div>

   <div class="form-group">
                <label for="exampleInputEmail1">Reports image:</label>
                <input type="text"
                class="form-control"
                name="reports_image"
                placeholder="reports_image"
                >
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Name:</label>
                <input type="text"
                class="form-control"
                name="name"
                placeholder="name"
                >
              </div>

               
              <button type="submit" class=" btn btn-warning">
                Insert report
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

