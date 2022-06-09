
<?php
/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

  /**** internal pages ****/
    $session_include = "./view_property_session.php";
    $css_page = "./view_property.css";
    $admin_homepage = "../homepage/homepage.php";
    $logout = "../logout/logout.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";

  /***** variables *******/
    $banner_msg = "You are viewing a specific home ...";
