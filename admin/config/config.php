<?php

$server = "localhost";
$user = "root";  
$pass = "";
$db = "gu_portfolio";

$conn = mysqli_connect($server, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>