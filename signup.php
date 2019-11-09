<?php
  require "header.php";
 ?>

 <!DOCTYPE html>
 <html>
  <head>
    <title>Go Organic - Sign Up</title>

    <style>
      body{
        background-color: #f9f8f5!important;
      }
      section {
        padding-top: 30px;
        padding-bottom: 30px;
        width: 100%;
        max-width: 400px;
      }

      .formSection{
        background-color: #fff;
        border: 1px solid #eceae6;
        padding: 30px 20px;
      }

      .formTitle{
        margin-bottom: 30px;
        text-align: center;
      }

      .formTitle h1{
        font-size:32px;
        line-height: 38px;
      }

      .logInForm {
        padding-left: 10px;
        padding-right: 10px;
      }

      .btn{
        font-family: 'Roboto', sans-serif;
        color: #fff;
        padding: 12px;
      }

      .pwdNote{
        color: #b9b9b9;
      }

      input{
      	font-family: 'Roboto', sans-serif;
      	font-size: 12px;
      }
    </style>
  </head>
  <body>
   <main>
       <div class="wrapper-main">
         <section class="section-default mx-auto">
           <div class="formSection shadow mt-5">
             <div class="formTitle text">
               <h1>Create an account</h1>
             </div>
             <form action="includes/signup.inc.php" method="POST">
               <div class="form-group">
                 <label for="exampleInputUName1" class=" text mb-3">username</label>
                 <input type="name" class="form-control" id="exampleInputName1" name="uid" aria-describedby="uNameHelp">
               </div>
               <div class="form-group">
                 <label for="exampleInputEmail1" class=" text mb-3">Email address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" name="mail" aria-describedby="emailHelp">
               </div>
               <div class="form-group">
                 <label for="exampleInputPassword1" class="text mb-3">Password*</label>
                 <input type="password" class="form-control" id="exampleInputPassword1" name="pwd" required>
                 <p class="pwdNote mt-3 mb-3">Password should be a minimum of at least 6 characters.</p>
               </div>
               <div class="button mb-4">
                 <label class="wrapper form-check-label logInCheck" for="exampleCheck1">
                   <input type="checkbox" class="font-weight-bold form-check-input" id="exampleCheck1">
                   Keep me signed in.
                   <span class="checkmark"></span>
                 </label>
               </div>
               <button type="submit" class="btn btn-success w-100" name="signup-submit">SIGN IN</button>
               <p class="sign-in-link mx-auto mt-4 align-items-center">I already have an <a href="login.php"><u>account.</u></a></p>
             </form>
           </div>
         </section>
       </div>
     </main>
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
