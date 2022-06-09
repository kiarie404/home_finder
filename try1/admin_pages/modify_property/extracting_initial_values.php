
<?php

$property_id = $_SESSION['property_id'];   //acquitting the property_id from the session variables//
echo $property_id;

//now extracting basic info from property_basic_info table using $basic_info_id

$sql_stmt =   //query to get all the features of the property except sellers details //
 "SELECT *
  FROM property
  INNER JOIN property_basic_info ON property.property_basic_info = property_basic_info.basic_info_id
  INNER JOIN property_economic_info ON property.property_economic_info = property_economic_info.economic_info_id
  INNER JOIN property_interior_info ON property.property_interior_info = property_interior_info.interior_info_id
  INNER JOIN property_exterior_info ON property.property_exterior_info = property_exterior_info.exterior_info_id
  WHERE property.property_id = '".$property_id."'";

  // the inner joins were necessary because you wanted to just query the database once and get all info.
  // yes its dangerous to get all info at once ... but hey ... no crucial info was being extracted.
  // in fact we are extracting info meant to be seen by everybody.

$result =  mysqli_query($conn, $sql_stmt);
$row = mysqli_fetch_assoc($result);
$result_count = mysqli_num_rows($result);   // how many results come back



//assigning variables ... on property info to our variables
$basic_info_id = $row['property_basic_info'];
$economic_info_id = $row['property_economic_info'];
$interior_info_id = $row['property_interior_info'];
$exterior_info_id = $row['property_exterior_info'];
$property_market_availability = $row['property_market_availability'];

//assigning variables ...on economic info to our variables
$sellers_id = $row['sellers_id'];
$price = $row['property_price'];
$listing_type = $row['listing_type'];

//assigning variables ... on basic info to our variables
$description = $row['property_description'];
$property_type = $row['property_type'];
$county = $row['county'];
$estate = $row['estate'];
$year_built_start = $row['year_built_start'];
$year_built_end = $row['year_built_end'];

//assigning variables ... on interior info to our variables
$rooms_number = $row['rooms_number'];
$bedrooms_number = $row['bedrooms_number'];
$bathrooms_number = $row['bathrooms_number'];
$air_conditioning = $row['air_conditioning'];
$water_system = $row['water_system'];

if ($air_conditioning == 1) { $air_conditioning = "checked";  } else {  $air_conditioning = "unchecked";  }
if ($water_system == 1) { $water_system = "checked";  } else {  $water_system = "unchecked";  }

//assigning variables ... on exterior info to our variables
$roof_type = $row['roof_type'];
$fence_type = $row['fence_type'];
$pools_number = $row['pools_number'];
$garages_number = $row['garages_number'];


$sql_stmt =  //now getting info about the sellers details
 "SELECT *
  FROM property_economic_info
  INNER JOIN seller_details ON property_economic_info.sellers_id = seller_details.sellers_id
  WHERE property_economic_info.sellers_id = '".$sellers_id."' ";

$result =  mysqli_query($conn, $sql_stmt);
$row = mysqli_fetch_assoc($result);
$result_count = mysqli_num_rows($result);   // how many results come back

//assigning variables ... on selers info to our variables
$sellers_name = $row['sellers_name'];
$sellers_email = $row['sellers_email'];
$sellers_tel = $row['sellers_tel'];

print_r($row);

// now getting the images ids.
  $sql_stmt = "SELECT *
               FROM property_pic_relation
               WHERE property_id = '$property_id'";

  $result = $conn->query($sql_stmt);
  $result_count = $result->num_rows;
  while ($row = $result->fetch_assoc()) {
    array_push($extracted_pic_ids, $row['pic_id']);
  }

  // now to extract the actual image paths.
    foreach ($extracted_pic_ids as $key => $value) {
      $pic_id = $extracted_pic_ids[$key];
      $sql_stmt = "SELECT *
                   FROM pics
                   WHERE pic_id = '$pic_id'";

      $result = $conn->query($sql_stmt);
      $result_count = $result->num_rows;
      while ($row = $result->fetch_assoc()) {
        array_push($pics, $row['pic_path']);
      }
    }

    print_r($pics);

    // testing extracted values...
    /***** the commented code below is just for testing purposes ******/
    // echo "<br><br> this is the extracted data <br><br>";
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
    // echo "<br>";
    // print_r($extracted_pic_ids);
    // echo "<br>";
    // print_r($pics);
    // echo "<br>";

    //this php code below deals with the functionalities of the operations buttons//
    // include 'buttons.php';
    //this php code above deals with the functionalities of the operations buttons//
