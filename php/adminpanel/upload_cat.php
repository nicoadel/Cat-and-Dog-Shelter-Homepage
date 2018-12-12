<!DOCTYPE html>

<html>

<head>


</head>

<body>
  <?php include "includes_admin/navbar.inc.php"; ?>
        <div class="container">
         <center><h2>Cat Upload</h2></center>
       
        <form action="includes_admin/upload_cats.inc.php" method="post" class="my-4">
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
                <label for="exampleInputEmail1">cat description:</label>
                <input type="text"
                class="form-control"
                name="cat_desc"
                placeholder="cat_desc"
                > </div>
                        <div class="form-group">
                <label for="exampleInputEmail1">cat type:</label>
                <input type="text"
                class="form-control"
                name="type"
                placeholder="type"
                > </div>
                                        <div class="form-group">
                <label for="exampleInputEmail1">cat gender:</label>
                <input type="text"
                class="form-control"
                name="gender"
                placeholder="gender"
                > </div>

               <div class="form-group">
                <label for="exampleInputEmail1">image cat:</label>
                <input type="text"
                class="form-control"
                name="image_cat"
                placeholder="image_cat"
                > </div>
              <button type="submit" class=" btn btn-warning">
                Insert cat
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

