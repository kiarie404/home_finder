<?php

/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';

  /**** internal pages ******/
    $css_page = "./login_page.css";
    $login_page_include_file = "./login_page.inc.php";
  /**** external pages ******/
    $icons    = "/try1/configuration file/icons/css/all.css";
    $general_homepage = "/try1/shared_pages/general_homepage/general_homepage_index.php";
    $signup_page = "/try1/unregistered_user_pages/signup_page/signup_page.php";
    $admin_homepage = "/try1/admin_pages/homepage/homepage.php";
    $registered_buyer_homepage = "/try1/registered_buyer_pages/homepage/homepage.php";
    $unregistered_user_homepage = "/try1/unregistered_user_pages/homepage/homepage.php";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";
