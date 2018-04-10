<?php 
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}
	
$id=$_POST['id'];


	$email = $_POST['vol_email'];
	$password = $_POST['vol_pass'];
	$name= $_POST['vol_name'];
	$roll = $_POST['vol_roll'];
	$phone= $_POST['vol_phone'];
	$department = $_POST['department'];

 
	


	$mat_query="UPDATE volunteer SET v_name='$name',v_name='$name',v_email='$email',v_roll='$roll',v_phone='$phone',v_password='$password',v_dept_id='$department' where v_id=$id ";
 	
	$result = mysqli_query($conn,$mat_query);
	mysqli_close();
header("Location:volunteers.php");
	
	
	
	
?>

