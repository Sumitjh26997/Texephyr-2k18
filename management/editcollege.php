<?php
include 'checklogin.php';
$id=$_POST['id'];

  $select = "select * from college where c_id = $id ";
  $result = mysqli_query($conn,$select);
  $row = mysqli_fetch_array($result);
  $name=$row['c_name'];
  $place=$row['c_place'];

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit College Details</title>
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

                <h1>Edit College Details</h1>

            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            <h2 class="margin-bottom-10">Edit College Details</h2>
            <form action="updatecollege.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              <input type="hidden" name="id"  value="<?php echo $id; ?>" >
              <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Name</label>
                    <input type="text" name="c_name" class="form-control" value="<?php echo $name; ?>" required />
                </div>
                 <div class="col-lg-6 col-md-6 form-group">
                    <label for="inputLoc">Address</label>
                    <input type="text" name="c_place" class="form-control" value="<?php echo $place; ?>" required />
                </div>
              </div>
			       </div>

              <div class="form-group">
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
