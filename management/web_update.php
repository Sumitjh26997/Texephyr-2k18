<?php
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}
	$id=$_POST['id'];
	$eventID = $_POST['event'];
	$registrationFees = $_POST['registrationFees'];
	$participantName= $_POST['participantName'];
	$participantEmail= $_POST['participantEmail'];
	$participantNumber = $_POST['participantNumber'];
	$mat_query="UPDATE register SET event='$eventID',email='$participantEmail',name='$participantName',contact='$participantNumber' where id=$id ";
	$result = mysqli_query($conn,$mat_query);
	mysqli_close();
	header("Location:web_reg.php");




?>
