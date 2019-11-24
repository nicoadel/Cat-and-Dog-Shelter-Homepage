<!-- 
$sql = "SELECT * FROM dog JOIN main_image_dog ON dog.dog_id = main_image_dog.fk_dog_id WHERE dog.dog_id = main_image_dog.fk_dog_id ORDER BY dog.dog_id DESC LIMIT 2";
$main_dog = mysqli_query($conn, $sql);
$result = $main_dog->fetch_all(MYSQLI_ASSOC);

$sql2 = "SELECT * FROM cat JOIN main_image_cat ON cat.cat_id = main_image_cat.fk_cat_id WHERE cat.cat_id = main_image_cat.fk_cat_id ORDER BY cat.cat_id DESC LIMIT 2";
$main_cat = mysqli_query($conn, $sql2);
$result2 = $main_cat->fetch_all(MYSQLI_ASSOC)  ;?> -->
<div class="break"></div>
<div class="upper_part h-300 justify-content-center align-items-center">
  <div class="conttainer">
    <span class="mytext1">Welcome at </span>
    <span class="mytext2"> Útulok Piešťany </span>
  </div>
</div>
<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="row">
      <div class="col-md-5 offset-md-1 carouselleft">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="../img/animal2.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/dog.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="../img/cat.jpg">
            </div>
            <a class="carousel-control-prev arrow" href="#carouselExampleFade" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next arrow" href="#carouselExampleFade" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-10 offset-md-1 offset-sm-1">
        <div class="righttext">
          <h1 class="pb-3">Útulok Piešťany</h1>
          <form id="donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
            <input type="hidden" name="cmd" value="_s-xclick">
            <input type="hidden" name="hosted_button_id" value="9NW8L34KBXKNG">
            <button class="btn btn-success mt-3 donate">donate</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</header>
<div class="break">

</div>
<div class="container mb-4">

  <div class="row text-center">
    <div class="col">
      <div class="counter">
        <i class="fas fa-user-alt fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="33452" data-speed="1500"></h2>
        <p class="count-text ">Visitors</p>
      </div>
    </div>
    <div class="col">
      <div class="counter">
        <i class="fas fa-gift fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="1560" data-speed="1500"></h2>
        <p class="count-text ">In December</p>
      </div>
    </div>
    <div class="col">
      <div class="counter">
        <i class="fas fa-dog fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="1940" data-speed="1500"></h2>
        <p class="count-text ">Saved Dogs</p>
      </div>
    </div>
    <div class="col">
      <div class="counter">
        <i class="fas fa-cat fa-2x"></i>
        <h2 class="timer count-title count-number" data-to="1570" data-speed="1500"></h2>
        <p class="count-text ">Saved Cats</p>
      </div>
    </div>
  </div>
</div>
<div class="break">

</div>
<section class="part2">
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        <h4 class="textt">Looking for a new home..</h4>
      </div>
      <div class="col-10 offset-1 ">
        <div class="row justify-content-between">
          <?php foreach ($params['animalArray'] as $animal) : ?>
            <div class="col-lg-3 col-md-6 mb-4 smallbox">
              <?php if($animal->getType() == 'cat') : ?>
                <img class="smallpic" src="https://placekitten.com/640/360" alt="">
              <?php else: ?>
                <img class="smallpic" src=" https://placedog.net/500" alt="">
              <?php endif; ?>              
              <div class="top-left"><span class="imgtext"><?= $animal->getName() ?></span></div>
              <div class="bottomtext">
                <p class="landing_link"><?= $animal->getGender() ?></p>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="part3">
  <div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        <h4 class="textt">Our Mission</h4>
      </div>
      <div class="col-10 offset-1 ">
        <div class="row justify-content-between">

          <div class="col-lg-6 col-md-12 mb-4 smallbox">
            <img class="smallpic" src="../img/photo-1489777404823-acccdc7d9994.jpg" alt="">
            <a class="nocolor" href="adoption.php">
              <div class="top-left"><span class="imgtext landing_link">How to adopt?</span></div>
            </a>
            <div class="bottomtext">
              <p class="landing_link">About adopting..</p>
            </div>
          </div>


          <div class="col-lg-6 col-md-12 mb-4 smallbox">
            <img class="smallpic" src="../img/dog-1369362.jpg" alt="">
            <a class="nocolor" href="support.php">
              <div class="top-left"><span class="imgtext landing_link">Why support?</span></div>
            </a>
            <div class="bottomtext">
              <p class="landing_link">More about support..</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="<?= $_SERVER['BASE_URI'] . "/js/counter.js" ?>"></script>