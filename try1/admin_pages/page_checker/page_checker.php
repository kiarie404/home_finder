<?php

  // this code prevents illegal access to the administrator pages... it redirects a person to the login page
  // if the access is denied / invalid.

  // declaring the rooted login page.
    $login_page = "/try1/shared_pages/general_homepage/general_homepage_index.php";

    if ($_SESSION['user_rank'] != "admin") {
      header('location: '.$login_page.'');
    }
