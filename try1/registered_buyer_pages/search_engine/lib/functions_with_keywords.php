<?php

 //--------------------------------------------------------------------------------//
  // -- fuction returns an array of property ids... based on the search inputs.
    function extract_using_keywords($conn, $individual_keywords) : array  {
      // declaring array that would be returned.
        $property_list =  array();

      // declaring front substr of the $sql_stmt
        $sql_stmt_pre_substr = "SELECT property_id
                                FROM property
                                INNER JOIN property_basic_info ON property.property_basic_info = property_basic_info.basic_info_id
                                WHERE ";

      // declaring post sobstr for the sql stmt.
        $sql_stmt_post_substr = "";
        foreach ($individual_keywords as $key ) {
          $sql_stmt_post_substr .= " (property_basic_info.county LIKE '%$key%') OR (property_basic_info.estate LIKE '%$key%') OR " ;
        }

      // i now truncate off the unnecessary part of the $sql_stmt_post_substr
        $sql_stmt_post_substr = substr($sql_stmt_post_substr, 0 , strlen($sql_stmt_post_substr) - 3);

      // now combining the two pre and post subtrings of the sql stmt.
        $sql_stmt = $sql_stmt_pre_substr . $sql_stmt_post_substr ;

      // querrying the database.
        $result = $conn->query($sql_stmt);
        $result_number = $result->num_rows;

      // filling up the property list array...
        if ($result_number > 0){
          while ($row = $result->fetch_assoc()) {
            array_push($property_list, $row['property_id']);
          }
        }

      // return the emty/full property list.
        return $property_list;

    } // -- eof extract_using_keywords function.


  // ----------------------------------------------------------------------------------------- //
    // function returns the number of elements in the results prperty list.
      function determine_the_number_of_results($property_list) : int {
        return count($property_list);
      }

  // ----------------------------------------------------------------------------------------- //
    // customise search results based on the number of results
      function handle_unusable_search_input ($conn, $filters_table, &$property_list, &$feedback_message){
        // determine the number of results first.
          $number_of_results = determine_the_number_of_results($property_list);

        // determining fate... with custom switch stmt.
          if ($number_of_results == 0 ){ // if no results were found.
            $feedback_message = "No search results were found based on the input you entered in the search bar ...<br>But here are results
            based on the search filters set...";

            $property_list = search_using_filters_only ($conn, $filters_table);
          }
      }
