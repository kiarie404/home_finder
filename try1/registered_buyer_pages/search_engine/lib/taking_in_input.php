<?php

  /*********************************************************************************************/
    function check_if_search_bar_is_empty () : bool { // if the search_bar is empty , this function returns bool false.
      //test.
        // echo $_GET['search_input'];  // eof test.

      if (  isset($_GET['search_input'])  && $_GET['search_input'] == "" ) { return true; }
      else  { return false; }
    } // eof check_if_search_bar_is_empty

  /**********************************************************************************************/
    function sanitize_search_input() : string {  // trims and prevents sql injection
      $search_input = trim($_GET['search_input']);
      return $search_input;
    }

  /**********************************************************************************************/
    function break_search_input_into_individual_words($search_input) : array { //returns an array of individual keywords
      $individual_keywords = explode (',', $search_input);
      return $individual_keywords;
    }

  /***********************************************************************************************/
    function test_print_individual_keywords($individual_keywords) {
      foreach ($individual_keywords as $key => $value) {
        echo "<br>" . $key . " : " . $value . "<br>";
      }
    }

  /************************************************************************************************/
