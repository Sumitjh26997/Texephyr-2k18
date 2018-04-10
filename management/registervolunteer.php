<?php
	include 'checklogin.php';
function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}
	$email = $_POST['vol_email'];
	$password = $_POST['vol_pass'];
	$name= $_POST['vol_name'];
	$roll = $_POST['vol_roll'];
	$phone= $_POST['vol_phone'];
	$department = $_POST['department'];
	$mat_query="INSERT INTO `volunteer`( `v_name`,  `v_dept_id`, `v_roll`, `v_phone`, `v_email`, `v_password`) VALUES ('".$name."','".$department."','".$roll."','".$phone."','".$email."','".$password."')";
    echo $mat_query;


	$result = mysqli_query($conn,$mat_query);
	header("Location:volunteers.php");




?>


<?php mysqli_close($conn); ?>
