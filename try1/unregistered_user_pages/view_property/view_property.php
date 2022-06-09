<!-- php include files -->
<!-- to start the session and initiate an anonymous user details -->
<?php include './view_property_session.php'; ?>
<?php include './local_config.php'; //contains local declarations and definitions ?>
<?php include './view_property.inc.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="<?php echo $css_page; ?>">
    <link rel="stylesheet" href="<?php echo $icons; ?>">

    <title></title>
  </head>
  <body>

    <!-- beginning of navigation bar -->
    <div class="nav_bar">
      <div class="grid1">
        <a class="nav_item" href="<?php echo $user_homepage; ?>"><i class="fa fa-home"></i></a>
      </div>

      <div class="grid2">
        <div class="nav_item" id="logo"><?php echo $logo; ?></div>
      </div>

      <div class="grid3">
        <div class="dropdown_container">
          <div class="nav_item"><i class="fa fa-bars"></i></div>
          <div class="dropdown_contents">
            <a href="<?php echo $user_homepage; ?>">Home</a>
            <a href="<?php echo $signup_page; ?>" id="signup" >Sign up</a>
            <a href="<?php echo $login_page; ?>" id="login" >Log in</a>
          </div>
        </div>
      </div>
     </div>
     <!-- end of navigation bar -->

     <!-- beginning of the body -->
      <div class="boby_grid" id="boby_grid">
          <!-- end of non accordion body element -->
            <div class="b1">

            </div>
            <div class="b2">

            </div>
            <div class="non_accordion_body_elements">
              <div class="media_elements">
                <img src="<?php echo $pics[0]; ?>"  class="pic">
                <img src="<?php echo $pics[1]; ?>"  class="pic">
              </div>
              <div class="essential_info_elements">
                  <div class="output_text" ><?php echo $price ?></div>
                  <div class="output_text" ><?php echo $county ?></div>
                  <div class="output_text" ><?php echo $estate ?></div>
                  <div class="output_text" id="description_essential" ><?php echo $description ?></div>
              </div>
            </div>
          <!-- start of accordion_body_element -->
          <div class="form_container" id="box5">
            <form class="form" action=""  method="post" enctype="multipart/form-data">   <!--  all characters are encoded before they are sent to the server (spaces are converted to "+" symbols, and special characters are converted to ASCII HEX values). -->
                                                                                <!-- fail is used because the accordions auto submit -->

            <button type="button"  class="accordion">Basic House info</button>
            <div class="panel">
              <div class="panel_element">
                <label for="property_type">what type of house is it ? : </label>
                <div class="output_accordion"><?php echo $property_type ?></div>
              </div>

              <div class="panel_element">
                <label for="county">County in which the home belongs : </label>
                <div class="output_accordion"><?php echo $county ?></div>
              </div>

              <div class="panel_element">
                <label for="estate">Estate where the home is : </label>
                <div class="output_accordion"><?php echo $estate ?></div>
              </div>


              <div class="panel_element">
                <label for="year_built">Year built : </label>
                    <label for="year_built_start">Start : </label>
                    <input type="date" name="year_built_start" value= "<?php echo $year_built_start ; ?>" required >
                    <label for="year_built_end">End : </label>
                    <input type="date" name="year_built_end" value= "<?php echo $year_built_end ; ?>" required >
              </div>

              <div class="panel_element" id="description">
                <label for="description">General home description or special features : </label>
                <div class="output_accordion"><?php echo $description ?></div>
              </div>
            </div>
            <!-- end of basic info accordion class panel -->

            <button type="button"  class="accordion">Economic info</button>
            <div class="panel">

              <div class="panel_element">
                <label for="price">Price : </label>
                <div class="output_accordion"><?php echo $price ?></div>
              </div>

              <div class="panel_element">
                <label for="listing_type">Type of listing : </label>
                <div class="output_accordion"><?php echo $listing_type ?></div>
              </div>
            </div>
            <!-- end of econimic info accordion class panel -->

            <button type="button"  class="accordion">Interior info</button>
            <div class="panel">

              <div class="panel_element">
                <label for="rooms_number">Number of rooms : </label>
                <div class="output_accordion"><?php echo $rooms_number ?></div>
              </div>

              <div class="panel_element">
                <label for="bedrooms_number">Number of bedrooms : </label>
                <div class="output_accordion"><?php echo $bedrooms_number ?></div>
              </div>


              <div class="panel_element">
                <label for="bathrooms_number">Number of bathrooms : </label>
                <div class="output_accordion"><?php echo $bathrooms_number ?></div>
              </div>

              <div class="panel_element">
                <label for="air_conditioning">Air conditioning : </label>
                <div class="output_accordion"><?php echo $air_conditioning ?></div>
              </div>

              <div class="panel_element">
                <label for="water_system">water system</label>
                <div class="output_accordion"><?php echo $water_system ?></div>
              </div>
            </div>
            <!-- end of interior info accordion panel -->

            <button type="button"  class="accordion">Exterior info</button>
            <div class="panel">

              <div class="panel_body">
                <div class="panel_element">
                  <label for="roof_type">Roof type: </label>
                  <div class="output_accordion"><?php echo $roof_type ?></div>
                </div>

                <div class="panel_element">
                  <label for="fence_type">Fence type: </label>
                  <div class="output_accordion"><?php echo $fence_type ?></div>
                </div>

                <div class="panel_element">
                  <label for="pools_number">Pool number: </label>
                  <div class="output_accordion"><?php echo $pools_number ?></div>
                </div>

                <div class="panel_element">
                  <label for="garages_number">Garages number: </label>
                  <div class="output_accordion"><?php echo $garages_number ?></div>
                </div>
              </div>
              <!-- end of panel body -->

            </div>
            <!-- end of exterior info panel -->

            <button type="button"  class="accordion">Seller info</button>
            <div class="panel">

              <div class="panel_element">
                <label for="sellers_name">Seller's name: </label>
                <div class="output_accordion"><?php echo $sellers_name ?></div>
              </div>

              <div class="panel_element">
                <label for="sellers_email">Seller's email: </label>
                <div class="output_accordion"><?php echo $sellers_email ?></div>
              </div>

              <div class="panel_element">
                <label for="sellers_tel">Seller's telehone number : </label>
                <div class="output_accordion"><?php echo $sellers_tel ?></div>
              </div>

            </div>
            <!-- end of sellers details panel  -->

            <!-- start of media info -->
            </form>
          </div>
          <!-- end of accordion_body_element -->
      </div>
     <!-- end of the body -->

     <script src="./add_property.js" charset="utf-8"></script>
  </body>
</html>
