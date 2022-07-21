<?php 

include('connection.php');

$username = $_POST['username'];
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dateofbirth'];
$gender = $_POST['gender'];


$query  = "INSERT INTO users (username, fname, lname, email, password, dateofbirth, gender) 
           VALUES ('$username','$firstname', '$lastname', '$email', '$password', '$dob', '$gender' )";
           if (mysqli_query($con, $query)) {
               header("Location:login.html");
               die;
           } else {echo "error";}



?>