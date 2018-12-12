<?php include ("includes_admin/navbar.inc.php");
	  include ("includes_admin/dbh.inc.php"); ?>
  <?php $results = mysqli_query($conn, "SELECT * FROM supporter"); ?>
  <div class="users_content">
    <div class="card card_adminpanel">
    <div class="card-body">
      
    <table class="table bordered">
  <thead>
    <tr>
      <th>City:</th>
      <th>Street:</th>
      <th>Zip:</th>
      <th>Tel:</th>
      <th>Email:</th>
      <th>Name:</th>
      <th>Verify:</th>
      <th>Req Date:</th>
    </tr>
  </thead>
  
  <?php while ($row = mysqli_fetch_array($results)) { ?>
    <tr>
      <td><?php echo $row['city']; ?></td>
      <td><?php echo $row['street']; ?></td>
      <td><?php echo $row['zip']; ?></td>
      <td><?php echo $row['tel']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['verify']; ?></td>
      <td><?php echo $row['req_date']; ?></td>
      </tr>
  <?php } ?>
</table>
</div>
</div>
  </div>