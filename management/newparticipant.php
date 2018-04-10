<?php
include 'checklogin_vol.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Registration</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet'
          type='text/css'>
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
                <h1>New Registration</h1>
            </nav>
        </div>
    </div>
    <div class="templatemo-content-container">
        <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Enter Participant details</h2>
            <form action="registerparticipant.php" class="templatemo-login-form" method="post"
                  enctype="multipart/form-data">

                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputEvent">Name</label>
                        <input type="text" name="pName" class="form-control"
                               placeholder="Name of Participant" required/>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputEvent">Event Name</label>
                        <br>
                        <select name="eventId" class="form-control">
                            <option disabled selected value> -- select an option -- </option>

                            <?php
                            $result = mysqli_query($conn, "select * from event");
                            while ($row = mysqli_fetch_array($result)) {
                                $name = $row['e_name'];
                                ?>

                                <option value="<?php echo $row['e_id']; ?> "> <?php echo $name; ?></option>

                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputEvent">Email</label>
                        <input type="text" name="pMail" class="form-control"
                               placeholder="Email of Participant" required/>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">Number of Participants</label>
                        <input type="number" name="pNumber" placeholder="Enter number of participants."
                               class="form-control" required/>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputSport">Current year</label> <br>
                        <select class="form-control" name="academicYear" required >
                            <option disabled selected value> -- select an option -- </option>
                            <option value="1">1st year</option>
                            <option value="2">2nd Year</option>
                            <option value="3">3rd Year</option>
                            <option value="4">4th Year</option>
                        </select>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">Total Fees</label>
                        <input type="number" name="totalFees" class="form-control"
                               placeholder="Total Fees of the event." required/>
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">Fees Paid</label>
                        <input type="number" name="paidFees" class="form-control"
                               placeholder="Fees paid by the participant." required/>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputEvent">Select College</label>
                        <select name="pCollegeId" class="form-control">
                            <option disabled selected value> -- select an option -- </option>

                            <?php
                            $result = mysqli_query($conn, "select * from college");
                            while ($row = mysqli_fetch_array($result)) {
                                $name = $row['c_name'];
                                ?>

                                <option value="<?php echo $row['c_id']; ?> "> <?php echo $name; ?></option>

                                <?php
                            }
                            ?>
                        </select>

                    </div>
                    <div class="col-lg-6 col-md-6 form-group">

                        <label for="inputEvent">College Name (If Not in list...)</label>
                        <input type="text" name="pCollege" class="form-control"
                               placeholder="College of Participant." />
                    </div>
                    <div class="col-lg-6 col-md-6 form-group">
                        <label for="inputLoc">Phone Number</label>
                        <input type="number" name="pPhone"
                               placeholder="Phone number of participant." class="form-control" required/>
                    </div>
                </div>

                <div class="form-group text-">
                    <input type="submit" class="templatemo-blue-button"/>
                </div>

            </form>
        </div>
    </div>
</div>
</div>

<!-- JS -->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
<script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>
<!-- http://markusslima.github.io/bootstrap-filestyle/ -->
<script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
</body>
</html>
