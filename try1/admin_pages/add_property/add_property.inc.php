<?php
// connect to the database
include $db_connector;

include 'media_functions.php';
include 'media_execution.php';

if ($_SESSION['user_rank'] != "admin"){  // checking if user is really an admin... if not he is redirected to the login_page.
  echo "You are not an admin ..... ";
  header('location: '.$login_page.'');
}

$error_count = 0; //this variable will store the number of errors


if ($_SERVER["REQUEST_METHOD"] == "POST") {                 //if smth has been posted or not - a safe way

    //take input
    $county = $_POST['county'];
    $estate = $_POST['estate'];
    $property_type = $_POST['property_type'];
    $year_built_start = $_POST['year_built_start'];
    $year_built_end = $_POST['year_built_end'];
    $price = $_POST['price'];
    $listing_type = $_POST['listing_type'];
    $rooms_number = $_POST['rooms_number'];
    $bathrooms_number = $_POST['bathrooms_number'];
    $bedrooms_number = $_POST['bedrooms_number'];

    /***** media *****/
      // $pic1 = $_FILES['pic1'];
      // $pic2 = $_FILES['pic2'];


    if(isset($_POST['air_conditioning'])) $air_conditioning = 1; else $air_conditioning = 0;
    if(isset($_POST['water_system'])) $water_system = 1; else $water_system = 0;

    $roof_type = $_POST['roof_type'];
    $fence_type = $_POST['fence_type'];
    $pools_number = $_POST['pools_number'];
    $garages_number = $_POST['garages_number'];

    $sellers_name = $_POST['sellers_name'];
    $sellers_email = $_POST['sellers_email'];
    $sellers_tel = $_POST['sellers_tel'];
    $description = $_POST['description'];

    $property_market_availability = true ;  // by default the property is available when being posted.


    // connect to the database
    include $db_connector;


    /**** function definitions *****************/
      $email_format_is_good = check_email_format ($sellers_email,  $sellers_email_err);
      if ($email_format_is_good){
        include 'add_property_functions.php';
        include 'add_property_session.php';

        header('location: '.$add_property_result.'');
      }

}


?>
