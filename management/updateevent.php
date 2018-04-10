<?php
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}

    $id = $_POST['id'];
		$eventName = $_POST['eventName'];
		$eventFees = $_POST['eventFees'];
		$eventHead= $_POST['eventHead'];
		$eventHeadNumber = $_POST['eventHeadNumber'];
		$eventDate= $_POST['eventDate'];
		$eventTime = $_POST['eventTime'];
    $eventParticipantNumber = $_POST['eventParticipantNumber'];
    $eventRoundNumber = $_POST['eventRoundNumber'];
    $eventDescription = $_POST['eventDescription'];
		$mat_query="UPDATE event SET e_name= '".$eventName."' , e_fees='".$eventFees."',e_head='".$eventHead."',e_head_phone='".$eventHeadNumber."',e_date='".$eventDate."',e_time='".$eventTime."',e_participant_no='".$eventParticipantNumber."' , e_round = '".$eventRoundNumber."' , e_description = '".$eventDescription."' where e_id=$id ";
    echo $mat_query;
		$result = mysqli_query($conn,$mat_query);
		mysqli_close($conn);
	  header("Location:events.php");
?>
