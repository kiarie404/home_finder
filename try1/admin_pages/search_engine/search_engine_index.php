<?php
    session_start();
    include './local_config.php';
    // declaring functions.
      include $taking_in_input;
      include $filling_the_filters;
      include $sql_queries_without_keywords;
      include $feedback_determination;
      include $functions_with_keywords;


    // connect to dadabase
    // declare functions.
    // sanitize and validate posted inputs.
    // search for input in database.
    // extract the results and pack them for delivery/display.

    // connecting to the database....
      include $db_connector;


    // filling up the filters table....
      $row = get_database_data($conn);
      populate_filters_table_with_values($row, $filters_table);
      print_r($filters_table);

    // dealing with the search bar...
        $search_bar_is_empty = check_if_search_bar_is_empty();

      /******************* search bar is empty *****************************/
        if ($search_bar_is_empty){  // if search bar is empty
          $property_list = search_using_filters_only($conn, $filters_table);
          foreach ($property_list as $key => $value) {
            echo "<br> ". $key . " : " . $value . "<br>";
          }

          generate_feedback_message($feedback_message, $property_list);
        }
      /********************** search bar is not empty ***********************/
        if (!$search_bar_is_empty){ // if search bar is NOT empty

          $search_input = sanitize_search_input();
          $individual_keywords = break_search_input_into_individual_words($search_input);

          test_print_individual_keywords($individual_keywords);

          $property_list = extract_using_keywords($conn, $individual_keywords);
          echo determine_the_number_of_results($property_list);
          if (count($property_list) == 0) { // if no results came out from using search input...
            handle_unusable_search_input($conn, $filters_table, $property_list, $feedback_message);
          }

        } // end of dealing with a filled search bar.


      /********************* feedback handling **********************************/
        echo "<br>". $feedback_message;
        print_r($property_list);

      // ------------ dealing with the transfer to search _ display ************** //
        include $search_engine_session;
        header('location: '.$search_display.'');
