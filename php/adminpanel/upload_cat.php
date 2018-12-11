<!DOCTYPE html>

<html>

<head>

    <title>upload cat</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 

</head>

<body>
        <div class="container">
         <center><h2>Cat uploade</h2></center>
       
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

