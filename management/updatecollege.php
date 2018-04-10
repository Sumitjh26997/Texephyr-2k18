<?php 
	include 'checklogin.php';

	
$id=$_POST['id'];


	$name = $_POST['c_name'];
	$place = $_POST['c_place'];
	

	$mat_query="UPDATE college SET c_name='$name',c_place='$place' where c_id=$id ";
 	
	$result = mysqli_query($conn,$mat_query);
	 mysqli_close();
header("Location:colleges.php");
	
	
	
	?>