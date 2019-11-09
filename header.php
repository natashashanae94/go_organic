<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/1eadafd9bb.js"></script>
  <style>
    button {
      border: none;
      background: none;
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
          <div class="searchbar flex-grow-1 d-flex">
             <form class="myForm form-inline flex-nowrap bg-light mx-0 mx-lg-auto rounded w-100">
              <input class="form-control mx-0 mx-lg-auto w-100" type="search" placeholder="&#xF002; Search" style="font-family:Arial, FontAwesome" aria-label="Search">
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
            </ul></form>';

         } else {
            echo'
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
               <a class="nav-link" href="login.php">Log In<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
               <a class="nav-link" href="signup.php">Sign Up<span class="sr-only">(current)</span></a>
              </li>
            </ul>';
          }
             ?>
          </ul>
        </div>
      </nav>
    </header>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
