
<?php
/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

  /**** internal pages ****/
    $session_include = "./modify_property_session.php";
    $css_page = "./modify_property.css";
    $admin_homepage = "../homepage/homepage.php";
    $logout = "../logout/logout.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";
    $login_page = "/try1/shared_pages/login_page/login_page.php";

  /***** variables *******/
    $banner_msg = "Modify this home ...";

    #------------- pages ------------------------------#
     $rooted_uploads_folder  = $_SERVER['DOCUMENT_ROOT'] . "/try1/admin_pages/uploads/";
