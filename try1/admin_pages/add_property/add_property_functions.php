<?php

//**** data validating functions *******************//

//those check boxes //



//******* data injection process *******************//


//**** injecting basic info **** //
$sql_stmt = "INSERT INTO property_basic_info
  (property_description, property_type, county, estate, year_built_start, year_built_end)
  VALUES ('$description', '$property_type' , '$county', '$estate', '$year_built_start', '$year_built_end' )";
$result = mysqli_query($conn, $sql_stmt);
echo mysqli_error($conn);

   //now to get the $property_id
   $basic_info_id = mysqli_insert_id($conn);
   // echo "basic_info_id : " . $basic_info_id . "<br>";

//injecting sellers info
$sql_stmt = "INSERT INTO seller_details
  (sellers_name, sellers_email, sellers_tel)
  VALUES ('$sellers_name', '$sellers_email' , '$sellers_tel')";
$result = mysqli_query($conn, $sql_stmt);
echo mysqli_error($conn);

   //now to get the $sellers_id  because it is a foreign key and will be used elsewhere
   $sellers_id = mysqli_insert_id($conn);
   // echo "sellers_id : " . $sellers_id . "<br>";

//**** injecting economic info *******//
$stmt = "INSERT INTO property_economic_info
         (sellers_id, property_price, listing_type)
         VALUES ('$sellers_id', '$price', '$listing_type')";
$result = mysqli_query($conn, $stmt);
echo mysqli_error($conn);

  //now to get the $economic_info_id  because it is a foreign key and will be used elsewhere
  $economic_info_id = mysqli_insert_id($conn);
  // echo "economic_info_id : " . $economic_info_id . "<br>";



//**** injecting interior info *******//
$stmt = "INSERT INTO property_interior_info
         (rooms_number, bathrooms_number, bedrooms_number, air_conditioning, water_system)
         VALUES ('$rooms_number', '$bathrooms_number', '$bedrooms_number' , '$air_conditioning', '$water_system')";
$result = mysqli_query($conn, $stmt);
echo mysqli_error($conn);

  //now to get the $interior_info_id  because it is a foreign key and will be used elsewhere
  $interior_info_id = mysqli_insert_id($conn);
  // echo "interior id : " . $interior_info_id . "<br>";

//**** injecting exterior info *******//
$stmt = "INSERT INTO property_exterior_info
         (roof_type, fence_type, pools_number, garages_number)
         VALUES ('$roof_type', '$fence_type', '$pools_number' , '$garages_number')";
$result = mysqli_query($conn, $stmt);
echo mysqli_error($conn);

  //now to get the $exterior_info_id  because it is a foreign key and will be used elsewhere
  $exterior_info_id = mysqli_insert_id($conn);
  // echo "exterior id : " . $exterior_info_id . "<br>";

//**** injecting property info table ***/
$stmt = "INSERT INTO property
         (property_basic_info, property_economic_info, property_interior_info, property_exterior_info, property_market_availability)
         VALUES ('$basic_info_id', '$economic_info_id', '$interior_info_id' , '$exterior_info_id', '$property_market_availability')";
$result = mysqli_query($conn, $stmt);
echo mysqli_error($conn);

  //now to get the $exterior_info_id  because it is a foreign key and will be used elsewhere
  $property_id = mysqli_insert_id($conn);
  // echo "property_id : " . $property_id . "<br>";

// dealing with media //

    foreach ($_FILES as $key => $value) {
      $pic1 = $_FILES[$key];
      if (check_validity_of_file_type($pic1)){

        #------------- pages ------------------------------#
          $destination_folder  = "/try1/admin_pages/uploads/";

          $file_name = generate_new_file_name($pic1);
          $file_destination = $destination_folder . $file_name ;
          $rooted_destination_folder = $_SERVER['DOCUMENT_ROOT'] . $file_destination ;
          move_uploaded_file($pic1['tmp_name'], $rooted_destination_folder);
          inject_file_to_database ($conn, $file_destination, $property_id);
        }

    }

//transfering to another page
// header ('location : ')
