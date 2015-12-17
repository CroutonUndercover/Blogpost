<?php
$servername = "br-cdbr-azure-south-a.cloudapp.net";
$username = "b5b6aaf0dc5c33";
$password = "9770557f";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>