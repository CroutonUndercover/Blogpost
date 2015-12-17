<?php
session_start();
include('connection.php');



$username=$_POST['email'];
$password=$_POST['passwd'];
$User_Type=$_POST['User_Type'];

mysql_query("INSERT INTO login(username, password, user_type)VALUES('$username', '$password', '$User_Type)");

mysql_close($con);
?>