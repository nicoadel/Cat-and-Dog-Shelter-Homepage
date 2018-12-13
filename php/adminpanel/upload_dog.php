<?php include("includes_admin/dbh.inc.php");
include("includes_admin/upload_dogs.inc.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Útulok Piešťany</title>
</head>

<body id="page-top">
  <?php include("includes_admin/navbar.inc.php"); ?>
  <div class="container">
    <div class="row">
      <div class="col-8 offset-2">
        <form action="includes_admin/upload_dogs.inc.php" method="POST">
          <div class="form-group">
            <label>Dog Name</label>
            <input type="text" class="form-control" name="dog_name" placeholder="Fluffy">
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
            <input type="text" class="form-control" name="height" placeholder="70 cm">
          </div>
          <div class="form-group">
            <label>Weight</label>
            <input type="text" class="form-control" name="weight" placeholder="13 kg">
          </div>
          <div class="form-group">
            <label>Breed</label>
            <input type="text" class="form-control" name="type" placeholder="Labrador mixture">
          </div>
          <div class="form-group">
            <label>Description</label>
            <input type="text" class="form-control" name="desc" placeholder="grumpy">
          </div>
          <input class="btn btn-warning"" type="submit" value="Next" name="upload_dog_table" />
        </form>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>