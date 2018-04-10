<?php
  include 'checklogin.php' ;
  function getName($table,$param,$value,$conn,$req) {
  $select = "select * from $table where $param = $value ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);
  $name =  $row["$req"];
  if(mysqli_num_rows($result)>0)
  {
    return $name;
  }
  else {
    return 0;
  }
}
$select_vol="select * from volunteer";
$select_event = "select * from event";

?>

<form action="form_vol.php" method="POST">
Volunteer
<select name="volunteer">
<option value="222">ALL</option>
<?php
$result = mysqli_query($conn,$select_vol);
while($row = mysqli_fetch_array($result))
  {
    $name = $row['v_name'];
?>
<html>
<body>


	<option value="<?php echo $row['v_id']; ?> "> <?php echo $name;?></option>


<?php
}
?>

</select>
<br><br>
Event
<select name="event">
<option value="111">ALL</option>
<?php
$result = mysqli_query($conn,$select_event);
while($row = mysqli_fetch_array($result))
  {
    $name = $row['e_name'];
?>
<html>
<body>


	<option value="<?php $row['e_id']; ?> "> <?php echo $name;   ?></option>


<?php
}
?>
</select>
<br><br>Start Date<input type="date" name="start_date" />
<br><br>End Date<input type="date" name="end_date" />
<br><br><input type="submit" name="submit" value="submit" />

</form>
</body>
</html>
