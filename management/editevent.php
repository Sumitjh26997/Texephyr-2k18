<?php
  include 'checklogin.php';
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
  $id = $_POST['id'];


  $select = "select * from event where e_id = $id ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);

//Event Details retrieved
  $eventName = $row['e_name'];
  $eventDescription = $row['e_description'];
  $eventFees = $row['e_fees'];
  $eventNumberParticipants = $row['e_participant_no'];
  $eventDate = $row['e_date'];
  $eventTime = $row['e_time'];
  $eventHead = $row['e_head'];
  $eventHeadNumber = $row['e_head_phone'];
  $eventRoundNumber = $row['e_round'];


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Event</title>
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
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
                <h1>Edit Event</h1>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Edit Event details</h2>
            <form action="updateevent.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <input type ="hidden" value="<?php echo $id; ?>" name="id">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputEvent">Name</label>
					          <input type="text" name="eventName" value = "<?php echo $eventName;?>" class="form-control" required />
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Registration Fees</label>
                    <input type="number" name="eventFees" class="form-control" value = "<?php echo $eventFees;?>" required  />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputEvent">Event Head</label>
                    <input type="text" name="eventHead"   value ="<?php echo $eventHead;?>" class="form-control" required  />
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Phone Number</label>
                    <input type="number" name="eventHeadNumber" class="form-control" value ="<?php echo $eventHeadNumber;?>" required  />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Date</label>
                    <input type="date" class="form-control" name="eventDate" value ="<?php echo $eventDate;?>" required />
                  </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Timing</label>
                    <input type="time" class="form-control" name="eventTime" value ="<?php echo $eventTime;?>" required />
                </div>
            </div>
			  <div class="row form-group">
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputSport">Number Of Participants</label> <br>
              <input type="number" class="form-control" name="eventParticipantNumber" value ="<?php echo $eventNumberParticipants;?>" required />
          </div>
           <div class="col-lg-6 col-md-6 form-group">
               <label for="inputLoc">Event Number Of rounds</label>
              <input type="number" name="eventRoundNumber" value ="<?php echo $eventRoundNumber;?>" class="form-control" required  />
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputSport">Description</label> <br>
              <input type="text" class="form-control" name="eventDescription"  value ="<?php echo $eventDescription;?>" required />
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
