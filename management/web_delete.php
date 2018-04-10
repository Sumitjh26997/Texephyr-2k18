<?php
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
}
	$id=$_POST['id'];
  $mat_query="UPDATE register SET `status_del` = 1 where id=$id ";
  $result = mysqli_query($conn,$mat_query);
  mysqli_close();
  header("Location:web_reg.php");
?>
