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

  
$select_vol="select * from volunteer";
$select_event = "select * from event";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
	
  </head>
  <body>
    <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Texephyr '18</h1>
        </header>
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
                
                <h1>Registration</h1>
              
            </nav>
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget white-bg">
            
            <form action="form_vol.php" class="templatemo-login-form" method="post" enctype="multipart/form-data">
              
            <div class="row form-group">
                <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLoc">Volunteer</label>
                    <br>
                    <select name="volunteer">
                    <option value="222">ALL</option>
					

<?php
$result = mysqli_query($conn,$select_vol);
while($row = mysqli_fetch_array($result))
  {
    $name = $row['v_name'];
?>

  <option value="<?php echo $row['v_id']; ?> "> <?php echo $name;?></option>

  <?php
}
?>

</select>
                </div>
                 <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLoc">Event</label>
                   <br>

<select name="event">
<option value="111">ALL</option>
<?php
$result = mysqli_query($conn,$select_event);
while($row = mysqli_fetch_array($result))
  {
    $name = $row['e_name'];
?>

<option value="<?php echo$row['e_id']; ?> "> <?php echo $name;   ?></option>


<?php
}
?>


                </div> 
            </div>

              <div class="row form-group">
                             
                <div class="col-lg-6 col-md-6 form-group">       
                    <label for="inputSport">Start Date</label> <br>
					<input type="date" name="start_date" />  
                  </div> 

                   <div class="col-lg-6 col-md-6 form-group">                  
                    <label for="inputLoc">End Date</label>
                    <input type="date" name="end_date" />
                </div> 
              </div>
			 
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