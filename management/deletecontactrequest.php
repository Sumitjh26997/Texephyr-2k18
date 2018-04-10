<?php
include 'checklogin.php';
$id=$_POST['id12'];
$query="DELETE FROM contact_us_submissions WHERE `con_id` = '".$id."'";
$result = mysqli_query($conn,$query);
echo "hi"."$query";
mysqli_close($conn);
header('Location: contactrequests.php');
?>