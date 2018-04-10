<?php 
include 'checklogin.php';
unset($_SESSION['user']);
unset($_SESSION['pass']);
header("Location:index.html");
?>
<?php mysqi_close(); ?>