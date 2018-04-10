<?php
include 'checklogin.php';
  $id = $_POST['id'];
  $query = "DELETE FROM event WHERE e_id='".$id."'";
  $result = mysqli_query($conn,$query);
  header("Location:events.php");
  mysqli_close($conn);
?>
