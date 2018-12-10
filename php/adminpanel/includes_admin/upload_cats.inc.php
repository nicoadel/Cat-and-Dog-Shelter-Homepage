<?php 
if(isset($_POST['newurl'])){
            $name = $_POST['newimages'];
            if($name == ""){
                echo "<div class='alert alert-danger'><strong>Fill the fields!</strong></div>";
            }else{
                //$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
                $sql1 = "SELECT image_url FROM image WHERE image_url = '$name'";
                $s = mysqli_query($conn,$sql1);
                if(!$s){
                    echo "szar:".mysqli_error($conn);
                }
                $same = $s->fetch_all(MYSQLI_ASSOC);
                $samelong = count($same);

                if($samelong > 0){
                    echo "<div class='alert alert-danger'><strong>Item already exists!</strong></div>";
                }else {
                    $sql = "INSERT INTO `image` (`image_url`) VALUES ('$name')";
                    if(mysqli_query($conn,$sql)){
                        echo "<div class='alert alert-success'><strong>Success!!!!!</strong></div>";
                    } else {
                        echo "Error: ".mysqli_error($conn)."<br>";
                    }
                }
            }    
        }

?>