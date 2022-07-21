<?php 
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "registration";

$con = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
    }

?>