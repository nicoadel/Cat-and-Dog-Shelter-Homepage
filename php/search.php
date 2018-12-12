<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_search.inc.php");
 ?>
<link rel="stylesheet" type="text/css" href="../css/search.css">
<div class="break">
    
</div>
<div class="container">
      <div class="jumbotron backg2 p-3 p-md-5 text-white rounded">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-weight-bold">Search for a specified pet?</h1>
        </div>
      </div>
<div class="row">
  <div class="col-12">
    <form class="" action="search_result.php" method="GET">
        <div class="form-group">
          <label>Select type of pet</label>
          <select name="animal" class="form-control" id="exampleFormControlSelect1">
            <option value="dog">dog</option>
            <option value="cat">cat</option>
          </select>
        </div>
        <div class="form-group">
          <label >Select gender</label>
          <select name="gender" class="form-control" id="exampleFormControlSelect1">
            <option value="male">male</option>
            <option value="female">female</option>
          </select>
        </div>
        <div class="form-group mb-4">
          <label >Select Age</label>
          <select name="date" class="form-control" id="exampleFormControlSelect1">
            <option value="2018-01-01">< 1 </option>
            <option value="2017-01-01">< 2 </option>
            <option value="2016-01-01">< 3 </option>
            <option value="2015-01-01">< 4 </option>
            <option value="2014-01-01">< 5 </option>
            <option value="2013-01-01">< 6 </option>
            <option value="2012-01-01">< 7 </option>
            <option value="2011-01-01">< 8 </option>
            <option value="2010-01-01">< 9 </option>
            <option value="2009-01-01">< 10 </option>
            <option value="1999-01-01">< 20 </option>
          </select>
        </div>
        <input class="mt-4 btn btn-primary btn-block" type="submit" value="Search" name="search" />
      </form>
  </div>
</div>
<div class="break">
    
</div>
</div>
<?php
include("includes/footer.inc.php");
  ?>