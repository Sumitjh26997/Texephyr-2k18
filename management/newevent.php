<?php
  include 'checklogin.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Event</title>
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
                <h1>Add Event</h1>
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Enter Event details</h2>
            <form action="registerevent.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputEvent">Name</label>
					          <input type="text" name="eventName" class="form-control" placeholder="Enter the name of the event/workshop" required />
                </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Registration Fees</label>
                    <input type="number" name="eventFees" class="form-control" placeholder="Enter the registation fees of the event/workshop" required />
                </div>
            </div>
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputEvent">Event Head</label>
          <input type="text" name="eventHead" placeholder="Enter the name of the event/workshop head" class="form-control" required />
                </div>
                 <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Phone Number</label>
                    <input type="number" name="eventHeadNumber" placeholder="Enter the number of the event/workshop head" class="form-control" required />
                </div>
            </div>



              <div class="row form-group">
                  <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Date</label>
                    <input type="date" class="form-control" name="eventDate" required />
                  </div>
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Timing</label>
                    <input type="time" class="form-control" name="eventTime" required />
                </div>

              </div>
			  <div class="row form-group">
          <div class="col-lg-6 col-md-6 form-group">
              <label for="inputSport">Number Of Participants</label> <br>
              <input type="number" class="form-control" placeholder="Enter the  number of participants" name="eventParticipantNumber" required />
          </div>

           <div class="col-lg-6 col-md-6 form-group">
              <label for="inputLoc">Event Number Of rounds</label>
              <input type="number" name="eventRoundNumber" placeholder="Enter '0' for workshops" class="form-control" required />
          </div>
        </div>

  <div class="row form-group">
    <div class="col-lg-6 col-md-6 form-group">
        <label for="inputSport">Description</label> <br>
        <input type="text" class="form-control" placeholder="Describe the event/workshop here" name="eventDescription" required />
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
