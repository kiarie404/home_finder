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
        $allowed_file_types = array ('jpg', 'jpeg', 'jfif', 'png', 'gif', 'pdf' , 'webp');

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

  // --------------------------------------------------------------------------//
    // populate pic values...
      function populate_pic_values(&$pic){
        $pic['pic_id'] = ""; // empty bcz this is automatically given by machine
        $pic['caption'] = $_POST['cation'];
      }


  // ------------------------------------------------------------------------ //
    // infects a file to the database
      function inject_file_to_database ($conn, $pic_path, $property_id)  {

        // sql stmt declaration.
          $sql_stmt = "INSERT INTO pics
                       ( pic_path )
                       VALUES ( '$pic_path' )  ";

        // execute sql stmt.
          $result = $conn->query($sql_stmt);
          //now to get the $pic_id  because it is a foreign key and will be used elsewhere
          $pic_id = mysqli_insert_id($conn);

          // sql stmt declaration.
            $sql_stmt = "INSERT INTO property_pic_relation
                         ( property_id, pic_id )
                         VALUES ( '$property_id', '$pic_id' )  ";

          // execute sql stmt.
            $result = $conn->query($sql_stmt);
            echo mysqli_error($conn);

      }

// ------------------- added verification functions ------------------------------------ //

    // ------------ check email format -------------------------------- //
      function check_email_format ($email,  &$emailErr) : bool {         //to check if the email has been written well

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        { $emailErr = "Invalid email formatt";
          return false; }

        else{ $emailErr = "";
              return true; }
      }
