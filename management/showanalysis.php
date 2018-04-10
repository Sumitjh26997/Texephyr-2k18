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

$vol_id = $_POST['volunteer'];
$event_id = $_POST['event'];
$startDate = $_POST['start_date'];
$endDate = $_POST['end_date'];


if($vol_id==0){
  $volunteer = "ALL";
}
else
  $volunteer = getName("volunteer","v_id",$vol_id,$conn,"v_name");
if ($event_id==0) {
  $event = "ALL";
}
else
  $event = getName("event","e_id",$event_id,$conn,"e_name");
if($vol_id != 0 && $event_id != 0){
    $query="Select * from registration where `r_volunteer_id` = '".$vol_id."' AND `r_event_id` = '".$event_id."' AND `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
}
else if($vol_id != 0){
    $query="Select * from registration where `r_volunteer_id` = '".$vol_id."' AND `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
}
else if( $event_id != 0){
  $query="Select * from registration where `r_event_id` = '".$event_id."'  AND `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
}
  else {
    $query  = "Select * from registration where `r_date` BETWEEN '".$_POST['start_date']."' AND '".$_POST['end_date']."'  AND r_status_del = 0   ";
  }

?>



<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Registrations</title>
   <meta name="description" content="">
   <meta name="author" content="templatemo">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
   <link href="css/font-awesome.min.css" rel="stylesheet">
   <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="css/templatemo-style.css" rel="stylesheet">
 </head>
 <body>
   <!-- Left column -->


       <header class="templatemo-site-header">
         <div class="square"></div>
         <h1>Texephyr '18</h1>
       </header>

        <!-- <img src="images/summit.png" alt="Profile Photo" class="img-responsive">  -->


    <!-- Main content -->
     <div class="templatemo-content col-1 light-gray-bg">


       <div class="templatemo-top-nav-container">
         <div class="row">
           <nav class="templatemo-top-nav col-lg-12 col-md-12">
             <h1>Analysis Results:</h1><br>
             <h3> VOLUNTEER: <?php echo $volunteer; ?> <br> EVENT:<?php echo $event; ?><br> FROM: <?php echo $startDate; ?> TO:<?php echo $endDate ;?> </h3>
             <br />
           </nav>

         </div>
       </div>
       <?php
        if(mysqli_num_rows($result)<=0)
        {
          ?>
           <div class="templatemo-content-widget white-bg col-2" >
             <i class="fa fa-times"></i>
             <div class="square"></div>
             <h2 class="templatemo-inline-block">No Results Found</h2>
           </div>

     <?php
      }
      else
      {
        while($row = mysqli_fetch_array($result))
        {
          $r_id = $row['r_id'];
          $r_e_id = $row['r_event_id'];
          $r_v_id = $row['r_volunteer_id'];
          $name = $row['r_p_name'];
          $id = $row['r_id'];
          $r_p_college_id = $row['r_p_college_id'];
          $phone = $row['r_p_phone'];
          $registrationDate = $row['r_date'];
          $registrationTime = $row['r_time'];
          $college = getName("college","c_id",$r_p_college_id,$conn,"c_name");
          $event = getName("event","e_id",$r_e_id,$conn,"e_name");
          $volunteer = getName("volunteer","v_id",$r_v_id,$conn,"v_name");

?>
  <div class="templatemo-content-widget white-bg col-2" >
    <form action="editregistration.php" method="post">
      <i class="fa fa-times"></i>
      <div class="square"></div>
      <h2 class="templatemo-inline-block">Registration ID:<?php echo $r_id; ?></h2>
      <br><br>
      <h3>
        <table>
          <tr><td>Participant Name </td><td align="center" style="width:20px">:</td><td><?php echo $name; ?></td></tr>
          <tr><td>Event Name </td><td align = "center" style="width:20px">:</td><td><?php echo $event; ?></tr>
            <tr><td>College </td><td align="center" style="width:20px">:</td><td><?php echo $college; ?></td></tr>
            <tr><td>Volunteer </td><td align="center" style="width:20px">:</td><td><?php echo $volunteer; ?></td></tr>
            <?php
            $phpdate = strtotime( $registrationDate." ".$registrationTime );
            $mysqldate =   date( 'Y-m-d H:i:s', $phpdate );

            ?>

            <tr><td>Registration Date </td><td align="center" style="width:20px">:</td><td><?php echo $mysqldate; ?></td></tr>

       </table>
       <br>
       <table>
         <tr>
           <td>
             <input type="hidden" name="id" value="<?php echo $id;?>"</input>
             <input type="submit" class="templatemo-blue-button" value="  Edit   " name="edit"></input>
            </form>
          </td>
          <td style="width:50px;"></td>
          <td>
           <form action="deleteregistration.php" method="POST">
               <input type="hidden" name="id" value="<?php echo $id;?>"</input>
               <input type="submit" class="templatemo-blue-button" value="Delete" name="delete"></input>
             </form>
           </td>
           <td style="width:50px;"></td>
          <td>
            <form action="detail_registration.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $id;?>"</input>
              <input type="submit" class="templatemo-blue-button" value="Details" name="detail"></input>
            </form>
          </td>
        </tr>
      </table>
      </h3>
      </div>
    </div>

<?php
 }
}
?>

</body>
</html>

<?php mysqli_close($conn); ?>
