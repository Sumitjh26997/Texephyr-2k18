<?php
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}
	$id=$_POST['id'];
	$eventID = $_POST['event'];
	$registrationFees = $_POST['registrationFees'];
	$participantName= $_POST['participantName'];
	$participantNumber = $_POST['participantNumber'];
	$mat_query="UPDATE registration SET r_event_id='$eventID',r_fees='$registrationFees',r_p_name='$participantName',r_p_phone='$participantNumber' where r_id=$id ";
	$result = mysqli_query($conn,$mat_query);
	mysqli_close();
	header("Location:registrations.php");




?>
