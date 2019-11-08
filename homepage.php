<?php
session_start();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <title>Go Organic - Log In</title>
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
     <script src="js/script.js"></script>
     <link rel="stylesheet" href="css/index.css">
     <style>
     header {
       position: relative;
       background-color: #fff;
       height: 100vh;
       min-height: 25rem;
       width: 100%;
       overflow: hidden;
     }
     header video {
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
     header .container {
       position: relative;
       z-index: 2;
     }
     header .overlay {
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
  <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="index.php">Go Organic<span style="color: #4a9134;">.</span></a>

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
         <?php
         if(isset($_SESSION['userId'])) {
           /*LOG OUT BUTTON*/
           echo '
             <form method="POST" action="includes/logout.inc.php"><ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item">
                 <button type="submit" class="nav-link" name="login-submit">LOG OUT</button>
               </li>
             </ul></form>
             </div>
           </nav>
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
             <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item">
                <a class="nav-link" href="login.php">Log In<span class="sr-only">(current)</span></a>
               </li>
               <li class="nav-item">
                <a class="nav-link" href="signup.php">Sign Up<span class="sr-only">(current)</span></a>
               </li>
             </ul>
             </div>
           </nav>
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
           <div class="col-sm-4 eeEasyStep">
             <img src="images/iconfinder_noodles-bowl-food-ramen-soup_3558103.svg" alt="hamburger" class="hero-icon">
             <div class="eeEasyStepText">
               <h3>Who we are.</h3>
               <p>Bacon ipsum dolor amet pastrami ribeye brisket, ground round bacon turkey hamburger cupim short loin jowl leberkas meatloaf. </p>
             </div>
           </div>
           <div class="col-sm-4 eeEasyStep">
             <img src="images/iconfinder_fruit-car-street-sell-delivery_3558114.svg" alt="delivery truck" class="hero-icon">
             <div class="eeEasyStepText">
               <h3>We Deliver.</h3>
               <p>Bacon ipsum dolor amet pastrami ribeye brisket, ground round bacon turkey hamburger cupim short loin jowl leberkas meatloaf. </p>
             </div>
           </div>
            <div class="col-sm-4 eeEasyStep">
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

        <?php
          require 'footer.php';
        ?>
   </body>
</html>
