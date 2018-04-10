<?php
include 'checklogin.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Volunteer</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">

  </head>
  <body>

      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">

                <h1>Add Volunteer</h1>

            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Enter Volunteer details</h2>
            <form action="registervolunteer.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">

            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label >Email</label>
					<input type="email" name="vol_email" class="form-control" required />
                </div>
                 <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Password</label>
                    <input type="password" name="vol_pass" class="form-control" required />
                </div>
            </div>

              <div class="row form-group">

                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputSport">Name</label> <br>
					          <input type="text" class="form-control" name="vol_name" required />
                  </div>

                   <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Roll Number</label>
                    <input type="number" class="form-control" name="vol_roll" required />
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Phone Number</label>
                    <input type="number" class="form-control" name="vol_phone" required />
                </div>


 			<div class="col-lg-6 col-md-6 form-group">
                    <label for="inputBusNum">Department</label>
					<select name="department" class="form-control">
					<?php
					$sp_query = "SELECT * FROM department";
					$sp_res = mysqli_query($conn,$sp_query);
					if(mysqli_num_rows($sp_res)<=0)
					{
						?>
						<option value="0">No Option Available</option>
					<?php
					}
					else
					{

						while($dept = mysqli_fetch_array($sp_res))
						{

						?>
						<option value="<?php echo $dept['dept_id'];?>" > <?php echo $dept['dept_name'];?> </option>
						<?php

						}
					}
					?>
				</select>
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
