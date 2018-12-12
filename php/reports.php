<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_reports.inc.php");
 ?>
<link rel="stylesheet" type="text/css" href="../css/reports.css">
<div class="break">
    
</div>
<div class="container">
<div class="jumbotron backg2 p-3 p-md-5 text-white rounded">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-weight-bold">Reports</h1>
          </div>
 </div>
<?php
$i=1;
 foreach($reportsResult as $row) {
    if($i%2==0){ ?>

<div class="row">
        <div class="card col-md-12 p-3 mb-4">
            <div class="row ">
                <div class="col-md-4">
                    <img class="w-100 imag" src="<?php echo $row['reports_image'] ?>">
                </div>
                <div class="col-md-8">
                    <div class="card-block">
                        <h6 class="card-title"><?php echo $row['name'] ?></h6>
                        <p class="card-text text-justify text str"><?php echo $row['reports_descriptions'] ?></p>
                        <form id="single" action='report.php' method='get' >
                        <button class="btn btn-info" type="submit" name='id' value="<?php echo $row['reports_id'] ?>">Read more..</button>  
          </form> 
                    </div>
                </div>
            </div>
        </div>
</div>
 <?php
}else{ ?>
    <div class="row">
        <div class="card col-md-12 p-3 mb-4">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="card-block">
                        <h6 class="card-title"><?php echo $row['name'] ?></h6>
                        <p class="card-text text-justify text str"><?php echo $row['reports_descriptions'] ?></p>
                        <form id="single" action='report.php' method='get' >
                        <button class="btn btn-info" type="submit" name='id' value="<?php echo $row['reports_id'] ?>">Read more..</button>  
          </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <img class="w-100 imag" src="<?php echo $row['reports_image'] ?>">
                </div>
            </div>
        </div>
    </div>
<?php  
}
$i++; }; 
?>
<script>
    var string = $('.str').text();
var str50 = string.substr(0,300) 
$('.str').html(str50+'...<br>');
$('.str').attr('data-text',string);

$('.readmore').click(function(e)
{
    e.preventDefault();
    $(this).parent().html($(this).parent().attr('data-text'))

})
</script>

</div>
<div class="break">
    
</div>
<?php
include("includes/footer.inc.php");
  ?>