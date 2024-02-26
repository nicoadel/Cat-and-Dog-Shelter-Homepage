<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Útulok Piešťany</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="../js/agency.js"></script>
  <!-- Custom styles for this template -->
  <link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
  <link href="../css/header.css" rel="stylesheet">
  
  <?php if($params['pageName'] == 'landing'): ?>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/landing.css">
  <?php elseif($params['pageName'] == 'ourmission'): ?>
  <link rel="stylesheet" type="text/css" href="../css/ourmission.css">
  <?php endif; ?>

  




</head>
<body id="page-top">
  <!-- Navigation -->
  <!-- //TODO: Create routes and generate dynamic URL -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">  <img class="logo" src="../img/logo.png" alt="l" width="50">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger work" href="<?= $router->generate('main-landing')?>"> 
Útulok Piešťany</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              About us
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="<?= $router->generate('main-ourMission')?>">Our Mission</a>
              <a class="dropdown-item" href="team_page.php">Our Team</a>
              <a class="dropdown-item" href="sponsors.php">Sponsors</a>
              <a class="dropdown-item" href="gallary.php">Gallery</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle js-scroll-trigger" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dogs & Cats
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="dogs.php">Dogs</a>
              <a class="dropdown-item" href="cats.php">Cats</a>
              <a class="dropdown-item" href="search.php">Search</a>
              <a class="dropdown-item" href="adoption.php">Adopt</a>
              <a class="dropdown-item" href="support.php">Support</a>
              <a class="dropdown-item" href="adopted.php">in Happy Home</a>
              <a class="dropdown-item" href="in_memoriam.php">In Memoriam</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="reports.php">Reports</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="contact.php">Contact</a>
          </li>
          <li >
            <form id="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="9NW8L34KBXKNG">
              <input type="image" id="paypal_img" src="../img/PayPal.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>

