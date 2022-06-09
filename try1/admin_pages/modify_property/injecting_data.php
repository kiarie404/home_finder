<?php


//assigning variables ...on economic info to our variables

 $sql_stmt = "UPDATE property_economic_info
              SET price = '$price', listing_type = '$listing_type'
              WHERE sellers_id = '$sellers_id' ";

$result = $conn->query($sql_stmt);

//assigning variables ... on basic info to our variables

$sql_stmt = "UPDATE property_basic_info
             SET property_description = '$description', property_type = '$property_type',
                 county = '$county', estate = '$estate',
                 year_built_start = '$year_built_start', year_built_end = '$year_built_end'
             WHERE basic_info_id = '$basic_info_id' ";

$result = $conn->query($sql_stmt);

//assigning variables ... on interior info to our variables

$sql_stmt = "UPDATE property_interior_info
             SET rooms_number = '$rooms_number', bedrooms_number = '$bedrooms_number',
                 bathrooms_number = '$bathrooms_number', air_conditioning = '$air_conditioning',
                 water_system = '$water_system'
             WHERE interior_info_id = '$interior_info_id' ";

$result = $conn->query($sql_stmt);


//assigning variables ... on exterior info to our variables

$sql_stmt = "UPDATE property_exterior_info
             SET roof_type = '$roof_type', fence_type = '$fence_type',
                 pools_number = '$pools_number', garages_number = '$garages_number'
             WHERE exterior_info_id = '$exterior_info_id' ";

$result = $conn->query($sql_stmt);

// injecting data about the seller.
  $sql_stmt = "UPDATE seller_details
               SET sellers_name = '$sellers_name', sellers_email = '$sellers_email',
                   sellers_tel = '$sellers_tel'
               WHERE sellers_id = '$sellers_id' ";

  $result = $conn->query($sql_stmt);

// innecting media....

  foreach ($extracted_pic_ids as $key => $value) {
    $pic_id = $extracted_pic_ids[$key];
    $pic_path = $pics[$key];

    $sql_stmt = "UPDATE pics
                 SET pic_path = '$pic_path'
                 WHERE pic_id = '$pic_id' ";

    $result = $conn->query($sql_stmt);
  }

// now getting the images ids.
  $sql_stmt = "SELECT *
               FROM property_pic_relation
               WHERE property_id = '$property_id'";

  $result = $conn->query($sql_stmt);
  $result_count = $result->num_rows;
  while ($row = $result->fetch_assoc()) {
    array_push($extracted_pic_ids, $row['pic_id']);
  }
