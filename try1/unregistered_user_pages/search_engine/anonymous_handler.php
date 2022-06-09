<?php

  // starting the session.
  session_start();

  // declaring the variables.
    /******* including overall config file *******/
      include $_SERVER['DOCUMENT_ROOT'] . '/try1/configuration file/configuration_file.php';

      /**** external pages ****/
        $icons      = "/try1/configuration file/icons/css/all.css";
        $db_connector = $_SERVER['DOCUMENT_ROOT'] . "/try1/configuration file/db_connector.php";

      /********* variable **************************/
        $unregistered_user_details = array(
          "user_id" => "",
          "user_name" => ""
        );

  // declaring common functions.
      // ----------------- generating random string --------------------- //
        function generateRandomString($length = 10) {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
          $charactersLength = strlen($characters);
          $randomString = '';
          for ($i = 0; $i < $length; $i++) {
              $randomString .= $characters[rand(0, $charactersLength - 1)];
          }
          return $randomString;
        }

      // -------------- simple function definitions ----------------------//
        function create_an_unregistered_user($conn , &$unregistered_user_details){
          $user_name = generateRandomString(10);

          // declaring sql stmt.
            $sql_stmt = "INSERT INTO unregistered_users_details
                         (user_name)
                         VALUES ('$user_name') ";

          // execution.
            $result = $conn->query($sql_stmt);
            echo mysqli_error($conn);
            $user_id =  mysqli_insert_id($conn);

          // allocating inserted data.
            $unregistered_user_details['user_id'] = $user_id ;
            $unregistered_user_details['user_name'] = $user_name ;
        }

/************************ session functions ******************************************************************************/
        // --------------------------------------------------------------------------------------------------------------------------------//
          function check_if_user_rank_is_unknown() : bool { // returns true if the user rank is unknown.
            if (  ($_SESSION['user_id'] == "unknown") && ($_SESSION['user_name'] == "unknown") && ($_SESSION['user_rank'] == "unknown") ){
              return true;
            }

            else {      return false ;    }
          }

          // --------------------------------------------------------------------------------------------------------------------------------//
            function change_session_variables_to_unregistered($unregistered_user_details) {
              $_SESSION['user_id'] = $unregistered_user_details['user_id'] ;
              $_SESSION['user_name'] = $unregistered_user_details['user_name'] ;
              $_SESSION['user_rank'] = "unregistered_user" ;
            }

/*************** actual implementation *************************/
    // connect to database.
      include $db_connector;

    // check if user is unknown
      $user_is_unknown = check_if_user_rank_is_unknown();

    // if user is unknown , create a new anonymous user and update the session variables.
      if ($user_is_unknown){
        create_an_unregistered_user($conn , $unregistered_user_details);
        change_session_variables_to_unregistered($unregistered_user_details);
      }

    // test ...
      print_r($_SESSION);
