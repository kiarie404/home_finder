<?php

$_SESSION['user_id'] = get_id($conn, $email);
$_SESSION['user_name'] = $name;
$_SESSION['user_rank'] = "registered_buyer";
