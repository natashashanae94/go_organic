<?php
  require 'header.php';
 ?>
<!DOCTYPE html>
<html>
  <head>
      <title>Log In | Go Organic</title>
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
        body{
          background-color: #f9f8f5;
        }
        section {
          padding-top: 30px;
          padding-bottom: 30px;
          width: 100%;
          max-width: 400px;
          margin: 0 auto;
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

        .forgot-password-link{
          text-decoration: underline;
          color: #b9b9b9;
        }
      </style>
  </head>
  <body>

      <?php
        if(isset($_SESSION['userId'])){
          echo '<p class="login-status">You are logged in!</p>';
        } else {
          echo '<p class="login-status">You are logged in!</p>';
        }
      ?>
      <section>
        <div class="formSection">
          <div class="formTitle text">
            <h1>Log In</h1>
          </div>
          <div class="logInForm">
          <form method="POST">
            <div class="form-group">
              <label for="exampleInputUName1" class=" text mb-3">username</label>
              <input type="name" class="form-control" id="exampleInputName1" name="mailuid" aria-describedby="uNameHelp">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text mb-3">Password*</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="logInPwd" required>
            </div>
            <div class="button mb-4">
              <label class="wrapper form-check-label logInCheck" for="exampleCheck1">
                <input type="checkbox" class="font-weight-bold form-check-input" id="exampleCheck1">
                Keep me signed in.
                <span class="checkmark"></span>
                <a href="index.html" class="forgot-password-link float-right">Forgot Password?</a>
              </label>
            </div>
            <button type="submit" class="btn btn-success w-100">LOG IN</button>
            <p class="sign-in-link mx-auto mt-4 align-items-center">Don't have an account? <a href="signup.php"><u>Sign up</u></a></p>
          </form>
          </div>
        </div><!--logInFormSection-->
    </section>
  </body>
</html>
<?php
  require 'footer.php';
 ?>
