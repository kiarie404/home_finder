<?php
  //constants
  $logo = "Strides";
  //global pages
  $db_connector = "/try1/configuration file/db_connector.php";

  // admin page checher
    $admin_page_checker = "/try1/admin_pages/page_checker/page_checker.php";
    $registered_buyer_page_checker = "/try1/registered_buyer_pages/page_checker/page_checker.php";

  //common database variables //

  // property variables
    // property info
      $property_id = "";
      $property_basic_info = "";
      $property_economic_info = "";
      $property_interior_info = "";
      $property_exterior_info = "";
      $property_market_availability = "";

    // property basic info
      $basic_info_id= "";
      $county= "";
      $estate= "";
      $description= "";
      $property_type= "";
      $year_built_start= "";
      $year_built_end= "";

    // property economic info
      $economic_info_id = "";
      $price = "";
      $listing_type = "";

    // property interior info.
      $interior_info_id = "";
      $rooms_number = "";
      $bedrooms_number = "";
      $bathrooms_number = "";
      $air_conditioning = "";
      $water_system = "";

    // property exterior info.
      $exterior_info_id = "";
      $roof_type = "";
      $fence_type = "";
      $pools_number = "";
      $garages_number = "";

    // sellers info
      $sellers_id = "";
      $sellers_name = "";
      $sellers_email = "";
      $sellers_tel = "";

    // media...
      $extracted_pic_ids = array();
      $pics = array();

    // filters
      // $filter_id = "";
      // $filter_description = "";
      // $starting_price = "";
      // $ending_price= "";
      // $least_bedrooms_number= "";
      // $highest_bedrooms_number= "";

  // error messages
    $estate_err = $description_err = $year_start_err  =  $year_end_err =  $price_err = $rooms_err = $bathrooms_err = $bedrooms_err = $roof_err = $fence_err = $pools_err =
    $garages_err = $sellers_name_err = $sellers_email_err = $sellers_tel_err = "";   //error feedback messages

  $electricity = "";



 ?>
