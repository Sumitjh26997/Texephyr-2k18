<?php
  include 'checklogin.php';
  $id=$_POST['id'];
  //echo $id;
  function getName($table,$param,$value,$conn,$req) {
  $select = "select * from $table where $param = $value ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);
  $name =  $row["$req"];
  //echo $name;
  if(mysqli_num_rows($result)>0)
  {
    return $name;
  }
  else {
    return 0;
  }
}





  $select = "select * from registration where `r_id` = '".$id."' ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);
  $registrationID = $row['r_id'];
  $eventID=$row['r_event_id'];
  $volunteerID=$row['r_volunteer_id'];
  $participantName=$row['r_p_name'];
  $participantCollegeID=$row['r_p_college_id'];
  $participantPhone=$row['r_p_phone'];
  $registrationFees=$row['r_fees'];
  $registrationPaid = $row['r_paid'];
  $registrationPartialStatus = $row['r_partial_status'];
  $registrationDate = $row['r_date'];
  $registrationTime = $row['r_time'];
  $registrationDeleteStatus = $row['r_status_del'];
  $volunteerName = getName("volunteer","v_id",$volunteerID,$conn,"v_name");
//  $eventName = getName("event","e_id",$eventID,$conn,"e_name");
  $participantCollegeName = getName("college","c_id",$participantCollegeID,$conn,"c_name");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Registration</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>
      <!-- Main content -->
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">

                <h1>Edit Registration Details</h1>

            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">

            <form action="updateregistration.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id"  value="<?php echo $registrationID; ?>" >
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Registration ID</label><br>
 <input type="text" class="form-control" name="registrationID" value="<?php echo $registrationID; ?>" disabled />

                </div>
                 <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Volunteer Name</label><br>
                     <input type="text" class="form-control" name="volunteerName" value="<?php echo $volunteerName; ?>" disabled />

                </div>
            </div>

              <div class="row form-group">


                <div class="col-lg-6 col-md-6 form-group">
                  <label for="inputBusNum">Event</label>
                   <select name="event" class="form-control">
                   <?php
                   $sp_query = "SELECT * FROM event";
                   $sp_res = mysqli_query($conn,$sp_query);
                   if(mysqli_num_rows($sp_res)<=0)
                   {
                     ?>
                     <option value="0">No Option Available</option>
                   <?php
                   }
                   else
                   {

                     while($dept1 = mysqli_fetch_array($sp_res))
                     {

                     ?>
                     <option value="<?php echo $dept1['e_id'];?>"

                       <?php

                         if($eventID==$dept1['e_id'])
                             echo "selected";

                     ?> >
                     <?php echo $dept1['e_name']; ?>
                   </option>
                     <?php

                     }
                   }
                   ?>
                 </select>
                </div>

                <div class="col-lg-6 col-md-6 form-group">
                    <label>Registration Time</label> <br>
<?php
$phpdate = strtotime( $registrationDate." ".$registrationTime );
$mysqldate = date( 'Y-m-d H:i:s', $phpdate );

?>

 <input type="text" class="form-control" name="registration_date_time" value="<?php echo $mysqldate ; ?>" disabled />

                </div>
              </div>

			  <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Participant Name</label>
                    <input type="text" class="form-control" name="participantName" value="<?php echo $participantName; ?>" required />
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Participant Number</label>
                    <input type="number" class="form-control" name="participantNumber" value="<?php echo $participantPhone; ?>" required />
                </div>
			</div>

      <div class="row form-group">
          <div class="col-lg-6 col-md-6 form-group">
            <label for="inputLoc">Registration Fees</label>
            <input type="number" class="form-control" name="registrationFees" value="<?php echo $registrationFees; ?>" required />
          </div>
          <div class="col-lg-6 col-md-6 form-group">
            <label for="inputLoc">Registration Paid</label>
            <br>
            <input type="text" class="form-control" name="registrationPaid" value="<?php echo $registrationPaid; ?>" disabled />
          </div>
      </div>

              <div class="form-group text-">
                <input type="submit" class="templatemo-blue-button"></input>
              </div>

            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
  </body>
</html>
