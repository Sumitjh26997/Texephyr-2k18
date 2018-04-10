<?php 
	include 'checklogin.php';
	function php2Alert($msg) {
    echo '<script type="text/javascript">if (confirm("' . $msg . '")){document.location="volunteer.php"}else{document.location="volunteer.php"}</script>';
							 }

	$c_name = $_POST['col_name'];
	$c_addr = $_POST['col_addr'];
	
	$mat_query="INSERT INTO `college`( `c_name`,  `c_place`) VALUES ('".$c_name."','".$c_addr."')";
   
	
	
	$result = mysqli_query($conn,$mat_query);

	header("Location:colleges.php");
	
	
	
	
?>


<?php mysqli_close($conn); ?>