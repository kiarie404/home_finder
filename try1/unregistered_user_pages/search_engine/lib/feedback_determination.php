<?php

  /********************* ******************************************************/
    function generate_feedback_message (&$feedback_message, $property_list) {

      $number_of_results = count($property_list);

       if ($number_of_results == 0) {
         $feedback_message = "No results were found... ";
       }

       elseif ($number_of_results > 0) {
         $feedback_message = $number_of_results . " results were found...";
       }
    }
