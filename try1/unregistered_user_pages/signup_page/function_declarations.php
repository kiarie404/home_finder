<?php


function test_input($data) {          //sanitize data
  $data = trim($data);                //to remove the white spaces after if any
  $data = htmlspecialchars($data);    //security purposes
  return $data;
}


function check_email_format ($email,  &$emailErr){         //to check if the email has been written well

  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
  { $emailErr = "Invalid email formatt";}

  else{ $emailErr = ""; }
}

function check_email_existence ($email,   &$emailErr,  $conn  )  //check if email already exists
{
  $sql_stmt = "SELECT * FROM reg_buyers_details WHERE (buyer_mail = '".$email."' )  LIMIT 1 ";
  $query =  mysqli_query($conn, $sql_stmt);
  $result_count = mysqli_num_rows($query);   // how many results come back

  if ($result_count > 0 ){
    $emailErr = "email already exists...";
  }

  $sql_stmt = "SELECT * FROM admin_details   WHERE (admin_mail = '".$email."' )  LIMIT 1 ";
  $query =  mysqli_query($conn, $sql_stmt);
  $result_count = mysqli_num_rows($query);   // how many results come back

  if ($result_count > 0 ){
    $emailErr = "email already exists...";
  }
}

function confirm_password ($pwd, $pwd_repeat, &$pwd_repeat_Err)     //if the passords are not similar...
{
  if (!($pwd == $pwd_repeat))
  {  $pwd_repeat_Err = "passwords do not match..."; }
}


function get_id ($conn, $email)                                     //this is used to get the id of the person who has just logged in ... this helps in Sesssion keeping
{
  $sql_stmt = "SELECT * FROM reg_buyers_details WHERE (buyer_mail = '".$email."' )  LIMIT 1 ";
  $query =  mysqli_query($conn, $sql_stmt);
  $row = mysqli_fetch_assoc($query);
  $id = $row['buyer_id'];
  return $id;
}


 ?>
