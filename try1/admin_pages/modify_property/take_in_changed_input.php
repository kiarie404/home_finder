<?php


include './media_functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {                 //if smth has been posted or not - a safe way

    //take input
    if ($_POST['county'] != "") {    $county = $_POST['county'];   }
    if ($_POST['county'] != "") {    $estate = $_POST['estate'];   }
    if ($_POST['county'] != "") {    $property_type = $_POST['property_type'];   }
    if ($_POST['year_built_start'] != "") {    $year_built_start = $_POST['year_built_start'];   }
    if ($_POST['year_built_end'] != "") {    $year_built_end = $_POST['year_built_end'];   }
    if ($_POST['price'] != "") {    $price = $_POST['price'];   }
    if ($_POST['listing_type'] != "") {    $listing_type = $_POST['listing_type'];   }
    if ($_POST['rooms_number'] != "") {    $rooms_number = $_POST['rooms_number'];   }
    if ($_POST['bathrooms_number'] != "") {    $bathrooms_number = $_POST['bathrooms_number'];   }
    if ($_POST['bedrooms_number'] != "") {    $bedrooms_number = $_POST['bedrooms_number'];   }
    if ($_POST['roof_type'] != "") {    $roof_type = $_POST['roof_type'];   }
    if ($_POST['fence_type'] != "") {    $fence_type = $_POST['fence_type'];   }
    if ($_POST['pools_number'] != "") {    $pools_number = $_POST['pools_number'];   }
    if ($_POST['garages_number'] != "") {    $garages_number = $_POST['garages_number'];   }
    if ($_POST['sellers_name'] != "") {    $sellers_name = $_POST['sellers_name'];   }
    if ($_POST['sellers_email'] != "") {    $sellers_email = $_POST['sellers_email'];   }
    if ($_POST['sellers_tel'] != "") {    $sellers_tel = $_POST['sellers_tel'];   }
    if ($_POST['description'] != "") {    $description = $_POST['description'];   }


    if(isset($_POST['air_conditioning'])) $air_conditioning = 1; else $air_conditioning = 0;
    if(isset($_POST['water_system'])) $water_system = 1; else $water_system = 0;

    $property_market_availability = true ;  // by default the property is available when being posted.

    // media files.
    // echo "<br>This are the pictures ...<br>";

      // clear the pic_array.
        // this is to avoid the bug of double assignment.
      foreach ($_FILES as $key => $value) {
        if ($_FILES[$key] != "") {
          $pic1 = $_FILES[$key] ;

          if (check_validity_of_file_type($pic1)){

            #------------- pages ------------------------------#
              $destination_folder  = "/try1/admin_pages/uploads/";

              $file_name = generate_new_file_name($pic1);
              $file_destination = $destination_folder . $file_name ;
              $rooted_destination_folder = $_SERVER['DOCUMENT_ROOT'] . $file_destination ;
              move_uploaded_file($_FILES[$key]['tmp_name'], $rooted_destination_folder);

              if ($key == "pic1") { $pics[0] = $file_destination ; }
              if ($key == "pic2") { $pics[1] = $file_destination ; }
            }
        }
      }

    // echo "<br><br> this is the data taken in...<br><br>";
    // echo "<br>" . "Basic info id : " . $basic_info_id;
    // echo "<br>" . "economic info id : " . $economic_info_id;
    // echo "<br>" . "interior info id : " . $interior_info_id;
    // echo "<br>" . "exterior info id : " . $exterior_info_id;
    //
    // echo "<br>" . "description : " . $description;
    // echo "<br>" . "property_type : " . $property_type;
    // echo "<br>" . "county : " . $county;
    // echo "<br>" . "estate : " . $estate;
    //
    // echo "<br>" . "sellers_id : " . $sellers_id;
    // echo "<br>" . "price : " . $price;
    // echo "<br>" . "listing_type : " . $listing_type;
    //
    // echo "<br>" . "bedrooms_number : " . $bedrooms_number;
    // echo "<br>" . "bathrooms_number : " . $bathrooms_number;
    // echo "<br>" . "air_conditioning : " . $air_conditioning;
    // echo "<br>" . "water_system : " . $water_system;
    //
    // echo "<br>" . "roof_type : " . $roof_type;
    // echo "<br>" . "fence_type : " . $fence_type;
    // echo "<br>" . "pools_number : " . $pools_number;
    // echo "<br>" . "garages_number : " . $garages_number;
    //
    // echo "<br>" . "sellers_name : " . $sellers_name;
    // echo "<br>" . "sellers_email : " . $sellers_email;
    // echo "<br>" . "sellers_tel : " . $sellers_tel;
    //
    // echo "<br>  FILES  : ";
    // print_r($_FILES);
    // echo "<br>";
    // print_r($extracted_pic_ids);
    // echo "<br>";
    // print_r($pics);
    // echo "<br>";

}
