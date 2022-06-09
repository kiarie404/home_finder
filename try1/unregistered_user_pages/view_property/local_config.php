
<?php
/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';

  /**** internal pages ****/
    $session_include = "./view_property_session.php";
    $css_page = "./view_property.css";
    $user_homepage = "/try1/unregistered_user_pages/homepage/homepage.php";
    $signup_page = "../signup_page/signup_page.php";
    $login_page = "/try1/shared_pages/login_page/login_page.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";

  /***** variables *******/
    $banner_msg = "You are viewing a specific home ...";
