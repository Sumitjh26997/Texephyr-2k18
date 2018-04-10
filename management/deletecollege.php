<?php 
include 'checklogin.php';
$id=$_POST['id12'];
$query="DELETE FROM college WHERE `c_id` = '".$id."'";
$result = mysqli_query($conn,$query);
echo "hi"."$query";
mysqli_close($conn);
header('Location: colleges.php');
?>


