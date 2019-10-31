<?php
  require 'config.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Go Organic Menu</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=n">
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://kit.fontawesome.com/1eadafd9bb.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <link rel="stylesheet" href="css/index.css">
  </head>
  <body>
    <?php
    /**
     * This program creates the filter checkboxes and
     * product boxes. The script code activates the functionality of the
     * checkboxes by connecting with 'action.php'.
     */
     ?>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="index.html">Go Organic<span style="color: #4a9134;">.</span></a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="menu.php">On The Menu<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="news.html">News</a>
            </li>
          </ul>
          <div class="flex-grow-1 d-flex">
             <form class="myForm form-inline flex-nowrap bg-light mx-0 mx-lg-auto rounded w-100">
              <input class="form-control mx-0 mx-lg-auto w-50" type="search" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome" aria-label="Search">
             </form>
          </div>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Log In<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sign Up</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <!--FILTER CHECKBOXES-->
        <div class="col-lg-3">
          <h2 class="text">Filters</h2>
          <hr>
          <h6 class="text">By Category</h6>
          <ul class="list-group">
            <?php
              $sql="SELECT DISTINCT meal FROM food ORDER BY meal";
              $result=$conn->query($sql);
              while($row=$result->fetch_assoc()) {
            ?>
              <li>
                <div class="form-check">
                  <label class="wrapper form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?=$row['meal'];?>" id="meal">
                    <?=$row['meal'];?>
                    <span class="checkmark"></span>
                  </label>
                </div>
              </li>
          <?php }?>
          </ul>

          <h6 class="text">By Diet Preference</h6>
          <ul class="list-group">
            <?php
              $sql="SELECT DISTINCT diet FROM food ORDER BY diet";
              $result=$conn->query($sql);
              while($row=$result->fetch_assoc()) {
            ?>
              <li>
                <div class="form-check">
                  <label class="wrapper form-check-label">
                    <input type="checkbox" class="form-check-input product_check" value="<?=$row['diet'];?>" id="diet">
                    <?=$row['diet']; ?>
                    <span class="checkmark"></span>
                  </label>
                </div>
              </li>
          <?php }?>
          </ul>
        </div>


    <!--PRODUCT BOXES-->
    <div class="col-lg-9">
      <h5 class="text text-center" id="textChange">All Items</h5>
      <div class="text-center">
        <img src="images/35.gif" id="loader" style="display:none;" alt="page loader icon">
      </div>
      <div class="row" id="result">
        <?php
          $sql = "SELECT * FROM food";
          $result=$conn->query($sql);
          while($row=$result->fetch_assoc()){
        ?>
        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card-deck">
            <div class="card shadow d-flex align-items-stretch">
              <img src="<?= $row['product_image'] ?>" class="card-img-top">
              <div class="card-img-overlay">
              </div>
              <div class="card-body" style="margin-top: 25px;">
                <h4 class="card-title"><?= $row['product_name']; ?></h4>
                <p>
                  $<?= $row['price']; ?><br>
                </p>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
      </div>
    </div>
  </div>
</div>
    <!--ACTTIVATE THE FILTER FUNCTION-->
    <script type="text/javascript">
      $(document).ready(function(){

        $(".product_check").click(function(){
          $(loader).show();

          var action = 'data';
          var meal = get_filter_text('meal');
          var diet = get_filter_text('diet');

          $.ajax({
            url: 'action.php',
            method: 'POST',
            data:{
              action:action,
              meal:meal,
              diet:diet
            },
            success:function(response){
              $('#result').html(response);
              $('#loader').hide();
              $('#textChange').text("Filtered Items");
            }
          });
        });

        function get_filter_text(text_id){
          var filterData = [];
          $('#'+text_id+':checked').each(function(){
            filterData.push($(this).val());
          });
          return filterData;
        }
      });
    </script>
  </body>
</html>
