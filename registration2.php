<?php
$firstname = $email = $address = $city = $state = $zip ="";
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $firstname = test_input ($_POST["firstname"]);
    $email = test_input ($_POST["email"]);
    $address = test_input ($_POST["address"]);
    $city = test_input ($_POST["city"]);
    $state = test_input ($_POST["state"]);
    $zip = test_input ($_POST["zip"]);
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>