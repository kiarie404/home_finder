<?php

/******* including overall config file *******/
  include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';
  include $_SERVER['DOCUMENT_ROOT'] . $admin_page_checker;

    /****** pages ******/
      /**** internal pages ****/
        /**** library files ****/
          $taking_in_input = "./lib/taking_in_input.php";
          $sql_queries_without_keywords = "./lib/sql_queries_without_keywords.php";
          $filling_the_filters = "./lib/filling_the_filters.php";
          $feedback_determination = "./lib/feedback_determination.php";
          $functions_with_keywords = "./lib/functions_with_keywords.php";
          $search_engine_session = "./search_engine_session.php";

      /**** external pages *****/
        $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";
        $search_display = "../search_display/list_results/list_results.php";


/******************************* variables *********************************************************/

//database extracted values for the filters.
  $filters_table = array(
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


  // admin_filters_table
    $admin_filters_table = array(
      "relation_id" => "",
      "admin_id" => "",
      "filter_id" => ""
    ); // all values are initially set to null/empty.

  //database extracted vdata
    $property_list = array();  // this will contain the property ids of the search results.
    $individual_keywords = array();

  // feedback message ******/
    $feedback_message = "";
