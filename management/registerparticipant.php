<?php
include 'checklogin_vol.php';

function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="newparticipant.php"}else{document.location="newparticipant.php"}</script>';
}

$pName = $_POST['pName'];
$pMail = $_POST['pMail'];
$eventId = $_POST['eventId'];

$pNumber = $_POST['pNumber'];
$academicYear = $_POST['academicYear'];

$totalFees = $_POST['totalFees'];
$paidFees = $_POST['paidFees'];

$pCollege = $_POST['pCollege'];
$pCollegeId = $_POST['pCollegeId'];
$pPhone = $_POST['pPhone'];

//Getting volunteer Id
$vol_email = $_SESSION['user'];
$v_id = null;
$query = "SELECT * FROM volunteer WHERE v_email = '$vol_email'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $v_id = $row["v_id"];
} else {
    phpAlert("Invalid Volunteer! Log-in to continue");
    die(true);
}

$partial = ($totalFees - $paidFees > 0) ? 1 : 0;
//Date and Time
date_default_timezone_set('Asia/Kolkata');
$date = date("Y-m-d");
$time = date("H:i:s");

$query = "INSERT INTO `registration` (`r_id`, `r_event_id`, `r_volunteer_id`, `r_visit_id`, `r_p_college_id`, `r_p_college_name`, `r_p_name`, `r_p_phone`, `r_fees`, `r_paid`, `r_partial_status`, `r_date`, `r_time`, `r_status_del`, `r_p_email`, `transaction_id`) VALUES (NULL, '$eventId', '$v_id', NULL, '$pCollegeId', '$pCollege',  '$pName', '$pPhone', '$totalFees', '$paidFees', '$partial', '$date', '$time', '0', '$pMail', '1');";

mysqli_query($conn, $query);

php2Alert("Registered Successfully!");