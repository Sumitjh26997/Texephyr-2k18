<?php
include 'checklogin.php';
function php2Alert($msg)
{
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="fixtures.php"}else{document.location="fixtures.php"}</script>';
}

$eventName = $_POST['eventName'];
$eventDescription = $_POST['eventDescription'];
$eventFees = $_POST['eventFees'];
$eventHead = $_POST['eventHead'];
$eventHeadNumber = $_POST['eventHeadNumber'];
$eventDate = $_POST['eventDate'];
$eventTime = $_POST['eventTime'];
$eventParticipantNumber = $_POST['eventParticipantNumber'];
$eventRoundNumber = $_POST['eventRoundNumber'];

$query = "INSERT INTO `event` ( `e_name` , `e_description` , `e_fees`,`e_participant_no`,`e_date`,`e_time`,`e_head`,`e_head_phone`,`e_round`) VALUES ( '" . $eventName . "' , '" . $eventDescription . "' , '" . $eventFees . "' , '" . $eventParticipantNumber . "' , '" . $eventDate . "' , '" . $eventTime . "' ,'" . $eventHead . "','" . $eventHeadNumber . "','" . $eventRoundNumber . "')";
mysqli_query($conn, $query);
header("Location:events.php");

