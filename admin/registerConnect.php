<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shaaba_car_rentals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `registeration` (fullName, usernames, passwords, email, address, phoneNumber, images)
VALUES ('$fullName', '$usernames', '$passwords', '$email', '$address', '$phoneNumber', '$target_file')";

if ($conn->query($sql) == TRUE) {
    //echo "New record created successfully";
} else {
   // echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
include ("register.php");
?>