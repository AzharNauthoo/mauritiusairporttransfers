<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

include("connection.php");

$sql = "SELECT * 
FROM users
WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0)
{
	$_SESSION['username'] = $username;
	header("Location:adminpage.php");
}

else 
{
	echo "Login failed";
}

$con = null;
?>
