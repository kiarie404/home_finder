<?php

   /*************************************************************************/
    // // to handle the situation where the user did not change some items... we restrict ourselves to just changing...
    // the values of variables that have been posted... like this :
      function absorb_posted_input_only(&$filters_table)
      {
        foreach ($_POST as $key => $value) {
          if ($_POST[$key] != "") {    $filters_table[$key] =   $_POST[$key];   }
        }
      }

      /*******************************************************************/
      // this function returns true if the user has never set theiir filters before.
        function check_if_its_the_first_time($filters_table) : bool
        {
          if ($filters_table['filter_description'] == "DEFAULT") { return true; }
          else { return false; }
        }

      /**********************************************************************/
        function inject_first_time_settings_to_database($conn, &$filters_table)
        {
          $filters_table['filter_description'] = "CUSTOM";  // since now user will stop usinig DEFAULT.
          // building custom variables because working with arrays in the sql query is buggy.
          $filter_description    = $filters_table['filter_description'];
          $starting_price   = $filters_table['starting_price'];
          $ending_price   = $filters_table['ending_price'];
          $least_bedrooms_number   = $filters_table['least_bedrooms_number'];
          $highest_bedrooms_number   = $filters_table['highest_bedrooms_number'];
          $county   = $filters_table['county'];
          $estate   = $filters_table['estate'];
          $sql_stmt = "INSERT INTO filters
                       (filter_description, starting_price, ending_price, least_bedrooms_number, highest_bedrooms_number, county, estate)
                       VALUES('$filter_description', '$starting_price', '$ending_price', '$least_bedrooms_number', '$highest_bedrooms_number', '$county', '$estate')
                          "; // eof sql stmt.
            // executing sql.
                $result = $conn->query($sql_stmt);
                $filters_table["filter_id"] = mysqli_insert_id($conn);
                $admin_filters_table["filter_id"] = $filters_table["filter_id"];
                $admin_filters_table["admin_id"] = $_SESSION['user_id'];

            // building custom variables because working with arrrays is buggy. php meeeh.

                $admin_id =  $admin_filters_table["admin_id"] ;
                $filter_id = $admin_filters_table["filter_id"]  ;
          $sql_stmt = "INSERT INTO admin_filters_relation
                       (admin_id, filter_id)
                       VALUES('$admin_id', '$filter_id')";
            // executing sql.
                $result = $conn->query($sql_stmt);

            // changing necessary data.
        }

        //**************************************************************************************//
         // fucntion checks if the user has changed the previous settings.
          function check_if_the_user_has_changed_the_settings() : bool { // returns true if user has chaged anything.
            // if the posted data is empty... well ofcourse we will not include enumeration entries and the submit button...
            // because the automatically post their defaults ... hence... the following code.
              $cumulative_bool = false;

             foreach ($_POST as $key => $value) {
               if ($key == "submit"){ continue; }
               elseif ($_POST[$key] != "") { // if smth has been posted...
                 $cumulative_bool = true;
                 break;
               }
             }

             return $cumulative_bool;
          }

          /***************************************************************************************/
            function print_posted_data(){
              echo "/------ posted data ------/<br>";
              foreach ($_POST as $key => $value) {
                echo $key . " : " . $_POST[$key] . "<br>";
              }
            }

          /**********************************************************************************************/
            function print_data_in_filters_table($filters_table){
              echo "/------ filters table ----------/";
              foreach ($filters_table as $key => $value) {
                echo $key . " : " . $_POST[$key] . "<br>";
              }
            }

          /**************************** **************************************************************/
            function print_injected_data($filters_table){
              echo "/------ injected data ----------/";
              foreach ($filters_table as $key => $value) {
                echo $key . " : " . $_POST[$key] . "<br>";
              }
            }

          /**********************************************************************************************/
            function print_data_in_admin_filters_table($admin_filters_table){
              echo "/------ data in admin_filters_table ----------/";
              foreach ($admin_filters_table as $key => $value) {
                echo $key . " : " . $_POST[$key] . "<br>";
              }
            }


          /******************************************************************************************/
            function inject_new_settings_for_accustomed_user($conn, $filters_table){

              // building temporary variables because sql stmt is buggy in accepting array values...
              $filter_id = $filters_table['filter_id'];
              $filter_description = $filters_table['filter_description'];
              $starting_price = $filters_table['starting_price'];
              $ending_price = $filters_table['ending_price'];
              $least_bedrooms_number = $filters_table['least_bedrooms_number'];
              $highest_bedrooms_number = $filters_table['highest_bedrooms_number'];
              $county = $filters_table['county'];
              $estate = $filters_table['estate'];

              // print_data_in_filters_table($filters_table);

              $sql_stmt = "UPDATE filters
                           SET filter_description = '$filter_description', starting_price = '$starting_price', ending_price = '$ending_price',
                               least_bedrooms_number = '$least_bedrooms_number', highest_bedrooms_number = '$highest_bedrooms_number',
                               county = '$county', estate = '$estate'
                           WHERE filter_id = '$filter_id'";
                // executing sql.
                    $result = $conn->query($sql_stmt);
                    echo mysqli_error($conn);
            } // eof inject_new_settings_for_accustomed_user function.
