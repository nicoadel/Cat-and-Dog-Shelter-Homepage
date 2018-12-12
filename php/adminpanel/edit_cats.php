
<!DOCTYPE html>
<html>
<head>
  <title></title>
    <link rel="stylesheet" type="text/css" href="../../css/users.css">
</head>
<body>
  <?php include_once "includes_admin/navbar.inc.php"; ?>
  <div class="content">
    <?php 
  include_once "includes_admin/dbh.inc.php";
  include_once "includes_admin/edit_cats.inc.php";
    if (isset($_SESSION['userUid']))
                        {
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $record = mysqli_query($conn, "SELECT * FROM cat WHERE cat_id=$id");
    if (@count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $cat_name = $n['cat_name'];
      $post_date = $n['post_date'];
      $born_date = $n['born_date'];
      $castration = $n['castration'];
      $cat_user_id = $n['cat_user_id'];
      $height = $n['height'];
      $weight = $n['weight'];
      $cat_desc = $n['cat_desc'];
      $type = $n['type'];
      $gender = $n['gender'];
      $in_memoriam = $n['in_memoriam'];
    }
  }
?>
  <?php $results = mysqli_query($conn, "SELECT * FROM cat"); ?>
  <div class="users_content">
    <div class="card card_adminpanel">
    <div class="card-body">
      
    <table class="table bordered">
  <thead>
    <tr>
      <th>Name</th>
      <th>Post Date</th>
      <th>Born date</th>
      <th>Castration</th>
      <th>Cat User id</th>
      <th>Height</th>
      <th>Weight</th>
      <th>Description</th>
      <th>Type</th>
      <th>Gender</th>
      <th>1 =  in shelter 2 = dead</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['cat_name']; ?></td>
      <td><?php echo $row['post_date']; ?></td>
      <td><?php echo $row['born_date']; ?></td>
      <td><?php echo $row['castration']; ?></td>
      <td><?php echo $row['cat_user_id']; ?></td>
      <td><?php echo $row['height']; ?></td>
      <td><?php echo $row['weight']; ?></td>
      <td><?php echo $row['cat_desc']; ?></td>
      <td><?php echo $row['type']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['in_memoriam']; ?></td>
      <?php 
      echo '<td>
        <a href="edit_cats.php?edit='. $row['cat_id']. '" class="btn btn-info" >Edit</a>
      </td>
      <td>
        <a href="edit_cats.php?del='.$row['cat_id'].'" class="btn btn-danger">Delete</a>
      </td>';
      ?>
      </tr>
  <?php } ?>
</table>
</div>
</div>
  </div>
  
    <div class="inputform">
      <form method="post" action="includes_admin/edit_cats.inc.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group form-group">
          <label class="col">Cat Name: </label>
          <input class="form-control " type="text" name="cat_name" value="<?php echo $cat_name; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">post_date: </label>
          <input class="form-control " type="text" name="post_date" value="<?php echo $post_date; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">born_date: </label>
          <input class="form-control " type="text" name="born_date" value="<?php echo $born_date; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">castration: </label>
          <input class="form-control " type="text" name="castration" value="<?php echo $castration; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">cat_user_id: </label>
          <input class="form-control " type="text" name="cat_user_id" value="<?php echo $cat_user_id; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">height: </label>
          <input class="form-control " type="text" name="height" value="<?php echo $height; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">weight: </label>
          <input class="form-control " type="text" name="weight" value="<?php echo $weight; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">cat_desc: </label>
          <input class="form-control " type="text" name="cat_desc" value="<?php echo $cat_desc; ?>">
        </div>
        <div class="input-group form-group">
          <label class="col">type: </label>
          <input class="form-control " type="text" name="type" value="<?php echo $type; ?>">
        </div>
         <div class="input-group form-group">
          <label class="col">gender: </label>
          <input class="form-control " type="text" name="gender" value="<?php echo $gender; ?>">
        </div>
         <div class="input-group form-group">
          <label class="col">in_memoriam: </label>
           <input type="radio" name="in_memoriam" value="1" <?php  if ($in_memoriam == 1){?>checked <?php } ?>> In Shelter  <br>
           <input type="radio" name="in_memoriam" value="2" <?php  if ($in_memoriam == 2){?>checked <?php } ?>> Dead<br>
        </div>
        <button class="btn btn-center" type="submit" name="update">update</button>
      </form>
    </div>
<?php
  if (isset($_SESSION['message']))
  {
  display_message($_SESSION['message']);
  }
   ?>
  
  
  </div>
</body>
</html>
<?php } ?>