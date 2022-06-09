<?php



// prepare and bind
$stmt = $conn->prepare("INSERT INTO reg_buyers_details (buyer_name, buyer_mail, buyer_password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $hashed_pwd);
$stmt->execute();


echo "New records created successfully";
