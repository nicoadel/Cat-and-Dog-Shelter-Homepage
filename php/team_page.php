<?php
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_team.inc.php"); ?>
<link rel="stylesheet" type="text/css" href="../css/team_page.css">
<div class="break">
</div>
<section id="team" class="pb-5">
    <div class="container">
        <div class="jumbotron backg2 p-md-5 text-white rounded">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-weight-bold">Meet Our Team</h1>
          </div>
      </div>
      <div class="row">
        <?php foreach ($teamResult as $row) { ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p class="imag"><img class=" img-fluid" src="<?php echo $row['image'] ?>" alt="card image"></p>
                                    <h4 class="card-title"><?php echo $row["name"] ?></h4>
                                    <p class="card-text"><?php echo $row["position"] ?></p>
                                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title"><?php echo $row["name"] ?></h4>
                                    <p class="card-text"><?php echo $row["description"] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php   }; ?>
    </div>
</div>
</section>
<!-- Team -->
<?php include("includes/footer.inc.php"); ?>