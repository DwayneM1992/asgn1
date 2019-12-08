<?php
$name_error = $name2_error = $email_error = $phone_error;
$name = $name2 = $email = $phone;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
} else {
    $name = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z]*$", $name))
    $name_error = "Only letters and white space allowed"
}}

if ($_POST["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name2_error = "Name is required";
} else {
    $name2 = test_input($_POST["name"]);
    if(!preg_match("/^[a-zA-Z]*$", $name2))
    $name2_error = "Only letters and white space allowed"
}}

if (empty($_POST["phone"])) {
    $phone_error = "Phone # is required";       ;
} else {
    $phone = test_input($_POST["phone"]);
    if(!filter_var("/^(\d[\s-]?)?[\(\[\s-]{0,2}?\d{3}[\s-]?\d{4}$ ,$phone")) {
        $email_error = "Invalid phone number";
    }}


if (empty($_POST["email"])) {
    $email_error = "Email is required";       ;
} else {
    $email = test_input($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_error = "Invalid email address";
    }}

?>