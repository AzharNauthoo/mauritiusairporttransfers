<?php

include("connection.php");

$phoneNum = $_GET['phoneNum'];
$query = "DELETE FROM customers WHERE phoneNum = '$phoneNum'";

mysqli_query($con,$query);

if(mysqli_query($con,$query))
{
	header("Location:adminpage.php");
}

else
{
	echo "Error";
}

?>