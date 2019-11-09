<?php
  require 'config.php';
  require 'header.php';
?>
<!DOCTYPE html>
<html>
  <head>
      <title>Go Organic Menu</title>
    
  </head>
  <body>

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
            <div class="card d-flex align-items-stretch">
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
    <footer class="footer mt-5">
      <div class="container" id="footer-content">
        <div class="stay-connected">
          <div class="row">
            <div class="follow-us span3 col-lg-3">
              <h3 class="epsilon footer-title mb-2">Follow Us</h3>
              <ul class="socials text-center">
                <li><a href="www.facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="www.twitter.com"><i class="fab fa-twitter"></i></a></li>
                <li><a href="www.instagram.com"><i class="fab fa-instagram"></i></a></li>
                <li><a href="www.pinterest.com"><i class="fab fa-pinterest"></i></a></li>
              </ul>
            </div>
            <div class="newsletter span6 col-lg-6" style="display: block;">
             <div class="footer-newsletter-signup clearfix">
                <h3 class="epsilon footer-title mb-4">Discover What's Cookin'</h3>
                <div class="footer-newsletter-form-hldr">
                  <form class="recipe_newsletter_footer_form" method="POST">
                    <input class="subscribe-input mb-4" type="text" name="subscribe-email" placeholder="Email address">
                    <button class="subscribe-btn" value="submit">Go</button>
                  </form>
                </div>
                <p class="subscribe-text text-center mb-3">Sign  up for offers, recipes, news & more</p>
              </div>
            </div>
            <div class="blog-preview span3 col-lg-3">
              <h3 class="epsilon footer-title mb-3">From Our Newsletter</h3>
              <div class="head clearfix">
                <a class="blog-preview-img float-left" href="news.php">
                  <img class="noodles" src="images/noodles-with-meat-and-mint-on-top-2664216.jpg" alt="noodles">
                </a>
                <h4 class="blog-preview-text">The Go Organic Guide to Asian Noodles.</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </body>
</html>
