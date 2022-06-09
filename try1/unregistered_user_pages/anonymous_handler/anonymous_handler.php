<?php

// this module makes sure all unknown users are given a tag.
// it also erases a users data when the session ends.

    include './local_config.php';
    include './anonymous_handler_session.php';
    include './data_functions.php';

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
      // print_r($_SESSION);
