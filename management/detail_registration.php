 <?php
  include 'checklogin.php' ;
   $id=$_POST['id'];

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
  <h1>Registration ID: <?php echo $id; ?> </h1><br>



        </form>
            </nav>

          </div>
        </div>
    <?php



  $select="select * from registration where `r_status_del` = 0 AND `r_id`='".$id."'  ";



$result = mysqli_query($conn,$select);

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
          <div class="templatemo-content-widget white-bg col-2" >
      <form action="editregistration.php" method="post">
              <i class="fa fa-times"></i>
              <div class="square"></div>
        <h2 class="templatemo-inline-block"><?php echo $name; ?></h2>
         <br><br><h3>
         <table>

        <tr><td>Event  </td><td align="center" style="width:20px">:</td><td><?php echo $event; ?></td></tr>
        <tr><td>Registration Fees </td><td align="center" style="width:20px">:</td><td><?php echo $registrationFees; ?></td></tr>
        <tr><td>Registration Paid </td><td align="center" style="width:20px">:</td><td><?php echo $registrationPaid; ?></td></tr>
        <tr><td>Phone </td><td align="center" style="width:20px">:</td><td><?php echo $phone; ?></td></tr>
        <tr><td>College </td><td align="center" style="width:20px">:</td><td><?php echo $college; ?></td></tr>

        <tr><td>Volunteer </td><td align="center" style="width:20px">:</td><td><?php echo $volunteer; ?></td></tr>
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
        </div>
<?php
  }

}
?>

</body>
</html>

<?php mysqli_close($conn); ?>
