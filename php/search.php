<?php 
include("includes/dbh.inc.php");
include("includes/navbar.inc.php");
include("includes/output_search.inc.php");
 ?>
<link rel="stylesheet" type="text/css" href="../css/search.css">
<div class="break">
    
</div>

<h1 style="text-align: center;">Search</h1>
<div class="container">
<div class="row">
	<div class="col-12">
		<form class="" action="search_result.php" method="GET">
      
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select animal</label>
          <select name="animal" class="form-control" id="exampleFormControlSelect1">
            <option value="dog">dog</option>
            <option value="cat">cat</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select gender</label>
          <select name="gender" class="form-control" id="exampleFormControlSelect1">
            <option value="male">male</option>
            <option value="female">female</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Select Age</label>
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
        <input class="btn btn-primary" type="submit" value="Search" name="search" />
      </form>
	</div>
</div>
</div>
<?php
include("includes/footer.inc.php");
  ?>