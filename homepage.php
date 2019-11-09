 <!DOCTYPE html>
 <html>
   <head>
     <title>Go Organic - Log In</title>
      <script src="js/script.js"></script>
      <link rel="stylesheet" href="css/index.css">
     <style>
     .header-nav {
       position: relative;
       background-color: #fff;
       height: 100vh;
       min-height: 25rem;
       width: 100%;
       overflow: hidden;
     }   
     .header-nav video {
       position: absolute;
       top: 50%;
       left: 50%;
       min-width: 100%;
       min-height: 100%;
       width: auto;
       height: auto;
       z-index: 0;
       -ms-transform: translateX(-50%) translateY(-50%);
       -moz-transform: translateX(-50%) translateY(-50%);
       -webkit-transform: translateX(-50%) translateY(-50%);
       transform: translateX(-50%) translateY(-50%);
     }
     .header-nav .container {
       position: relative;
       z-index: 2;
     }
     .header-nav .overlay {
       position: absolute;
       top: 4rem;
       left: 0;
       height: 100%;
       width: 100%;
       z-index: 1;
     }
     #title {
       border-right: .05em solid;
       animation: caret 1s steps(1) infinite;
     }
     @keyframes caret {
       50% {
         border-color: transparent;
       }
     }
     h2 {
       font-size: 2rem;
     }
     .intro {
       font-size: 20px;
       color: #918e8d;
       line-height: 155%;
     }

     button {
       border: none;
       background: none;
     }

     .hero-img {
       background: url("images/black-bean-close-up-cooked-1640774.jpg") no-repeat center center;
       background-size: cover;
       height: 450px;
     }

     .hero-login-title {
       position: absolute;
       top: 45%;
       left: 50%;
       -ms-transform: translateX(-50%) translateY(-50%);
       -moz-transform: translateX(-50%) translateY(-50%);
       -webkit-transform: translateX(-50%) translateY(-50%);
       transform: translateX(-50%) translateY(-50%);
     }

     .hero-login-title h1 {
       font-size:2.7rem;
       color: #000;
       text-align: center;
     }

     .cta-hero {
       border: 2px solid #000;
       position: absolute;
       top: 65%;
       left: 49%;
       -ms-transform: translateX(-50%) translateY(-50%);
       -moz-transform: translateX(-50%) translateY(-50%);
       -webkit-transform: translateX(-50%) translateY(-50%);
       transform: translateX(-50%) translateY(-50%);
       padding: 10px;
       font-family: 'Roboto', sans-serif;
     }

     .eeEasyStepTitle {
       font-family: 'Roboto', sans-serif;
     }

     .eeEasyStepLogo{
       font-family: utopia-std-headline, serif;
     }

     .hero-icon {
       width: 100px;
       height: 100px;
     }

     .eeEasyStepText {
       text-align: center;
       border: 1px solid #000;
       padding: 10px 5px;
     }

     .eeEasyStepText h3 {
       font-weight: bold;
       font-family: 'Roboto', sans-serif;
       font-size: 20px;
       margin: 2.5rem;
     }

     .eeEasyStepText p {
       line-height: 140%;
       font-size: 17px;
       margin: 2rem;
     }

     .hero-icon {
       display: block;
       margin: auto;
       position: relative;
       top: 25px;
     }

     .eeCTA {
       border: 2px solid #000;
       padding: 10px;
       font-family: 'Roboto', sans-serif;
     }

     .box-benefit-list-section {
       background-color: #f9f8f5;
       background-size: cover;
       height: 400px;
     }
     </style>
   </head>
   <body>
     <header class="header-nav">
   <?php
    if(isset($_SESSION['userId'])) {
      /*LOG OUT BUTTON*/
      echo '
      <div class="hero-img">
        <div class="hero-login-title text">
          <h1>Farm-fresh dishes at your doorstep.</h1>
        </div>
        <button class="cta-hero">SHOP NOW</button>
      </div>
     </header>
         <div class="hero-news-links"><div>
         </div>';
          } else {
          echo'
           <div class="overlay"></div>
           <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
             <source src="images/video.mp4" type="video/mp4">
           </video>
           <div class="container h-100">
             <div class="d-flex h-100 text-center align-items-center">
               <div class="w-100 text-white">
                 <h1 class="hero-title display-4">Food is <span id="title">Wholesome.</span></h1>
               </div>
             </div>
           </div>
         </header>
          <div class="container">
            <h2 class="eeEasyStepTitle text-center mt-5">Why <span class="eeEasyStepLogo">Go Organic</span>?</h2>
           <div class="row mt-5 mb-5">
           <div class="col-lg-4 eeEasyStep">
             <img src="images/iconfinder_noodles-bowl-food-ramen-soup_3558103.svg" alt="hamburger" class="hero-icon">
             <div class="eeEasyStepText">
               <h3>Who we are.</h3>
               <p>Bacon ipsum dolor amet pastrami ribeye brisket, ground round bacon turkey hamburger cupim short loin jowl leberkas meatloaf. </p>
             </div>
           </div>
           <div class="col-lg-4 eeEasyStep">
             <img src="images/iconfinder_fruit-car-street-sell-delivery_3558114.svg" alt="delivery truck" class="hero-icon">
             <div class="eeEasyStepText">
               <h3>We Deliver.</h3>
               <p>Bacon ipsum dolor amet pastrami ribeye brisket, ground round bacon turkey hamburger cupim short loin jowl leberkas meatloaf. </p>
             </div>
           </div>
            <div class="col-lg-4 eeEasyStep">
              <img src="images/iconfinder_fruit-organic-plant-orange-vitamin_3558113.svg" alt="peaches" class="hero-icon">
              <div class="eeEasyStepText">
                <h3>We\'re a lifestyle.</h3>
                <p>Bacon ipsum dolor amet pastrami ribeye brisket, ground round bacon turkey hamburger cupim short loin jowl leberkas meatloaf. </p>
              </div>
             </div>
            <button class="eeCTA mx-auto mt-5">SHOP NOW</button>
           </div>
          </div>';
        }
        ?>
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
