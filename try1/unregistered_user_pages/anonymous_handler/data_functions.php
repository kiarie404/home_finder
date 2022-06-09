<?php

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
