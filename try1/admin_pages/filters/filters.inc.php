<?php
    include './local_config.php';
    include './lib/initial_variable_setting.php';
    include './lib/handling_posted_data.php';


    // contact the database.
      include $db_connector;

    // getting database data.
      get_database_data($conn);
      $row = get_database_data($conn);  // now this array is either empty... or it contains filters info.

    // if row is empty... it means the user has never set their filters... and thus he uses the DEFAULT settings.
    // if row is not empty ... it means the user had previously set their filters.

    // if row is empty... then fill all our variables with default values.
      if (count($row) == 0) {
        populate_filters_table_with_defaults($filters_table_defaults_values, $filters_table);
      }

    // else if $row has data ... fill our variables accordingly
      elseif (count($row) > 0 ) {
        // test
          // echo "<br> i have results from the database and am triyng to populate local variables<br>"; // eof test.
        populate_filters_table_with_values($row, $filters_table);
        populate_admin_filters_table_with_values($row , $admin_filters_table);
        // test
        // echo "<br>this is when am setting initial values...<br>";
        // print_data_in_admin_filters_table($admin_filters_table);
      }

      // conducting test.
        // check_what_values_pseudo_database_variables_have($filters_table, $admin_filters_table);

      // now dealing with posted data / after user has pressed the submit button.
        if ($_SERVER['REQUEST_METHOD'] == "POST"){

          // taking in posted input only.
            absorb_posted_input_only($filters_table);
            // test.
              // print_data_in_filters_table($filters_table);

          // print posted data...
            // print_posted_data();

          // check if the user has ever set any filters setting before.
            // echo "<br> Status : " . check_if_its_the_first_time($filters_table);
            $its_the_users_first_time = check_if_its_the_first_time($filters_table);
            $the_user_has_changed_the_settings = check_if_the_user_has_changed_the_settings();

          // if the user has changed anything ... and is doing this for the first time.
           if ($its_the_users_first_time && $the_user_has_changed_the_settings)
           {
             inject_first_time_settings_to_database($conn, $filters_table);
              // print_injected_data($filters_table);
             }

          // if the user is doing this for the first time and he has changed nothing...
          if ($its_the_users_first_time && !$the_user_has_changed_the_settings)
        { /* echo "i have been summoned my guy"; */ }

          // if it is NOT the users first time and the user has changed some of the settings.
          // we just post the new data on his filter id only.
          if (!$its_the_users_first_time && $the_user_has_changed_the_settings){
            // test
            // echo "<br> this is not my first time...";
            // check_what_values_pseudo_database_variables_have($filters_table, $admin_filters_table);
            // eof test
            inject_new_settings_for_accustomed_user($conn, $filters_table);
            // print_injected_data($filters_table);
          }
        } // eof if POST METHOD.
