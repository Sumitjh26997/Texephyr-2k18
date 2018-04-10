<?php 
include 'mysqlconnection.php';
function phpAlert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="index.html"}else{document.location="index.html"}</script>';
}

session_start();

$sql1 = "SELECT * FROM login";
$result = mysqli_query($conn, $sql1);

if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
	$user = $_SESSION['user'];
	$pass= $_SESSION['pass'];
}
else{
	phpAlert("Log-in to continue");
    die(true);
}
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
		if($user == $row["login_username"]&& $pass==$row["login_password"])
		{
			break;
		}
    }
} else {
	phpAlert("Log-in to continue");
    die(true);
}


?>