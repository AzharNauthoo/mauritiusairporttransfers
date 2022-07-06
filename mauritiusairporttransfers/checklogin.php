<?php

$username = $_POST['username'];
$password = $_POST['password'];

include("connection.php");

$sql = "SELECT username, password 
FROM adminLogin
WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0)
{
	header("Location:adminpage.php");
}

else 
{
	echo "Login failed";
}

$conn = null;
?>
