<?php

    if (isset($_POST['signup-submit'])) {

        require 'database.inc.php'; //sign up will require database

        //here are the variable and in the brakect are the name in html
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];

        //event hadler if user left any empty box to be filled
        if (empty($username) || empty($email) || empty($password)|| empty($passwordRepeat)) {
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
            exit();
        }
        else if (ifilter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invalidmailuid");
            exit();
        }
        else if (ifilter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../signup.php?error=invalidemail&uid=".$username);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            header("Location: ../signup.php?error=invaliduid&mail=".$email);
            exit();
        }
        else if ($password !== $passwordRepeat) {
            header("Location: ../signup.php?error=passwordcheckuid=".$username."&mail".$email);
            exit();
        }

        else {
            $sql = "SELECT StudentName FROM student_signup WHERE StudentName=? OR StudentEmail=?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_preapre($stmt, $sql)) {
              header("Location: ../signup.php?error=sqlerror");
              exit();
            }
            else {
              mysqli_stmt_bind_param($stmt, "s", $username);
              mysqli_stmt_execute($stmt);
              mysqli_stmt_store_result($stmt);
              $resultCheck - mysqli_stmt_num_rows($stmt);
              if ($resultCheck > 0) {
                header("Location: ../signup.php?error=studentIDtaken&mail".$email);
                exit();
              }
              else {

                $sql = "INSERT INTO student_signup (StudentName, StudentEmail, StudentPassword) VALUES (?, ?, ?)";
                $stmt = mysql_stmt_init($conn);
                if (!mysqli_stmt_preapre($stmt, $sql)) {
                  header("Location: ../signup.php?error=sqlerror");
                  exit();
                }
                else {
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

  }

  else {
    header("Location: ../signup.php");
    exit();
  }
