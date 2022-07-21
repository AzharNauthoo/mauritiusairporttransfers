<?php 

include('connection.php');

$name = $_POST['name'];
$phoneNum = $_POST['phoneNum'];
$vehicleType = $_POST['vehicleType'];
$transferType = $_POST['transferType'];
$flightNum = $_POST['flightNumber'];
$dropOff = $_POST['dropOffLocation'];
$pickUpDate = $_POST['pickUpDate'];
$pickUpTime = $_POST['pickUpTime'];
$adultPassengerNum = $_POST['adultPassengerNum'];
$childrenPassengerNum = $_POST['childrenPassengerNum'];
$email = $_POST['email'];
$babyseatNumber = $_POST['babyseatNumber'];
$whatsapp = $_POST['whatsapp'];
$specialRequest = $_POST['specialRequest'];


$query  = "INSERT INTO customers (name, phoneNum, vehicleType, transferType, flightNum, dropOff, pickUpDate, pickUpTime, adultPassengerNum, childrenPassengerNum, email, babyseatNumber, whatsapp, specialRequest) 
           VALUES ('$name','$phoneNum', '$vehicleType', '$transferType', '$flightNum', '$dropOff', '$pickUpDate', '$pickUpTime', '$adultPassengerNum', '$childrenPassengerNum', '$email', '$babyseatNumber', '$whatsapp', '$specialRequest')";
           if (mysqli_query($con, $query)) {
               header("Location:thankyou.html");
               die;
           } else {echo "error";}



?>