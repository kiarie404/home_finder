
<?php

  $modify_id = "modify_" . $property_id ;  // id for the modify button
  $view_id     = "view_" . $property_id ;      // id for the  view button.


  // NOW FROM HERE on i want you to treat each result as a form.
  // ok we will use that later ... for now to fix the problem of mixing javascript and php... meeehn.

  $html_string =
    '<!-- start of a result item -->' .
      '<div class="result_item" id = "'.$property_id.'">' .

        '<div class="segment1 media">' .
          '<div class="home_attribute pic">' .
            '<img src="'.$pic.'" alt="">' .
          '</div>' .
        '</div>' .
    '<!-- end of results segment 1 -->' .

    '<!-- beginning of results segment 2 -->' .
      '<div class="segment2 features" >' .
        '<div class="home_attribute price" >'         . "cash : " .  $price         . '</div>' .
        '<div class="home_attribute property_type" >' . "style : " .  $property_type . '</div>' .
        '<div class="home_attribute county" >'        . "county : " .  $county        . '</div>' .
        '<div class="home_attribute estate" >'        . "estate : " . $estate        . '</div>' .
        '<div class="home_attribute bedrooms_number" >' . $bedrooms_number . " bedroom(s)" .  '</div>' .
        '<div class="home_attribute bathrooms_number" >' . $bathrooms_number . " bathroom(s)" .  '</div>' .
      '</div>' .
    '<!-- end of results segment 2 -->' .

    '<!-- beginning of results segment 3 that contains the operational buttons -->' .
      '<div class="segment3 operations ">' .
      '<button type="button" class="view_button" name="view_button"
        onclick="view_property(this.id)" id="'.$view_id.'" >'. "view" .  '</button>' . // this button opens that particular property
      '<button type="button" class="modify_button" name="modify_button"
        onclick="modify_property(this.id)"  id="'.$modify_id.'"  >'. 'modify' .  '</button>' .  // this removes the property from the market.
      '</div>' .
    '</div>' .
    '<!-- end of results segment 3 -->' .
    '<!-- end of second result item -->' ;

?>
