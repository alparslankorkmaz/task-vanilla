<?php

$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$company_name = $_POST['companyname'];
$email = $_POST['email'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];

$conn = new mysqli('localhost', 'root', '', 'stone2stone');
if ($conn->connect_error) {
    die('Connection Failed : ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into registration(first_name, last_name, company_name, email, address, postcode) 
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $first_name, $last_name, $company_name, $email, $address, $postcode);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
