<?php
include 'mysqlconnection.php';
$sql = "SELECT * FROM volunteer";
$result = mysqli_query($conn, $sql);
$user = $_POST['uname'];
$pass= $_POST['pass'];
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
		if($user == $row["v_email"]&& $pass==$row["v_password"])
		{
			session_start();
			$_SESSION['user'] = $user;
			$_SESSION['pass'] = $pass;
      $_SESSION['pri']=$row["login_access"];
      header("Location:newparticipant.php");
      break;
		}
		header("Location:volunteer_login.html");
    }
  }
 mysqli_close($conn); ?>
