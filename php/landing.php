<?php include("includes/navbar.inc.php"); ?>

<link rel="stylesheet" type="text/css" href="../css/landing.css">
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
          <div class="col-5 offset-1">
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
          <div class="col-5">
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
<section class="part2">
     <div class="container">
       <div class="row">
        <div class="col-10 offset-1">
          <h4>Random dog & cat</h4>
        </div>
        <div class="col-10 offset-1 ">
          <div class="row justify-content-between">
             <div class="col-lg-3 col-md-6 mb-4 smallbox">
               <img class="smallpic" src="../img/adorable-animal-breed-1189673.jpg" alt="">
               <div class="top-left"><span class="imgtext">Bogyó</span></div>
               <div class="bottomtext">
                 <p>bla bla bla</p>
               </div>
             </div>
             <div class="col-lg-3 col-md-6 mb-4 smallbox">
               <img class="smallpic" src="../img/animal-cat-cat-face-951336.jpg" alt="">
               <div class="top-left"><span class="imgtext">Bogyó</span></div>
               <div class="bottomtext">
                 <p>bla bla bla</p>
               </div>
             </div>
             <div class="col-lg-3 col-md-6 mb-4 smallbox">
               <img class="smallpic" src="../img/adorable-animal-black-and-white-1404727.jpg" alt="">
               <div class="top-left"><span class="imgtext">Bogyó</span></div>
              <div class="bottomtext">
                 <p>bla bla bla</p>
               </div>
             </div>
             <div class="col-lg-3 col-md-6 mb-4 smallbox">
               <img class="smallpic" src="../img/sponsor-cat.PNG" alt="">
               <div class="top-left"><span class="imgtext">Bogyó</span></div>
                <div class="bottomtext">
                 <p>bla bla bla</p>
               </div>
             </div>
          </div>
        </div>
       </div>
     </div>
</section>   
<section class="part3">
     <div class="container">
       <div class="row">
        <div class="col-10 offset-1">
          <h4>Our Mission</h4>
        </div>
        <div class="col-10 offset-1 ">
          <div class="row justify-content-between">
            
             <div class="col-lg-6 col-md-12 mb-4 smallbox">
               <img class="smallpic" src="../img/photo-1489777404823-acccdc7d9994.jpg" alt="">
               <div class="top-left"><span class="imgtext landing_link">How to adopt?</span></div>
               <div class="bottomtext">
                 <p class="landing_link">bla bla bla</p>
               </div>
             </div>
             
             
             <div class="col-lg-6 col-md-12 mb-4 smallbox">
               <img class="smallpic" src="../img/dog-1369362.jpg" alt="">
               <div class="top-left"><span class="imgtext landing_link">Why support?</span></div>
               <div class="bottomtext">
                 <p class="landing_link">bla bla bla</p>
               </div>
             </div> 
            </div>
        </div>
       </div>
     </div>
</section>

<?php include("includes/footer.inc.php"); ?>