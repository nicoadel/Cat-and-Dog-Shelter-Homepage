 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Adminpanel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">
          <?php
  session_start();
  if (isset($_SESSION['userUid']))
                      {
 ?>
      <li class="nav-item dropdown">
        <a class="nav-link" href="admin_landing_page.php">Dashboard</a>
        <a class="nav-link" href="../landing.php">Main Page</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="upload_cat.php">Upload Cat</a>
        <a class="nav-link" href="edit_cats.php">Edit Cats</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="upload_dog.php">Upload Dog</a>
        <a class="nav-link" href="edit_dogs.php">Edit Dogs</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="upload_team.php">Upload Team</a>
        <a class="nav-link" href="edit_team.php">Edit Team</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="upload_sponsors.php">Upload Sponsors</a>
        <a class="nav-link" href="edit_sponsors.php">Edit Sponsors</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" href="upload_report.php">Upload Reports</a>
        <a class="nav-link" href="edit_report.php">Edit Reports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload_shelter.php">Upload Shelter</a>
        <a class="nav-link" href="edit_shelter.php">Edit Shelter</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="upload_users.php">Upload Users</a>
        <a class="nav-link" href="edit_users.php">Edit Users</a>
      </li>

      <?php }
      else{ ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
    <?php } ?>
    </ul>

  </div>
</nav>
