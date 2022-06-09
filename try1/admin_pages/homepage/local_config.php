<?php

  /******* including overall config file *******/
    include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
    include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

  /****** pages ******/
    /**** internal pages ****/
      $css_page = "./homepage.css";
      $add_property = "../add_property/add_property.php";
      $modify_property = "../modify_property/modify_property.php";
      $remove_property = "../remove_property/remove_property.php";
      $repost_property = "../repost_property/repost_property.php";
      $logout = "../logout/logout.php";
      $list_results_page = "../search_results/list_results/list_results.php";
      $filters_page = "../filters/filters.php";
      $search_engine = "../search_engine/search_engine_index.php";
    /**** external pages *****/
      $icons    = "/try1/configuration file/icons/css/all.css";

  /***** variables *******/
  $banner_message = "Search for a home you'd like to modify or remove...";

 ?>
