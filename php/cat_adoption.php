  
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <style>
          img:hover {
  transform: scale(1.1);
  transition: 2s;
  border-radius: 0px 15px 0px 15px;
}
  </style>
<div id="hero" class="container">
  <?php
include "inclides_admin/bdh.inc.php";


            $sql = "
            select * from cat
            INNER JOIN  adaption on  cat.fk_adaption_id = adaption.adaption_id
            INNER JOIN image_cat on  cat.fk_cat_image = image_cat.image_cat_id
            INNER JOIN supporter on  cat.fk_supporter = supporter.supporter_id
            "
            ;
 
                $result = $conn->query($sql);
                $i=0;
                if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                

            $desc = $row["cat_name"];
            echo '
            <div class=col-lg-12col-md-6 my-4">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-success">CAT ID: '.$row["cat_user_id"].'
                        </strong>
                        <h3 class="mb-0 text-danger">
                        '.$row["cat_name"].'
                        </h3>
                    <a class="text-info" href="#" data-toggle="modal" data-target="#exampleModalCenter3'.$i.'">
                   more info
                    </a>
                     <a class="text-info" href="#" data-toggle="modal" data-target="#exampleModalCenter2'.$i.'">
                   adaption info
                    </a>
                    <a class="text-info" href="#" data-toggle="modal" data-target="#exampleModalCenter1'.$i.'">
                   Address And Contact
                    </a>

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter1'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">  Address And Contact</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
       
        <p><strong>Tel</strong>: '.$row["tel"].'</p>
        <p><strong>E_mail</strong>: '.$row["email"].'</p>
        <p><strong>City</strong>: '. $row["city"].'</p>
        <p><strong>Street</strong>: '.$row["street"].'</p>
        </div>
        <div class="modal-footer">
        
        </div>
        </div>
    </div>
    </div>

<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">adaption info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
       
        <p><strong>adaption Name</strong> : '.$row["adaption_name"].'</p>
        <p><strong>adaption Kind</strong> : '.$row["adaption_kind"].'</p>
        <p><strong>adaption address </strong>: '. $row["adaption_address"].'</p>
        <p><strong>adaption email </strong>: '.$row["adaption_email"].'</p>
        <p><strong>adaption replacement </strong>: '. $row["adaption_replacement"].'</p>
        <p><strong>adaption other pets </strong>: '.$row["adaption_other_pets"].'</p>
        <p><strong>adaption caption </strong>: '. $row["adaption_caption"].'</p>
        <p><strong>adaption kind_of_pets </strong>: '.$row["adaption_kind_of_pets"].'</p>
        <p><strong>telephone number1 </strong>: '.$row["telephone_number1"].'</p>
        <p><strong>telephone number2 </strong>: '. $row["telephone_number2"].'</p>

        </div>
        <div class="modal-footer">
        
        </div>
        </div>
    </div>
    </div>


<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter2'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">more info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
        </div>
        <div class="modal-footer">
        
        </div>
        </div>
    </div>
    </div>
<!-- Modal -->
    <div class="modal fade" id="exampleModalCenter3'.$i.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">cat info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
         <p><strong>Name</strong> :'.$row["cat_name"].'</p>
         <p><strong>Weight</strong> :'.$row["weight"].'</p>
         <p><strong>Height</strong> :'.$row["height"].'</p>
        </div>
        <div class="modal-footer">
        
        </div>
        </div>
    </div>
    </div>
    </div>
    <img class="card-img-right flex-auto d-none d-lg-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" src="'.$row["image_cat"].'" data-holder-rendered="true" style="width: 240px; height: 320px;">

    </div>
    </div>
    

   ';
   $i++;
    }

            } else {

                echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";

            }


            ?>
        </div>