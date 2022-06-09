<!-- php include files -->
<?php session_start(); ?>
<?php include './local_config.php'; //contains local declarations and definitions ?>
<?php include $processing_page; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="<?php echo $css_page ?>">
    <link rel="stylesheet" href="<?php echo $icons; ?>">
  </head>
  <body>
    <!-- beginning of navigation bar -->
    <div class="nav_bar">
      <div class="grid1">
        <a class="nav_item" href="<?php echo $buyer_homepage; ?>"><i class="fa fa-home"></i></a>
      </div>

      <div class="grid2">
        <div class="nav_item" id="logo"><?php echo $logo; ?></div>
      </div>

      <div class="grid3">
        <div class="dropdown_container">
          <div class="nav_item"><i class="fa fa-bars"></i></div>
          <div class="dropdown_contents">
            <a href="<?php echo $buyer_homepage; ?>">Home</a>
            <a href="<?php echo $logout; ?>" id="logout" >Logout</a>
          </div>
        </div>
      </div>
     </div>
     <!-- end of navigation bar -->

    <!-- body starts here -->
    <div class="body_grid">

      <div class="banner">
        <?php echo $banner_msg; ?>
      </div>

      <div class="scrollable_results">
        <!-- start of a result item -->
          <!-- this php code below adds new node of class result_item -->
          <?php
            $length = count($new_nodes);
            for ($i=0; $i < $length; $i++) {
              echo $new_nodes[$i];
            }
           ?>
           <!-- this php code above adds new node of class result_item  -->
        <!-- end of second result item -->
      </div>
    </div>
    <!-- end of body_grid -->

    <script src="./button_reactions.js" charset="utf-8"></script>
  </body>
</html>
