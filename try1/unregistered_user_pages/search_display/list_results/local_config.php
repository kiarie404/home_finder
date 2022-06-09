<?php

/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';

  /****** pages ******/
  /**** internal pages ****/
    $css_page = "./list_results.css";
    $user_homepage = "/try1/unregistered_user_pages/homepage/homepage.php";
    $logout = "../../logout/logout.php";
    $processing_page = "./processing.php";
    $signup_page = "../../signup_page/signup_page.php";
    $login_page = "/try1/shared_pages/login_page/login_page.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";

  /***** variables *******/
  $banner_msg = $_SESSION['feedback_message'];

  $pic_path = $pic_id = $pic_caption = "";
  $new_nodes = array();
  $html_string = "";
 ?>
