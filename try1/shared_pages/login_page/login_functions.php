<?php

function check_email_format ($email,  &$emailErr){         //to check if the email has been written well

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  { $emailErr = "Invalid email formatt";
    return false; }

  else{ $emailErr = "";
        return true; }
}


function check_email_existence($email,  &$emailErr,  $conn, &$user_name, &$user_id , &$user_rank){

  $sql_stmt = "SELECT * FROM reg_buyers_details WHERE (buyer_mail = '".$email."' )  LIMIT 1 ";     //check in non_admin users
  $result =  mysqli_query($conn, $sql_stmt);
  $row = mysqli_fetch_assoc($result);
  $result_count = mysqli_num_rows($result);   // how many results come back

  if ($result_count > 0 ){                    //if email is found as a non admin
    $user_name = $row['buyer_name'];
    $user_id = $row['buyer_id'];
    $user_rank = "registered_buyer";
    return true;
  }

  // else look for email in the admin tables
  else{

    $sql_stmt = "SELECT * FROM admin_details WHERE (admin_mail = '".$email."' )  LIMIT 1 ";     //check in admin users
    $result =  mysqli_query($conn, $sql_stmt);
    $row = mysqli_fetch_assoc($result);
    $result_count = mysqli_num_rows($result);   // how many results come back

    if ($result_count > 0 ){                    //if email is found as an admin
      $user_id= $row['admin_id'];
      $user_name = $row['admin_name'];
      $user_rank = "admin";
      return true;
    }

    else{
      $emailErr = "email does not belong to a registered user...";
      return false;
    }
  }

}


function check_pwd_validity($email, $pwd,  &$pwdErr, $conn , $user_rank )
{

  if ($user_rank == "registered_buyer"){                                 //if a non admin is truying to log in
    $sql_stmt = "SELECT * FROM reg_buyers_details WHERE (buyer_mail = '".$email."' )  LIMIT 1 ";
    $result =  mysqli_query($conn, $sql_stmt);
    $row = mysqli_fetch_assoc($result);
    $hashed_pwd = $row['buyer_password'];

    if (password_verify($pwd,  $hashed_pwd)) {
       echo "correct password...";
       return true;
      }
    else{
      $pwdErr = "incorrect password";
      return false;
    }
  }

  if ($user_rank == "admin"){                                 //if a non admin is truying to log in and
    $sql_stmt = "SELECT * FROM admin_details WHERE (admin_mail = '".$email."' )  LIMIT 1 ";
    $result =  mysqli_query($conn, $sql_stmt);
    $row = mysqli_fetch_assoc($result);
    $hashed_pwd = $row['admin_password'];

    if ($pwd == $hashed_pwd) {
       echo "correct password...";
       return true;
     }
    else{
      $pwdErr = "incorrect password";
      return false;
    }
  }
}
