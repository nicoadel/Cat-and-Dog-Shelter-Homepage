<?php include ("includes_admin/navbar.inc.php");
    include ("includes_admin/dbh.inc.php"); ?>
  <?php $results = mysqli_query($conn, "SELECT * FROM adaption"); ?>
  <div class="users_content">
    <div class="card card_adminpanel">
    <div class="card-body">
      
    <table class="table bordered">
  <thead>
    <tr>
      <th>Name:</th>
      <th>Kind:</th>
      <th>Address:</th>
      <th>Email:</th>
      <th>Other pets:</th>
      <th>Kind of pets:</th>
      <th>Telephone Number 1:</th>
      <th>Telephone Number 2:</th>
      <th>Verify:</th>
      <th>Req Date:</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['kind']; ?></td>
      <td><?php echo $row['address']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['other_pets']; ?></td>
      <td><?php echo $row['kind_of_pets']; ?></td>
      <td><?php echo $row['telephone_number1']; ?></td>
      <td><?php echo $row['telephone_number2']; ?></td>
      <td><?php echo $row['verify']; ?></td>
      <td><?php echo $row['req_date']; ?></td>
      </tr>
  <?php } ?>
</table>
</div>
</div>
  </div>