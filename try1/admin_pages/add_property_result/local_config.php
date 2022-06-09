<?php

/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

  /****** pages ******/
  /**** internal pages ****/
    $css_page = "./add_property_result.css";
    $admin_homepage = "../homepage/homepage.php";
    $add_property_result = "../add_property_result/add_property_result.php";
    $logout = "../logout/logout.php";
    $processing_page = "./processing.php";
    $add_property = "../add_property/add_property.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";
    $view_page = "#";

  /***** variables *******/
  $banner_msg = "Here is the home you added...";

  $pic_path = $pic_id = $pic_caption = "";
  $new_nodes = array();
  $html_string = "";
 ?>
