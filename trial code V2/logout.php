<?php

session_start();

include("connection.php");



if (isset($_SESSION['username'])) {

    session_destroy();

    header("Location:login.html");

}

else {

    echo "error";

}

?>