<?php
// Junester Ursora II BSIT 4-A
// BACKEND 1st Question


$expectedEmail = "uc@gmail.com";
$expectedPassword = "ucban123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submittedEmail = $_POST["email"];
    $submittedPassword = $_POST["password"];

    if (filter_var($submittedEmail, FILTER_VALIDATE_EMAIL)) {
        if ($submittedEmail == $expectedEmail && $submittedPassword == $expectedPassword) {
            echo "Success Login.";
        } else {
            echo "Error Login.";
        }
    } else {
        echo "Invalid Email Format.";
    }
}
?>
