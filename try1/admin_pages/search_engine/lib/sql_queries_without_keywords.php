<?php

  /*****************************************************************************/
    function search_using_filters_only ($conn, $filters_table) : array {

      $property_list = array() ; // this is the array that will be returned.

      // two situations... user is using default settings... or he is using custom settings...
      // situation 1 : He is using default settings...
      // then return everything... sigh...

      if ($filters_table['filter_description'] == "DEFAULT"){
        $property_list = extract_every_property($conn);  // returns an array of prperty ids.
      }
      elseif ($filters_table['filter_description'] == "CUSTOM") {  // if the user is using custom settings...
        $property_list = extract_specific_property($conn, $filters_table);  // returns an array of property ids.
      }

      return $property_list;
    }

    /******************************************************************************************/
      // this is used when user has not specified any filters...
      function extract_every_property($conn) : array{
        $sql_stmt = "SELECT property_id
                     FROM property      ";   // extract every property.

        // execute th sql stmt.
          $result = $conn->query($sql_stmt);
          $result_number = $result->num_rows;
        // declare array that would be returned
          $property_list = array(); // empty array.
        // inserting values into the empty array.
          if ($result_number > 0) {
            while ($row = $result->fetch_assoc()) {
              array_push($property_list, $row['property_id']);
            }
          }
        // returning either an empty array or a full array...
          return $property_list;
      }

    /******************************************************************************************/
      // this is used when the user has some CUSTOM filters.
        function extract_specific_property($conn, $filters_table) : array {
          // declaring array that will be returned...
            $property_list = array(); // empty array.

          // creating custom variables since working with arrays is impossible.
            $starting_price = $filters_table['starting_price'];
            $ending_price = $filters_table['ending_price'];
            $estate = $filters_table['estate'];
            $county = $filters_table['county'];
            $least_bedrooms_number = $filters_table['least_bedrooms_number'];
            $highest_bedrooms_number = $filters_table['highest_bedrooms_number'];

          // declaring sql stmt.
            $sql_stmt = "SELECT property_id
            FROM property
            INNER JOIN property_basic_info ON property.property_basic_info = property_basic_info.basic_info_id
            INNER JOIN property_economic_info ON property.property_economic_info = property_economic_info.economic_info_id
            INNER JOIN property_interior_info ON property.property_interior_info = property_interior_info.interior_info_id
            WHERE
                  (property_basic_info.county LIKE '%$county%' OR property_basic_info.estate LIKE '%$estate%' ) AND
                  (
                   (property_economic_info.property_price BETWEEN '$starting_price' AND '$ending_price') OR
                   (property_interior_info.bedrooms_number BETWEEN '$least_bedrooms_number' AND '$highest_bedrooms_number')
                  )
                  ";



            $result = $conn->query($sql_stmt);
            $result_number = $result->num_rows;
            echo mysqli_error($conn);

            if ($result_number > 0) {
              while ($row = $result->fetch_assoc()) {
                array_push($property_list, $row['property_id']);
              }
            }
            // echo mysqli_error($conn);

            return $property_list;
        }
