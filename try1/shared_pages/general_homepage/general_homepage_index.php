<!-- php include files -->
<?php include 'local_config.php'; //contains local declarations and definitions ?>
<!-- to start the session and initiate an anonymous user details -->
<?php include $general_homepage_session; ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- include php files -->
    <link rel="stylesheet" href="<?php echo $css_page; ?>">
    <link rel="stylesheet" href="<?php echo $icons; ?>">

  </head>
  <body>

    <!-- beginning of navigation bar -->
    <div class="nav_bar">
      <div class="nav_item" id="logo_button"><?php echo $logo; ?></div>
      <div class="dropdown_container">
        <div class="nav_item"><i class="fa fa-bars"></i></div>
        <div class="dropdown_contents">
          <a href="<?php echo $login_page; ?>">log in</a>
          <a href="<?php echo $signup_page; ?>">sign up</a>
          <a href="<?php echo $filters_page; ?>">set search filters</a>
        </div>
      </div>
    </div>
     <!-- end of navigation bar -->

     <!-- begginning of body -->
     <!-- content container -->
<div class="content_container">

  <div class="banner"> <div class="message"><?php echo $banner_message; ?></div> </div>

  <div class="search_bar">

    <form class="upper_part" action="<?php echo $search_engine ?>" method="get">
      <input type="search" name="search_input" placeholder="Enter the county and estate of home... or any of the two...">
      <input type="submit" name="search_button" id="search_button" value="search">
    </form>

    <div class="lower_part">
      <div class="blank"></div>

      <a href="<?php echo $filters_page ?>" name="filters_button" id="filters_button" >set search filters</a>
    </div>
  </div>

</div>
<!-- end of content container -->

  </body>
</html>
