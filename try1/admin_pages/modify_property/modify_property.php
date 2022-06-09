<!-- php include files -->
<!-- to start the session and initiate an anonymous user details -->
<?php include './modify_property_session.php'; ?>
<?php include './local_config.php'; //contains local declarations and definitions ?>
<?php include 'modify_property.inc.php'; ?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="<?php echo $css_page; ?>">
<link rel="stylesheet" href="<?php echo $icons; ?>">
</head>
<body>

  <!-- beginning of navigation bar -->
  <div class="nav_bar">
    <div class="grid1">
      <a class="nav_item" href="<?php echo $admin_homepage; ?>"><i class="fa fa-home"></i></a>
    </div>

    <div class="grid2">
      <div class="nav_item" id="logo"><?php echo $logo; ?></div>
    </div>

    <div class="grid3">
      <div class="dropdown_container">
        <div class="nav_item"><i class="fa fa-bars"></i></div>
        <div class="dropdown_contents">
          <a href="<?php echo $admin_homepage; ?>">Home</a>
          <a href="<?php echo $logout; ?>">Logout</a>
        </div>
      </div>
    </div>
   </div>
   <!-- end of navigation bar -->

   <!-- beginning of body -->
<div class="boby_grid" id="box">

  <div id="box1"></div>
  <div class="banner" id="box2">
    <div id="banner_msg"><?php echo $banner_msg ?></div>
  </div>

  <div id="box3"></div>
  <div id="box4"></div>
  <div class="form_container" id="box5">
    <form class="form" action=""  method="post" enctype="multipart/form-data">   <!--  all characters are encoded before they are sent to the server (spaces are converted to "+" symbols, and special characters are converted to ASCII HEX values). -->
                                                                        <!-- fail is used because the accordions auto submit -->

    <button type="button"  class="accordion">Basic House info</button>
    <div class="panel">
      <div class="panel_element">
        <label for="property_type">what type of house is it ? : </label>
        <select  name="property_type" value= "<?php echo $property_type ; ?>">
          <option value="<?php echo $property_type; ?>"><?php echo $property_type ?></option>
          <option value="bungalow">bungalow</option>
          <option value="cottage">cottage</option>
          <option value="townhouse">townhouse</option>
          <option value="duplex">duplex</option>
          <option value="ranch style house">ranch style house</option>
          <option value="mansion">mansion</option>
          <option value="villa">villa</option>
          <option value="semi-detached">semi-detached</option>
          <option value="mobile home">mobile home</option>
          <option value="log cabin">log cabin</option>
          <option value="modular building">modular building</option>
          <option value="patio home">patio home</option>
        </select>

      </div>

      <div class="panel_element">
        <label for="county">County in which the home belongs : </label>
        <select  name="county" value= "<?php echo $county ; ?>">
          <option value="Mombasa">Mombasa</option>
          <option value="<?php echo $county; ?>"><?php echo $county ?></option>
          <option value="Kwale">Kwale</option>
          <option value="Tana River">Tana River</option>
          <option value="Lamu">Lamu</option>
          <option value="Taita taveta">Taita taveta</option>
          <option value="Garissa">Garissa</option>
          <option value="Wajir">Wajir</option>
          <option value="Mandera">Mandera</option>
          <option value="Marsabit">Marsabit</option>
          <option value="Isiolo">Isiolo</option>
          <option value="Meru">Meru</option>
          <option value="Tharaka nithi">Tharaka nithi</option>
          <option value="Embu">Embu</option>
          <option value="Kitui">Kitui</option>
          <option value="Machakos">Machakos</option>
          <option value="Makueni">Makueni</option>
          <option value="Nyandarua">Nyandarua</option>
          <option value="Nyeri">Nyeri</option>
          <option value="Kirinyaga">Kirinyaga</option>
          <option value="Muranga">Muranga</option>
          <option value="Kiambu">Kiambu</option>
          <option value="Turkana">Turkana</option>
          <option value="West Pokot">Pokot</option>
          <option value="Samburu">Samburu</option>
          <option value="Trans nzoia">Trans nzoia"</option>
          <option value="Uasin Gishu">Uasin Gish</option>
          <option value="E. Marakwet">E. Marakwet</option>
          <option value="Nandi">Nandi</option>
          <option value="Baringo">Baringo</option>
          <option value="Laikipia">Laikipia</option>
          <option value="Nakuru">Nakuru</option>
          <option value="Narok">Narok</option>
          <option value="Kajiado">Kajiado</option>
          <option value="Kericho">Kericho</option>
          <option value="Bomet">Bomet</option>
          <option value="Kakamega">Kakamega</option>
          <option value="Vihiga">Vihiga</option>
          <option value="Bungoma">Bungoma</option>
          <option value="Busia">Busia</option>
          <option value="Siaya">Siaya</option>
          <option value="Kisumu">Kisumu</option>
          <option value="Homa Bay">Homa Bay</option>
          <option value="Migori">Migori</option>
          <option value="Kisii">Kisii</option>
          <option value="Nyamira">Nyamira</option>
          <option value="Nairobi">Nairobi</option>
        </select>
      </div>

      <div class="panel_element">
        <label for="estate">Estate where the home is : </label>
        <input type="text" name="estate" value= "<?php echo $estate ; ?>" >
        <div class="error"> <?php echo $estate_err;?></div>
      </div>


      <div class="panel_element">
        <label for="year_built">Year built : </label>
            <label for="year_built_start">Start : </label>
            <input type="date" name="year_built_start" value= "<?php echo $year_built_start ; ?>"  >
            <div class="error"> <?php echo $year_start_err;?></div>
            <label for="year_built_end">End : </label>
            <input type="date" name="year_built_end" value= "<?php echo $year_built_end ; ?>"  >
            <div class="error"> <?php echo $year_end_err;?></div>
      </div>

      <div class="panel_element" id="description">
        <label for="description">General home description or special features : </label>
        <textarea name="description" rows="8" cols="80"
          placeholder="<?php echo $description; ?>"
        ></textarea>
        <div class="error"> <?php echo $description_err;?></div>
      </div>
    </div>
    <!-- end of basic info accordion class panel -->

    <button type="button"  class="accordion">Economic info</button>
    <div class="panel">

      <div class="panel_element">
        <label for="price">Price : </label>
        <input type="text" name="price"  value= "<?php echo $price ; ?>"  >
        <div class="error"> <?php echo $price_err;?></div>
      </div>

      <div class="panel_element">
        <label for="listing_type">Type of listing : </label>
        <select  name="listing_type" value= "<?php echo $listing_type ; ?>">
          <option value="<?php echo $listing_type; ?>"><?php echo $listing_type ?></option>
          <option value="Net listing">Net listing</option>
          <option value="Open listing">Open listing</option>
          <option value="Exclusive agency listing">Exclusive agency listing</option>
          <option value="Exclusive right to sell listing">Exclusive right to sell listing</option>
        </select>
      </div>
    </div>
    <!-- end of econimic info accordion class panel -->

    <button type="button"  class="accordion">Interior info</button>
    <div class="panel">

      <div class="panel_element">
        <label for="rooms_number">Number of rooms : </label>
        <input type="number" name="rooms_number" placeholder="<?php echo $rooms_number ; ?>"  value="<?php echo $rooms_number ; ?>"  >
        <div class="error"> <?php echo $rooms_err;?></div>
      </div>

      <div class="panel_element">
        <label for="bedrooms_number">Number of bedrooms : </label>
        <input type="number" name="bedrooms_number" value= "<?php echo $bedrooms_number ; ?>"   >
        <div class="error"> <?php echo $bedrooms_err;?></div>
      </div>

      <div class="panel_element">
        <label for="bathrooms_number">Number of bathrooms : </label>
        <input type="number" name="bathrooms_number" value= "<?php echo $bathrooms_number ; ?>"  >
        <div class="error"> <?php echo $bathrooms_err;?></div>
      </div>

      <div class="panel_element">
        <label for="air_conditioning">Air conditioning : </label>
        <input type="checkbox" name="air_conditioning" <?php echo $air_conditioning; ?>>
      </div>

      <div class="panel_element">
        <label for="water_system">water system</label>
        <input type="checkbox" name="water_system" <?php echo $water_system ?>>
      </div>
    </div>
    <!-- end of interior info accordion panel -->

    <button type="button"  class="accordion">Exterior info</button>
    <div class="panel">

      <div class="panel_element">
        <label for="roof_type">Roof type: </label>
        <select  name="roof_type" value= "<?php echo $roof_type ; ?>"  >
          <option value="<?php echo $roof_type ?>"><?php echo $roof_type ?></option>
          <option value="gable roof">gable roof</option>
          <option value="mansard roof">mansard roof</option>
          <option value="asphalt shingle">asphalt shingle</option>
          <option value="slate">slate</option>
          <option value="flat roof">flat roof</option>
          <option value="salt box house">salt box house</option>
          <option value="butterfly roof">butterfly roof</option>
          <option value="saw-tooth roof">saw-tooth roof</option>
          <option value="dutch gable roof">dutch gable roof</option>
          <option value="dormer">dormer</option>
          <option value="clerestory">clerestory</option>
          <option value="other">other</option>
        </select>
      </div>

      <div class="panel_element">
        <label for="fence_type">Fence type: </label>
        <input type="text" name="fence_type"  placeholder="<?php echo $fence_type ?>" value= "<?php echo $fence_type ; ?>"  >
        <div class="error"> <?php echo $fence_err;?></div>
      </div>

      <div class="panel_element">
        <label for="pools_number">Pool number: </label>
        <input type="number" name="pools_number"  placeholder="<?php echo $pools_number ?>" value= "<?php echo $pools_number ; ?>" >
        <div class="error"> <?php echo $pools_err;?></div>
      </div>

      <div class="panel_element">
        <label for="garages_number">Garages number: </label>
        <input type="number" name="garages_number" placeholder="<?php echo $garages_number ?>"  value= "<?php echo $garages_number ; ?>"  >
        <div class="error"> <?php echo $garages_err;?></div>
      </div>

    </div>
    <!-- end of exterior info panel -->

    <button type="button"  class="accordion">Seller info</button>
    <div class="panel">

      <div class="panel_element">
        <label for="sellers_name">Seller's name: </label>
        <input type="text" name="sellers_name"   placeholder="<?php echo $sellers_name ?>" value= "<?php echo $sellers_name ; ?>" >
        <div class="error"> <?php echo $sellers_name_err;?></div>
      </div>

      <div class="panel_element">
        <label for="sellers_email">Seller's email: </label>
        <input type="text" name="sellers_email"   placeholder="<?php echo $sellers_email ?>"  value= "<?php echo $sellers_email ; ?>" >
        <div class="error"> <?php echo $sellers_email_err;?></div>
      </div>

      <div class="panel_element">
        <label for="sellers_tel">Seller's telehone number : </label>
        <input type="text" name="sellers_tel"  placeholder="<?php echo $sellers_tel ?>" value= "<?php echo $sellers_tel ; ?>"  >
        <div class="error"> <?php echo $sellers_tel_err;?></div>
      </div>

    </div>
    <!-- end of sellers details panel  -->

    <!-- start of media info -->

    <button type="button"  class="accordion">Media info</button>
    <div class="panel">

      <div class="panel_element">
        <img src="<?php echo $pics[0] ?>" >
        <input type="file" name="pic1" >
      </div>

      <div class="panel_element">
        <img src="<?php echo $pics[1] ?>" id="pic1" >
        <input type="file" name="pic2" >
      </div>

    </div>
    <!-- end of media details panel  -->

    <input type="submit" value="Submit" id="submit_button">
    </form>
  </div>

  <div id="box6"></div>

</div>


<script src="./accordion.js" charset="utf-8"></script>

</body>
</html>
