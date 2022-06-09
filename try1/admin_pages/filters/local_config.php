<?php
/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

  /**** internal pages ****/
    $css_page = "./filters.css";
    $homepage = "../homepage/homepage.php";
    $logout = "../logout/logout.php";

  /**** external pages ****/
    $icons      = "/try1/configuration file/icons/css/all.css";
    $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";

  // variables
    $banner_message = "Filters...";

  //default values for the filters.
    $filters_table_defaults_values = array(
      "filter_id" => "",
      "filter_description" => "DEFAULT",
      "starting_price" => 0,
      "ending_price"=> 999999999,
      "estate"=> "Any",
      "county" => "Any",
      "listing_type" => "Any",
      "least_bedrooms_number"=> 0,
      "highest_bedrooms_number"=> 100
    );

    //database extracted values for the filters.
      $filters_table_extracted_values = array(
        "filter_id" => "",
        "filter_description" => "",
        "starting_price" => "",
        "ending_price"=> "",
        "estate"=> "",
        "county" => "",
        "listing_type" => "",
        "least_bedrooms_number"=> "",
        "highest_bedrooms_number"=> ""
      );




  // database data
    // filters table
      $filters_table = array(
        "filter_id" => "",
        "filter_description" => "",
        "starting_price" => "",
        "ending_price"=> "",
        "estate" => "",
        "county" => "",
        "least_bedrooms_number"=> "",
        "highest_bedrooms_number"=> ""
      );  // all values are initially declared empty.

    // admin_filters_table
      $admin_filters_table = array(
        "relation_id" => "",
        "admin_id" => "",
        "filter_id" => ""
      ); // all values are initially set to null/empty.
