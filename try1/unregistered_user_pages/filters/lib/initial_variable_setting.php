<?php



    // this function returns an associated array from database enough to fill all our variables.
      function get_database_data($conn) : array{
        // sql stmt.
          $sql_stmt = "SELECT *
                       FROM unregistered_users_filters_relation
                       INNER JOIN filters ON unregistered_users_filters_relation.filter_id = filters.filter_id
                       WHERE user_id = '".$_SESSION['user_id']."' ";

        // execution of sql .
          $result = $conn->query($sql_stmt);

        // if some data is found store it in an array... else just return an empty array.
          if ($result->num_rows) {  $row = $result->fetch_assoc();              }
          else {  $row = array ();    }

          return $row;
      } // eof get_database_data_and_confirm_result_number()

      /***********************************************************************/
      // function populate_filters_table with default values
        function populate_filters_table_with_defaults($filters_table_defaults_values, &$filters_table){
          foreach ($filters_table as $key => $value) {
            $filters_table[$key] = $filters_table_defaults_values[$key];
          }
        } // eof populate_filters_table with default values

      /***********************************************************************/
      //function populates filters table with values from $row
        function populate_filters_table_with_values($row, &$filters_table){
          foreach ($filters_table as $key => $value) {
            $filters_table[$key] = $row[$key];
          }
        }

      /*************************************************************************/
      // function populates user_filters table with values from $row
        function populate_user_filters_table_with_values($row , &$user_filters_table){
          foreach ($user_filters_table as $key => $value) {
            $user_filters_table[$key] = $row[$key];
          }

        // //  test.
        //     echo "<br> this is when am populating the user filters table...<br>";
        //     foreach ($user_filters_table as $key => $value) {
        //       echo $key . " : " . $user_filters_table[$key] . "<br>";
        //     } // eof test.
        }

      /*************************************************************************/
      // test if data has been entered well.
        function check_what_values_pseudo_database_variables_have($filters_table, $user_filters_table){
          // dealing with filters table.
            echo "Filters Table" . "<br>";
            foreach ($filters_table as $key => $value) {
              echo $key . " : " . $value . "<br>";
            }
          // dealing with $user_filters_table
            echo "user_filters_table" . "<br>";
            foreach ($user_filters_table as $key => $value) {
              echo $key . " : " . $value . "<br>";
            }
        }
