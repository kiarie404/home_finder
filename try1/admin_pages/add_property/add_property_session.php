<?php
  $_SESSION['admin_list_items'] = array();     // this array is dynamic so... you can push many property ids into it
  array_push($_SESSION['admin_list_items'], $property_id);  // for now we push just the id of the property we have just added.
