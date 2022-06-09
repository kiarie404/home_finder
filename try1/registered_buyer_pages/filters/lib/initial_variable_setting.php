<?php



    // this function returns an associated array from database enough to fill all our variables.
      function get_database_data($conn) : array{
        // sql stmt.
          $sql_stmt = "SELECT *
                       FROM buyer_filters_relation
                       INNER JOIN filters ON buyer_filters_relation.filter_id = filters.filter_id
                       WHERE buyer_id = '".$_SESSION['user_id']."' ";

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
      // function populates buyer_filters table with values from $row
        function populate_buyer_filters_table_with_values($row , &$buyer_filters_table){
          foreach ($buyer_filters_table as $key => $value) {
            $buyer_filters_table[$key] = $row[$key];
          }

        // //  test.
        //     echo "<br> this is when am populating the buyer filters table...<br>";
        //     foreach ($buyer_filters_table as $key => $value) {
        //       echo $key . " : " . $buyer_filters_table[$key] . "<br>";
        //     } // eof test.
        }

      /*************************************************************************/
      // test if data has been entered well.
        function check_what_values_pseudo_database_variables_have($filters_table, $buyer_filters_table){
          // dealing with filters table.
          echo "after initial variable setting <br>";
            echo "Filters Table" . "<br>";
            foreach ($filters_table as $key => $value) {
              echo $key . " : " . $value . "<br>";
            }
          // dealing with $buyer_filters_table
            echo "buyer_filters_table" . "<br>";
            foreach ($buyer_filters_table as $key => $value) {
              echo $key . " : " . $value . "<br>";
            }
        }
