<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<!-- IMAGE -->
        <h5>Image</h5>
        <div class='input-group'><select class='custom-select' id='inputGroupSelect04' name='image'>
               <option value='#'>Choose a file</option>";
          <?php   foreach ($rowsImg as $row) { ?>
               <option value="<?php echo $row['image_id'] ?>"><?php echo $row['image_url'] ?></option>
           <?php }; ?>
            </select>
            <div class='input-group-append'>
                   <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#newimg'>
                         Add new
                    </button>
                     </div>
                </div>
                <div class='modal fade' id='newimg' tabindex='-1' role='dialog' aria-labelledby='exampleModalCenterTitle' aria-hidden='true'>
                  <div class='modal-dialog modal-dialog-centered' role='document'>
                    <div class='modal-content'>
                      <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLongTitle'>New Image</h5>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                          <span aria-hidden='true'>&times;</span>
                        </button>
                      </div>
                      <div class='modal-body'>
                        <form  method='post'>
                            <h5>Name</h5>
                            <input class='form-control' aria-label='Publisher name' type='text' name='newimages'>
                            <input class='btn btn-secondary btn-lg btn-block' type='submit' name='newurl' value='Add'>
                        </div>
                      <div class='modal-footer'>
                      </div>
                    </div>
                  </div>
                </div>
</body>
</html>
