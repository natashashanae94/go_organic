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
    <link rel="stylesheet" href="css/index.css">

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
            </ul></form>';

         } else {
            echo'
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
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
  </body>
</html>
