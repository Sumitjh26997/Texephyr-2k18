 <?php
 include 'checklogin.php' ;
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
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Fixtures</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
   
  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
     



	 <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Summit '16</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/summit.png" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        
        
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
        </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="#" class="active"><i class="fa fa-calendar fa-fw"></i>Fixtures</a></li>
            <li><a href="transport.php"><i class="fa fa-bus fa-fw"></i>Transport</a></li>
            <li><a href="participant.php"><i class="fa fa-user fa-fw"></i>Participants</a></li>
            <li><a href="college.php" class=""><i class="fa fa-university fa-fw"></i>Colleges</a></li>
			<li><a href="sport.php" class=""><i class="fa fa-futbol-o fa-fw"></i>Sports</a></li>
            <li><a href="signout.php"><i class="fa fa-eject fa-fw"></i>Sign Out</a></li>
          </ul>  
        </nav>
      </div>
	  
	  
	  
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
			<h1>Fixtures</h1><br>
			<ul class="text-uppercase">
                <li><a class="userd_signup" href="newfixture.php">Add</a></li>
              </ul>
            </nav> 
          </div>
        </div>
		<?php 



//$search=$_POST["searchterm"];
$select="select * from match_table order by date DESC";
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
		
		$s_id = $row['sport_id'];
		$t1_id = $row['team1_id'];
		$t2_id = $row['team2_id'];
		$sport_name = getName("sport_table","sport_id",$s_id,$conn,"sport_name");
        $sport_type = getName("sport_table","sport_id",$s_id,$conn,"sport_type");
		//echo $sport_name;
		$team1= getName("college_table","college_id",$t1_id,$conn,"college_name");
	//	echo $team1;
		$team2= getName("college_table","college_id",$t2_id,$conn,"college_name");
		$score= " ";
		$match_st=" ";
		if($row['match_status']==1)
		{
			$score ="N/A";
			
		}
		else{
			$score=$row['score'];
		}
		
		


?>
          <div class="templatemo-content-widget white-bg col-2" >
			<form action="editfixture.php" method="post">
              <i class="fa fa-times"></i>
              <div class="square"></div>
			   <h2 class="templatemo-inline-block"><?php echo $team1." VS ".$team2; ?></h2>
               <br><br>
                <h3><?php if($sport_type==2) echo $row['participant1_name']." VS ".$row['participant2_name']; ?></h3>
			   <h3><?php echo $sport_name; ?></h3>
			   <h3>Score:<?php echo $score; ?></h3>
				<h3>Date: <?php echo $row['date']."@".$row['time']; ?></h3>
				<h3>Venue: <?php echo $row['venue']; ?></h3><br>
			   <input type="hidden" name="match_id" value="<?php echo $row['match_id'];?>"</input>
			  <input type="submit" class="templatemo-blue-button" value="  Edit   " name="s"></input><br><br>
			</form>
            <form action="deletefixture.php" method="POST">
                <input type="hidden" name="match_id" value="<?php echo $row['match_id'];?>" </input>
                <input type="submit" class="templatemo-blue-button" value="Delete" name="delete"></input>
              </form>
            </div>
<?php
	}
}
?>


 <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>        <!-- jQuery -->
    <script type="text/javascript" src="js/bootstrap-filestyle.min.js"></script>  <!-- http://markusslima.github.io/bootstrap-filestyle/ -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>        <!-- Templatemo Script -->
</body>
</html>

<?php mysqi_close(); ?>