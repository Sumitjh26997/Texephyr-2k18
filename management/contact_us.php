<?php
include 'mysqlconnection.php';
function phpAlert($msg, $redirectTo)
{
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){window.location="' . $redirectTo . '"}else{window.location="' . $redirectTo . '"}</script>';
}

if($_SERVER['REQUEST_METHOD']!='POST')
    die("Invalid Request");

if(!(isset($_POST['name']) and isset($_POST['phone']) and isset($_POST['email']) and isset($_POST['message'])))
    die("Parameters mismatch");

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$query = "INSERT INTO `contact_us_submissions` (`con_id`, `name`, `phone`,`email`, `message`, `timestamp`) VALUES (NULL, '$name', '$phone','$email', '$message', CURRENT_TIMESTAMP)";

$result = mysqli_query($conn,$query);

phpAlert("Submitted Successfully","http://www.texephyr.in");