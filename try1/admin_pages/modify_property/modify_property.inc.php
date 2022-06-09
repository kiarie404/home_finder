<?php
// connect to the database
include $db_connector;

// extract data from the database
include './extracting_initial_values.php';
include './take_in_changed_input.php';
include './injecting_data.php';
// include 'media_functions.php';

if ($_SESSION['user_rank'] != "admin"){  // checking if user is really an admin... if not he is redirected to the login_page.
  echo "You are not an admin ..... ";
  header('location: '.$login_page.'');
}


?>
