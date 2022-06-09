<!-- php overall includes -->
<?php session_start(); ?>
<?php include './local_config.php'; ?>
<?php include './signup_processing.php'; ?>


<!DOCTYPE HTML>
<html>
<head>
<style>
.error {color: red;}
</style>
<link rel="stylesheet" href="<?php echo $css_page; ?>">
<link rel="stylesheet" href="<?php echo $icons; ?>">
</head>
<body>

<!-- beginning of navigation bar -->
<div class="nav_bar">
  <div class="grid1">
    <a class="nav_item" href="<?php echo $general_homepage; ?>"><i class="fa fa-home"></i></a>
  </div>

  <div class="grid2">
    <div class="nav_item" id="logo"echo><?php echo $logo; ?></div>
  </div>

  <div class="grid3">
    <div class="dropdown_container">
      <div class="nav_item"><i class="fa fa-bars"></i></div>
      <div class="dropdown_contents">
        <a href="<?php echo $login_page; ?>">log in</a>
        <a href="<?php echo $general_homepage; ?>">Home</a>
      </div>
    </div>
  </div>
 </div>
 <!-- end of navigation bar -->

<div class="form_container">
  <form class="signup_form" method="post" action="">

    <div class="form_element" id="name_dv">
      <label for="name">Name : </label><br>
      <input type="text" name="name" placeholder="name..." id="name_input" value= "<?php echo $name; ?>" required >
      <div class="error" id="name_error"> <?php echo $nameErr;?></div>
    </div>

    <div class="form_element" id="email_dv">
      <label for="email">E-mail : </label><br>
      <input type="text" name="email" placeholder="email..." id="email_input" value= "<?php echo $email ; ?>" required >
      <div class="error" id="email_error"> <?php echo $emailErr;?></div>
    </div>

    <div class="form_element" id="pwd_dv">
      <label for="pwd">Password : </label><br>
      <input type="password" name="pwd" placeholder="password..." id="pwd_input" value= "<?php echo $pwd ; ?>" required >
      <div class="error" id="pwd_error" > <?php echo $pwdErr;?></div>
    </div>

    <div class="form_element" id="pwd_repeat_dv">
      <label for="pwd_repeat">confirm password : </label><br>
      <input type="password" name="pwd_repeat" placeholder="confirm password..." id="pwd_repeat_input" value= "<?php echo $pwd_repeat ; ?>" required>
      <div class="error" id="pwd_repeat_error" > <?php echo $pwd_repeat_Err;?></div>
    </div>

    <button class="submit_button" type="submit" name="submit">Sign up</button>
    <div class="form_element" id="bottom">
      <span class="form_element" id="login_msg">Already a user? </span>
      <a class="form_element" id="login_button" href="<?php echo $login_page; ?>">Log in</a>
    </div>

  </form>
</div>

</body>
</html>
