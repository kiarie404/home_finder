<?php
  session_start();

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
