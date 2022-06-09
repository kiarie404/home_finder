<?php


  check_email_format($email,  $emailErr);
  check_email_existence ($email,  $emailErr, $conn );
  confirm_password ($pwd, $pwd_repeat, $pwd_repeat_Err);
  //encrypt password
  $hashed_pwd = password_hash($pwd, PASSWORD_DEFAULT);
 ?>
