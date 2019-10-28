
<?php
  require 'config.php';

  if(isset($_POST['action'])) {
    $sql="SELECT * FROM food WHERE meal!=''";

    /*MEAL*/
    if(isset($_POST['meal'])){
      $meal = implode("','", $_POST['meal']);
      $sql .= "AND meal IN ('".$meal."')";
    }

    /*DIET*/
    if(isset($_POST['diet'])){
      $diet = implode("','", $_POST['diet']);
      $sql .= "AND diet IN ('".$diet."')";
    }

    $result = $conn->query($sql);
    $output = '';

    if($result->num_rows>0) {
      while($row=$result->fetch_assoc()) {
        $output .=
        '<div class="col-lg-3 col-md-6 mb-4">
                <div class="card-deck">
                  <div class="card shadow d-flex align-items-stretch">
                    <img src="'.$row['product_image'].'" class="card-img-top">
                    <div class="card-img-overlay">
                    </div>
                    <div class="card-body" style="margin-top: 25px;">
                      <h4 class="card-title">'.$row['product_name'].'</h4>
                      <p>
                        $'.$row['price'].'<br>
                      </p>
                    </div>
                  </div>
                </div>
              </div>';
      }

    } else {
      $output = "<h3>No Products Found</h3>";
    }
    echo $output;
  }

?>
