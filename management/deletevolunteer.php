<?php 
	include 'checklogin.php';
	
	$id=$_POST['id'];
$query="DELETE FROM volunteer WHERE v_id = '$id'";
$result = mysqli_query($conn,$query);;
mysqli_close($conn);header('Location: volunteers.php');



?>


