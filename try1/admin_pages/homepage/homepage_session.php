<?php
  session_start();

  /**** checking if uer really is an admin ... or he's a Fraud ha ha ha ha *****/
  $login_page = "/try1/shared_pages/login_page/login_page.php";
  
  if ($_SESSION['user_rank'] != "admin"){
    echo "You are not an admin ..... ";
    header('location: '.$login_page.'');
  }
