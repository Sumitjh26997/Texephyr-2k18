<?php
include 'checklogin.php';
$id=$_POST['id'];



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





  $select = "select * from volunteer where v_id = $id ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);
  $name=$row['v_name'];
  $roll=$row['v_roll'];
  $phone=$row['v_phone'];
  $pass=$row['v_password'];
  $email=$row['v_email'];
  $dept=$row['v_dept_id'];
  $department = getName("department","dept_id",$dept,$conn,"dept_name");

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

                <h1>Edit Volunteer Details</h1>

            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Edit Volunteer details</h2>
            <form action="updatevolunteer.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id"  value="<?php echo $id; ?>" >
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Email</label>
                    <input type="email" name="vol_email" class="form-control" value="<?php echo $email; ?>" required />
                </div>
                 <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Password</label>
                    <input type="password" name="vol_pass" class="form-control" value="<?php echo $pass; ?>" required />
                </div>
            </div>

              <div class="row form-group">

                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputSport">Name</label> <br>
					<input type="text" class="form-control" name="vol_name" value="<?php echo $name; ?>" required />
                  </div>

                   <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Roll Number</label>
                    <input type="number" class="form-control" name="vol_roll" value="<?php echo $roll; ?>" required />
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Phone Number</label>
                    <input type="number" class="form-control" name="vol_phone" value="<?php echo $phone; ?>" required />
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

						while($dept1 = mysqli_fetch_array($sp_res))
						{

						?>
						<option value="<?php echo $dept1['dept_id'];?>"

              <?php

                if($dept==$dept1['dept_id'])
                    echo "selected";

            ?> >
            <?php echo $dept1['dept_name']; ?>
          </option>
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
