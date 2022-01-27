<?php
 $fname =  $_POST["fname"];
 $lname =  $_POST["lname"];
 $email =  $_POST["email"];
 $number = $_POST["number"];
 $address = $_POST["address"];
 $address2 = $_POST["address2"];
 $city = $_POST["city"];
 $state = $_POST["state"];
 $zip = $_POST["zip"];

 //Data connection
    $conn = new mysqli('localhost' , 'root' , '' , 'users');
    if($conn->connect_error) {
        die ('Connection Failed : ' .$conn->connect_error);
    }else {
        $stmt = $conn->prepare("Insert into registration(firstname,lastname,email,number,address,address2,city,state,zip) values(?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('sssissssi',$fname, $lname, $email, $number, $address, $address2, $city, $state, $zip);
        $stmt->execute();
        echo "Registration successfully...";
        $stmt->close();
        $conn->close(); 
    }
?>