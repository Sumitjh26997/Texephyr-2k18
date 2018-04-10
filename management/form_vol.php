
<?php
include 'checklogin.php';
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


$vol_id = $_POST['volunteer'];
$event_id = $_POST['event'];

if($vol_id != 0 && $event_id != 0){
    $query="Select * from registration where `r_v_id` = '".$vol_id."' AND `r_e_id` = '".$event_id."' AND `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
}
else if($vol_id != 0){
    $query="Select * from registration where `r_v_id` = '".$vol_id."' AND `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
}
else if( $event_id != 0){
  $query="Select * from registration where `r_e_id` = '".$event_id."'  AND `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
}
  else {
    $query  = "Select * from registration where `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
  }
//echo $query;
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
  {

    $r_e_id = $row['r_event_id'];
    $r_v_id = $row['r_volunteer_id'];
    $name = $row['r_p_name'];
    $id = $row['r_id'];
    $r_p_college_id = $row['r_p_college_id'];
    $phone = $row['r_p_phone'];
    $registrationFees=$row['r_fees'];
    $registrationPaid = $row['r_paid'];
    $registrationPartialStatus = $row['r_partial_status'];
    $registrationDate = $row['r_date'];
    $registrationTime = $row['r_time'];
    $college = getName("college","c_id",$r_p_college_id,$conn,"c_name");
    $event = getName("event","e_id",$r_e_id,$conn,"e_name");
    $volunteer = getName("volunteer","v_id",$r_v_id,$conn,"v_name");
?>
   <table>

        <tr><td>Volunteer </td><td align="center" style="width:20px">:</td><td><?php echo $r_v_id; ?></td></tr>
        <tr><td>College </td><td align="center" style="width:20px">:</td><td><?php echo $r_p_college_id; ?></td></tr>
        <tr><td>Participant Name </td><td align="center" style="width:20px">:</td><td><?php echo $name; ?></td></tr>
        <tr><td>Phone </td><td align="center" style="width:20px">:</td><td><?php echo $phone; ?></td></tr>
        <tr><td>Registration Fees </td><td align="center" style="width:20px">:</td><td><?php echo $registrationFees; ?></td></tr>
        <tr><td>Registration Paid </td><td align="center" style="width:20px">:</td><td><?php echo $registrationPaid; ?></td></tr>
<?php
$phpdate = strtotime( $registrationDate." ".$registrationTime );
$mysqldate = date( 'Y-m-d H:i:s', $phpdate );

?>

        <tr><td>Registration Date </td><td align="center" style="width:20px">:</td><td><?php echo $mysqldate; ?></td></tr>



        </table></h3>
        <br><table><tr><td>
         <input type="hidden" name="id" value="<?php echo $id;?>"</input>
        <input type="submit" class="templatemo-blue-button" value="  Edit   " name="s"></input>
        </form></td><td style="width:50px;"></td>
        <br><td>
            <form action="deleteregistration.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $id;?>"</input>
                <input type="submit" class="templatemo-blue-button" value="Delete" name="delete"></input>
              </form></td><td style="width:50px;"></td>
                </tr></table>





<?php
}
?>
