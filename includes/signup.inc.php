<?php

    if (isset($_POST['signup-submit'])) {

        require 'database.inc.php'; //sign up will require database

        //here are the variable and in the brakect are the name in html
        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $password = $_POST['pwd'];
        $passwordRepeat = $_POST['pwd-repeat'];

        //event hadler if user left any empty box to be filled
        if (empty($username) || empty($username) || empty($username)|| empty($username)) {
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);

        }
    }

    ?>

    