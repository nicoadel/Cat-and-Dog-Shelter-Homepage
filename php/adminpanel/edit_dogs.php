
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
  include_once "includes_admin/edit_dogs.inc.php";
    if (isset($_SESSION['userUid']))
                        {
  if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $record = mysqli_query($conn, "SELECT * FROM dog WHERE dog_id=$id");
    if (@count($record) == 1 ) {
      $n = mysqli_fetch_array($record);
      $dog_name = $n['dog_name'];
      $post_date = $n['post_date'];
      $born_date = $n['born_date'];
      $castration = $n['castration'];
      $dog_user_id = $n['dog_user_id'];
      $height = $n['height'];
      $weight = $n['weight'];
      $dog_desc = $n['dog_desc'];
      $type = $n['type'];
      $gender = $n['gender'];
      $in_memoriam = $n['in_memoriam'];
    }
  }
?>
  <?php $results = mysqli_query($conn, "SELECT * FROM dog"); ?>
  <div class="users_content">
    <div class="card card_adminpanel">
    <div class="card-body">
      
    <table class="table bordered">
  <thead>
    <tr>
      <th>Place Image</th>
      <th>Animal Place Image</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['dog_name']; ?></td>
      <td><?php echo $row['post_date']; ?></td>
      <td><?php echo $row['born_date']; ?></td>
      <td><?php echo $row['castration']; ?></td>
      <td><?php echo $row['dog_user_id']; ?></td>
      <td><?php echo $row['height']; ?></td>
      <td><?php echo $row['weight']; ?></td>
      <td><?php echo $row['dog_desc']; ?></td>
      <td><?php echo $row['type']; ?></td>
      <td><?php echo $row['gender']; ?></td>
      <td><?php echo $row['in_memoriam']; ?></td>
      <?php 
      echo '<td>
        <a href="edit_dogs.php?edit='. $row['dog_id']. '" class="btn btn-info" >Edit</a>
      </td>
      <td>
        <a href="edit_dogs.php?del='.$row['dog_id'].'" class="btn btn-danger">Delete</a>
      </td>';
      ?>
      </tr>
  <?php } ?>
</table>
</div>
</div>
  </div>
  
    <div class="inputform">
      <form method="post" action="includes_admin/edit_dogs.inc.php" >
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <div class="input-group form-group">
          <label class="col">dog Name: </label>
          <input class="form-control " type="text" name="dog_name" value="<?php echo $dog_name; ?>">
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
          <label class="col">dog_user_id: </label>
          <input class="form-control " type="text" name="dog_user_id" value="<?php echo $dog_user_id; ?>">
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
          <label class="col">dog_desc: </label>
          <input class="form-control " type="text" name="dog_desc" value="<?php echo $dog_desc; ?>">
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