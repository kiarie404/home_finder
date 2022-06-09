<?php
/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

  /****** pages ******/
    /**** internal pages ****/
      $css_page = "./add_property.css";
      $admin_homepage = "../homepage/homepage.php";
      $add_property_result = "../add_property_result/add_property_result.php";
      $logout = "../logout/logout.php";
    /**** external pages ****/
      $icons      = "/try1/configuration file/icons/css/all.css";
      $login_page = "/try1/shared_pages/login_page/login_page.php";
      $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";
  /***** variables *******/
  $banner_msg = "Add a new home...";

  /************ media *********************/

    $pic1_err = "";
    $pic1_caption = "";
    $pic2_err = "";
    $pic2_caption = "";

    # data.
  $pic = array (
    "pic_id" => "",
    "pic_path" => "",
    "pic_caption" => ""
  );

# array of pics

#------------- pages ------------------------------#
 $destination_folder  = $_SERVER['DOCUMENT_ROOT'] . "/try1/admin_pages/uploads/";

 ?>
