
<?php
// start session...
  session_start();

// clear out session variables...
  $_SESSION = array();

// declare general homepage path...
  $general_homepage = "/try1/shared_pages/general_homepage/general_homepage_index.php";

  foreach ($_SESSION as $key => $value) {
    echo "<br> " . $key . " : " . $_SESSION[$key];
  }
echo "am an admin trying to log out";

 header('location: '.$general_homepage.'');
