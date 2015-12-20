<?php

session_start();
/**
 * @param $username
 * @param $password
 * @param $uType
 */
function createUser($usernameU, $passwordU, $uType){

    $servername = "br-cdbr-azure-south-a.cloudapp.net";
    $username = "b5b6aaf0dc5c33";
    $password = "9770557f";
    $dbname = "dreamsparkdatabase1";
// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";



    $user = $usernameU;
    $pass = $passwordU;
    $userType = $uType;


    $sql =  "INSERT INTO member ('username', 'password', 'user_type') VALUES ('$user', '$pass', '$userType')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}
$conn->close();
?>