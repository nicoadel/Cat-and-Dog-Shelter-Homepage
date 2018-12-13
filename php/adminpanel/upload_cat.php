<?php include("includes_admin/dbh.inc.php");
include("includes_admin/upload_dogs.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Útulok Piešťany</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body id="page-top">
  <?php include "includes_admin/navbar.inc.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <form action="includes_admin/upload_cats.inc.php" method="POST">
          <div class="form-group">
            <label>Cat Name</label>
            <input type="text" class="form-control" name="cat_name" placeholder="Fluffy">
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender">
              <option value="male">male</option>
              <option value="female">female</option>
            </select>
          </div>
          <div class="form-group">
            <label>Born date</label>
            <input type="date" class="form-control" name="born_date" placeholder="2016-01-01">
          </div>
          <div class="form-group">
            <label>Castration</label>
            <select class="form-control" name="castration">
              <option value="yes">Yes</option>
              <option value="no">No</option>
            </select>
          </div>
          <div class="form-group">
            <label>Special ID</label>
            <input type="text" class="form-control" name="spec_id" placeholder="DS23213">
          </div>
          <div class="form-group">
            <label>Height</label>
            <input type="text" class="form-control" name="height" placeholder="30 cm">
          </div>
          <div class="form-group">
            <label>Weight</label>
            <input type="text" class="form-control" name="weight" placeholder="4 kg">
          </div>
          <div class="form-group">
            <label>Breed</label>
            <input type="text" class="form-control" name="type" placeholder="European short hair">
          </div>
          <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="desc" placeholder="cute">
          </div>
          <input class="btn btn-warning"" type="submit" value="Next" name="upload_cat_table" />
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>