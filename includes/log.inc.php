<?php
  if(isset($_POST['login-submit'])){
    require "dbh.inc.php";

    $mailuid = $_POST['mailuid'];
    $password = $_POST['logInPwd'];

    if(empty($mailuid)||empty($password)){
      header("Location: ../login.php?errorfields");
      exit();
    }
    else {
      $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
      $stmt = mysqli_stmt_init($conn);

      if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../login.php?error=sqlerror");
        exit();
      }
      else {
        mysqli_stmt_bind_param($stmt, "ss", $mailuid, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_results($stmt);
        if($row = mysqli_fetch_assoc()){
          $pwdCheck = password_verify($password, $row['pwdUsers']);
          if($pwdCheck == false){
            header("Location: ../login.php?error=wrongpwd");
            exit();
          }
          else if($pwdCheck == true){
            session_start();
            $_SESSION['userId'] $row['idUsers'];
            $_SESSION['userUid'] $row['idUsers'];

            header("Location: ../login.php?login=success");
            exit();
          }
          else {
            header("Location: ../login.php?error=wrongpwd");
            exit();
          }
        }
        else {
          header("Location: ../login.php?error=nouser");
          exit();
        }

      }
    }
    else {
    header("Location: ../login.php");
    exit();
  }
}
?>
