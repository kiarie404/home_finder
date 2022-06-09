<!-- php overall includes -->
<?php session_start(); ?>
<?php include './local_config.php'; ?>
<?php include $login_page_include_file; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php  echo $css_page; ?>">
    <link rel="stylesheet" href="<?php echo $icons; ?>">
  </head>
  <body>

    <!-- beginning of navigation bar -->
    <div class="nav_bar">
      <div class="grid1">
        <a class="nav_item" href="<?php echo $general_homepage; ?>"><i class="fa fa-home"></i></a>
      </div>

      <div class="grid2">
        <div class="nav_item" id="logo"><?php echo $logo; ?></div>
      </div>

      <div class="grid3">
        <div class="dropdown_container">
          <div class="nav_item"><i class="fa fa-bars"></i></div>
          <div class="dropdown_contents">
            <a href="<?php echo $signup_page; ?>">sign up</a>
            <a href="<?php echo $general_homepage; ?>">Home</a>
          </div>
        </div>
      </div>
     </div>
     <!-- end of navigation bar -->


    <div class="form_container" id="login_form_container">

      <form class="login_form" action="" method="post" id="login_form">
        <div class="form_segment" id="header">
          <p class="form_element" id="logo" ><?php echo $logo; ?></p>
          <p class="form_element" id="form_name">Log in</p>
        </div>

        <div class="form_segment" id="body">
          <div class="form_element"  id="email_part">
            <label for="email">Email : </label>
            <input type="text" name="email" value="<?php echo $email; ?>" placeholder="email..." required >
            <span class="error" id="email_error"  > <?php echo $emailErr;?> </span>
          </div>

          <div class="form_element"  id="pwd_part">
            <label for="pwd">Password : </label>
            <input type="password" name="pwd" value="<?php echo $pwd; ?>" placeholder="password..." required >
            <span class="error" id="pwd_error"  > <?php echo $pwdErr;?> </span>
          </div>
        </div>

        <div class="form_segment" id="login_button">
          <input type="submit" name="login_button" value="Login" id="login_submit_button">
        </div>

        <div class="form_segment" id="form_footer">
          <span class="form_element" id="signup_msg">Need an account?</span>
          <a class="form_element" id="signup_button" href="<?php echo $signup_page; ?>">Sign up</a>
        </div>



      </form>
    </div>


      <script src="./login.js" charset="utf-8"></script>
  </body>
</html>
