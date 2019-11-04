<?php
  if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';

    $username = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];

    if(empty($username) || empty($email) || empty($password)){
      header("Location: ../signup.php?errorfields&uid=".$username."&mail=".$email);
      exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
      header("Location: ../signup.php?error=invalidmailuid");
      exit();
    }
    /*Send back username because email is wrong*/
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
      header("Location: ../signup.php?error=invalidmail&uid".$username);
      exit();
    } /*Send back email value because the username is wrong*/
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
      header("Location: ../signup.php?error=invaliduid&mail".$email);
      exit();
    }
    else {


      $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
      $stmt = mysqli_stmt_init($conn);
      if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../signup.php?error=sqlerror");
        exit();
      }
      else { /*else,send statement ($stmt) to database. If statement already exists in database, send error message */
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);
        $resultCheck = mysqli_stmt_num_rows($stmt);
        if($resultCheck > 0){
          header("Location: ../signup.php?error=usertaken&mail=".$email);
          exit();
        }
        else {
            $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers) VALUES (?, ?, ?)";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
              header("Location: ../signup.php?error=sqlerror");
              exit();
            }
            else{
              /*If password is written successfully, Encrypts the password by jumbling it with nonsensical letters, numbers, and symbols before inserting into database*/
              $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

              mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
              mysqli_stmt_execute($stmt);
              header("Location: ../signup.php?signup=success");
              exit();
            }
        }
      }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


  }//end of program
  else {
    /*If the user sent form w/o values, send them back to the sign up page to fill out form again*/
    header("Location: ../signup.php");
    exit();
  }
?>
