<?php

  //---------------------------------------------------------------------------- //
    // Function returns the string that describes the file type eg mp4, mp3, jpeg.
      function get_file_extension_type ($file) : string {
        $file_name = $file['name'];
        $individual_words = explode('.', $file_name);
        $file_extension = strtolower( end( $individual_words ) );
        return $file_extension ;
      }

  // -------------------------------------------------------------------------- //
    // function returns true if the file is of an allowed type.
      function check_validity_of_file_type ($file) : bool {
        $file_extension = get_file_extension_type($file);
        $allowed_file_types = array ('jpg', 'jpeg', 'jfif', 'png', 'gif', 'pdf', 'webp');

        if (in_array($file_extension, $allowed_file_types)) { return true;  }
        else { return false;  }
      }

  // -------------------------------------------------------------------------  //
    // function returns a new name for the file...
      function generate_new_file_name($file) : string {
        $file_extension = get_file_extension_type($file);
        $file_new_name = uniqid() . "." . $file_extension;
        return $file_new_name ;
      }



  // ------------------------------------------------------------------------ //
    // infects a file to the database
      function inject_file_to_database ($conn, $pic_path, $pic_id)  {

        // sql stmt declaration.
          $sql_stmt = "UPDATE pics
                       SET pic_path = '$pic_path'
                       WHERE pic_id = '$pic_id'  ";

        // execute sql stmt.
          $result = $conn->query($sql_stmt);
      }

    // ------------------------------------------------------------------------ //
      // extracts image from database and stores the img ids to an array.
        function extract_images ($conn, $property_id) : array {

          // array that will be returned.
            $array_of_images = array();

          // sql stmt declaration.
            $sql_stmt = "SELECT pic_id
                         FROM property_pic_relation
                         WHERE property_id = '$property_id'  ";

          // execute sql stmt.
            $result = $conn->query($sql_stmt);
            $result_num = $result->num_rows;

            if ($result_num > 0) {
              while ($row = $result->fetch_assoc()) {
                array_push($array_of_images, $row['pic_id']);
              }
            }

            return $array_of_images;

        } // eof extract_images function.
