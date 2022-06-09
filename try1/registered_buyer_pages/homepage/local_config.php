<?php

  /******* including overall config file *******/
    include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
    include $_SERVER['DOCUMENT_ROOT'] . $registered_buyer_page_checker;

  /****** pages ******/
    /**** internal pages ****/
      $css_page = "./homepage.css";
      $logout = "../logout/logout.php";
      $filters_page = "../filters/filters.php";
      $search_engine = "../search_engine/search_engine_index.php";
    /**** external pages *****/
      $icons    = "/try1/configuration file/icons/css/all.css";

  /***** variables *******/
  $banner_message = "Search for a home you'd love to live in...";

 ?>
