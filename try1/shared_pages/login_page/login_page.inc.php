<?php

/***** connecting to the database ******/
    include $db_connector;

/***** declaring & initialising global variables *****/
    $email = $pwd  = "";
    $emailErr = $pwdErr = ""; // this makes sure all prev data is cleared bug
    $user_name = "unknown";
    $user_id = "x";
    $user_rank = "unregistered_user";



/**** take input from the login form *******/

if ($_SERVER["REQUEST_METHOD"] == "POST") {                 //if smth has been posted or not - a safe way

    /******* take inputs *****/
    $email = $_POST['email'];
    $pwd   = $_POST['pwd'];
     // echo $email;
     // echo $pwd;
     // echo $pwdErr;
     // echo $emailErr;
     // echo $pwd;
    /**** function definitions *****************/
    include 'login_functions.php';

    /**** take input from the login form and sanitize *******/
    $email = trim($_POST['email']);
    $pwd = trim($_POST['pwd']);


    /****** validate data ***********************/
    $email_format_good = check_email_format ($email,  $emailErr);

    if($email_format_good) {
        $email_exists = check_email_existence($email , $emailErr,  $conn, $user_name, $user_id , $user_rank);

        if($email_exists)                                                       //if email exists then check password
          $password_correct = check_pwd_validity($email , $pwd,  $pwdErr, $conn ,  $user_rank);

        if ($email_format_good && $email_exists && $password_correct){
          include './login_page_session.php';

          print_r($_SESSION);
          echo "<br> rank : ". $user_rank;

          if ($user_rank === "admin"){
            header('location: '.$admin_homepage.' ');
          }
         if ($user_rank === "registered_buyer"){
           echo "i am a registered_buyer";
           header('location:'.$registered_buyer_homepage.'');
           echo "i am still a registered_buyer";
         }
           // if ($user_rank === "unregistered_user"){header('location: '.$general_homepage.'');}
        }
    }


   }
