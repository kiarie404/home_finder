<!-- php include files -->
<?php session_start(); ?>
<?php include './filters.inc.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php  echo $css_page; ?>">
    <link rel="stylesheet" href="<?php echo $icons; ?>">
    <title></title>
  </head>
  <body>

    <!-- beginning of navigation bar -->
    <div class="nav_bar">
      <div class="grid1">
        <a class="nav_item" href="<?php echo $homepage; ?>"><i class="fa fa-home"></i></a>
      </div>

      <div class="grid2">
        <div class="nav_item" id="logo"><?php echo $logo; ?></div>
      </div>

      <div class="grid3">
        <div class="dropdown_container">
          <div class="nav_item"><i class="fa fa-bars"></i></div>
          <div class="dropdown_contents">
            <a href="<?php echo $homepage; ?>">Home</a>
            <a href="<?php echo $logout; ?>">Logout</a>
          </div>
        </div>
      </div>
     </div>
     <!-- end of navigation bar -->

    <!-- beginning of the body content -->
    <div class="body_grid">
      <div class="banner">
        <?php echo $banner_message ?>
      </div>
      <div class="form_container">
        <form class="filters_form" action="" method="post">

          <div class="form_element">
            <label for="price_range">Price range : </label>
            <input type="number" name="starting_price" id="starting_price" class="input" width="100%"
              placeholder="<?php echo "From : " . $filters_table['starting_price']; ?>">
            <input type="number" name="ending_price" id="ending_price" class="input"
             placeholder="<?php echo "Upto : " . $filters_table['ending_price'] ; ?>">
          </div>

          <div class="form_element">
            <label for="location">Location : </label>
            <input type="text" name="county" id="county" class="input"
             placeholder="<?php echo $filters_table['county']; ?>">
            <input type="text" name="estate" id="estate" class="input"
             placeholder="<?php echo $filters_table['estate']; ?>">
          </div>

          <div class="form_element">
            <label for="bedrooms_number">Number of bedrooms : </label>
            <input type="number" name="least_bedrooms_number" id="least_bedrooms_number" class="input"
             placeholder="<?php echo "From : " . $filters_table['least_bedrooms_number'] ; ?>">
            <input type="number" name="highest_bedrooms_number" id="highest_bedrooms_number" class="input"
             placeholder="<?php echo "Upto : " . $filters_table['highest_bedrooms_number'] ; ?>">
          </div>

          <input class="form_element submit" type="submit" name="submit" value="submit">

        </form>
        <!-- end of form div -->
      </div>
      <!-- end of form container -->

    </div>
    <!-- end of body content -->

  </body>
</html>
