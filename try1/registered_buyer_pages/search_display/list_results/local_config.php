<?php

/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $registered_buyer_page_checker;

  /****** pages ******/
  /**** internal pages ****/
    $css_page = "./list_results.css";
    $buyer_homepage = "../../homepage/homepage.php";
    $logout = "../../logout/logout.php";
    $processing_page = "./processing.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";

  /***** variables *******/
  $banner_msg = $_SESSION['feedback_message'];

  $pic_path = $pic_id = $pic_caption = "";
  $new_nodes = array();
  $html_string = "";
 ?>
