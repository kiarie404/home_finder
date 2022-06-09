<?php
  session_start();

  // <!-- extracting the id from the url -->
    $property_id = $_GET["id"];
    $_SESSION['property_id'] = $property_id;
