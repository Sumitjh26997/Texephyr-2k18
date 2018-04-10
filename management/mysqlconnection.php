<?php
$servername = "localhost";
$username = "vd498c";
$password = "d39s2j50";
$dbname = "tex18";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
