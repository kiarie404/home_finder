<?php
// define variables and set to empty values
$nameErr = $emailErr  =  $pwd_repeat_Err =  $pwdErr = $msg = "";
$name = $email = $pwd = $pwd_repeat =  "";
$hashed_pwd = "";
$error_count = 0; //this variable will store the number of errors

if ($_SERVER["REQUEST_METHOD"] == "POST") {                 //if smth has been posted or not - a safe way

    //take input
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $pwd_repeat = $_POST['pwd_repeat'];

    include 'db_connector.php';
    include 'function_declarations.php';                    //validating functions
    include 'signup_validation.php';

    if (($nameErr === "") && ($emailErr === "") &&  ($pwd_repeat_Err === ""))           //if no validation errors were found
    {
      include 'data_injection.php';
      include 'signup_page_session.php';

       header('location: '.$registered_buyer_homepage.'');
    }
}


?>
