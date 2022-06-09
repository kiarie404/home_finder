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
       if ($result->num_rows > 0) {  $row = $result->fetch_assoc();              }
       else {  // extract default values.
         $sql_stmt = "SELECT *
                      FROM filters
                      WHERE filter_description = 'DEFAULT' ";

       // execution of sql .
         $result = $conn->query($sql_stmt);
         $row = $result->fetch_assoc();
       }

       return $row;
   } // eof get_database_data_and_confirm_result_number()


   /***********************************************************************/
   //function populates filters table with values from $row
     function populate_filters_table_with_values($row, &$filters_table){
       foreach ($filters_table as $key => $value) {
         $filters_table[$key] = $row[$key];
       }
     }
