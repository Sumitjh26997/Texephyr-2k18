<?php
include "management/mysqlconnection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <style type="text/css">
    .btn1{
      color:#f57f20;
      border:2px solid #f57f20;
      border-radius: 4px;
      background: #fff;
      padding: 10px;
      font-size: 19px;
      padding-left: 14px;
      padding-right: 14px;
      font-family: Helvetica;
    }
    .btn1:hover
    {
      color: white;
      background: #f57f20;
    }
  </style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Texephyr 2018</title>
<meta name="description" content="">
<meta name="author" content="Texephyr 2018">

<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#f57f20">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#f57f20">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#f57f20">

<style type="text/css">

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   /* -webkit-transition: all 1.0s ease-in-out;
    -o-transition: all 1.0s ease-in-out;
    transition: all 1.0s ease-in-out;*/
    animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}
}

/* Modal Content */
.modal-content {
    /*background-color: #fefefe;*/
    margin: 5% 10% 10% 10%;
    padding: 20px;
    border: 1px solid #888;
    height: 80%;
    width: 80%;
    overflow: auto;
  background-color:#006600;
  font-family: calibri;
  /*-webkit-transition: all 1.0s ease-in-out;
    -o-transition: all 1.0s ease-in-out;
    transition: all 1.0s ease-in-out;*/
    animation:animatezoom 0.6s}@keyframes animatezoom{from{transform:scale(0)} to{transform:scale(1)}
}

.modal span{
	font-size: 35px;
	padding-left: 15px;
	padding-right: 15px;
	font-weight: bold;
	color: grey;
	border-radius: 50%;
	-webkit-transition: all 0.1s ease-in-out;
    -o-transition: all 0.1s ease-in-out;
    transition: all 0.1s ease-in-out;
}

.modal span:hover{
	color: #f57f20;
	background-color: #DEDFD1;
}

.video-container {
  position:relative;
  padding-bottom:56.25%;
  padding-top:30px;
  height:0;
  overflow:hidden;
}

.video-container iframe, .video-container object, .video-container embed {
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
}

.fcontrol {
  display: block;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 2px;
  -webkit-box-shadow: none;
  box-shadow: none;
  -webkit-transition: none;
  -o-transition: none;
  transition: none;
  width: 100%;
}
.fcontrol:focus {
  border-color: inherit;
  outline: 0;
  -webkit-box-shadow: transparent;
  box-shadow: transparent;
}
</style>

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/tx.png" type="image/x-icon">
<!-- <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
 -->
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">

<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --> 


<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
</head>
<body>
<div class="preloader">

	<div class="sk-rotating-plane"></div>

</div>
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><img style="height:45px;width:45px;position: absolute;top: 8px;" src="img/tx2.png"></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home" class="page-scroll">Home</a></li>
        <li><a href="#about-section" class="page-scroll">About</a></li>
        <li><a href="#works-section" class="page-scroll">Events</a></li>
        <!-- <li><a href="#services-section" class="page-scroll">Sponsors</a></li> -->
        <li><a href="#gallery-section" class="page-scroll">Gallery</a></li>
        <li><a href="#team-section" class="page-scroll">Team</a></li>
        <li><a href="#contact-section" class="page-scroll">Contact</a></li>
        <li style="cursor: pointer;"><a onclick="document.getElementById('register').style.display='block'" class="page-scroll">Registration</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Form -->
<div id="register" class="modal">

    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('register').style.display='none'">&times;</span><br><br>
    <div class="section-title text-center center">
      <h2 style="font-size: 26px;">Registration Form</h2>
      <hr>
     <!--  <div class="clearfix"></div> -->
    </div>
<script type="text/javascript">
  function form_submit() {
    $('#errn').html("");
    $('#erre').html("");
    $('#errc').html("");
    $('#errev').html("");
    $('#errco').html("");

    var name=document.getElementById("name").value;
    var email=document.getElementById("email").value;
    var contact=document.getElementById("contact").value;
    var college=document.getElementById("college").value;
    var event=document.getElementById("event").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

    if(name=="")
    {
      document.getElementById("name").focus();
      $('#errn').html("<strong>Enter your name</strong>");
      return false;
    }
    if(email=="")
    {
      document.getElementById("email").focus();
      $('#erre').html("<strong>Enter your email</strong>");
      return false;
    }
    if (!filter.test(email)) 
    {
      document.getElementById("email1").focus();
      $('#erre').html("<strong>Enter a valid email-id</strong>");
      return false;
    }
    if(contact=="")
    {
      document.getElementById("contact").focus();
      $('#errc').html("<strong>Enter your contact no.</strong>");
      return false;
    }
    if(contact.length<10)
    {
      document.getElementById("contact").focus();
      $('#errc').html("<strong>Enter a valid contact no.</strong>");
      return false;
    }
    if(college=="")
    {
      document.getElementById("college").focus();
      $('#errco').html("<strong>Enter your college</strong>");
      return false;
    }
    if(event=="")
    {
      document.getElementById("event").focus();
      $('#errev').html("<strong>Enter your event</strong>");
      return false;
    }
    
    $.ajax({
      url:"management/register.php",
      type:"post",
      data:{name:name,email:email,contact:contact,college:college,event:event},
      cache:false,
      success:function(res){
        $('#result').html(res);
        //clear all fields
        $('#m').trigger("reset");
      },
      error: function() {
                    // Fail message
      $('#result').html("<div class='alert alert-danger'>");
      $('#result > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
      $('#result > .alert-danger').append("<strong>Sorry, it seems that the server is not responding. Please try again later!");
      $('#result > .alert-danger').append('</div>');
                    //clear all fields
      $('#m').trigger("reset");
      },

    });
   }   

    function ValidateAlpha(evt)
    {
        var keyCode = (evt.which) ? evt.which : evt.keyCode;
        if(keyCode==32)
          return true;
        if ((keyCode < 65 || keyCode > 90) && (keyCode < 97 || keyCode > 123 ))
             return false;
      
        return true;
    }

  function isNumberKey(evt)
    {
        var charCode = (evt.which) ? evt.which : event.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
 
  </script>
 

<?php
      $sql="SELECT e_id,e_name from event";
      $sql1="SELECT c_id,c_name FROM college";

      $result=mysqli_query($conn,$sql);
      $result1=mysqli_query($conn,$sql1);
      
?>

    <form name="registration" id="m" method="post" autocomplete="off">
    <input type="text" name="name" id="name" class="fcontrol" placeholder="Name" onkeypress="return ValidateAlpha(event)" required>
    <br><div id="errn" class="alert-danger" style="background: white"></div>
    <br>
    <input type="email" name="email" id="email" class="fcontrol" placeholder="Email-id" required><br>
    <div id="erre" class="alert-danger" style="background: white"></div>
    <br>
    <input type="text" name="contact" id="contact" value="" placeholder="Phone no." class="fcontrol" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" required><br>
    <div id="errc" class="alert-danger" style="background: white"></div>
    <br>
    <select name="college" class="fcontrol" id="college" required>

  <option disabled="true" selected="true" value="" >Select your college</option>
  <?php
    while ($row1=mysqli_fetch_assoc($result1)) 
    {
  ?>
  <option value="<?php echo $row1['c_id'] ?>"><?php echo $row1['c_name'] ?></option>
<?php
}
?>

</select><br>
<div id="errco" class="alert-danger" style="background: white"></div>
<br>
     
<select name="event" class="fcontrol" id="event" required>

  <option disabled="true" selected="true" value="" >Select an event</option>
  <?php
    while ($row=mysqli_fetch_assoc($result)) 
    {
  ?>
  <option value="<?php echo $row['e_id'] ?>"><?php echo $row['e_name'] ?></option>
<?php
}
?>

</select><br>
<div id="errev" class="alert-danger" style="background: white"></div>
<br>
    <div id="result"></div>
   <div class="section-title text-center center">
       <button type="button"  onclick="form_submit()" form="m" class="btn1">Register</button>
      <div class="clearfix"></div>
    </div>
 </table>
</form>
 
  </div>
</div>
<!-- Header -->
<header class="text-center" name="home">
  <div class="intro-text">
      <img src="img/texmain.png" style="max-height:45%;max-width:50%;background: rgba(248,248,248,0);padding-top: 10px;padding-right: 8px;padding-left: 8px;border-radius: 9%;"> 
      <!-- <img src="img/DATES.png" style="max-height:45%;max-width:50%;background: rgba(248,248,248,0);padding-top: 10px;padding-right: 8px;padding-left: 8px;border-radius: 9%;"> --> 
  </div>
</header>

<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About Us</h2>
      <hr>
      <div class="clearfix"></div>
      <p><strong>TEXEPHYR</strong><span style="font-weight: 400;"> is MIT Pune&rsquo;s National level technical fest.
    </div>
    <div class="row">
      <div class="col-md-6"> <div class="video-container"><iframe width="560" height="350" src="https://www.youtube.com/embed/4LIB-wndzjo?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div> </div>
      <div class="col-md-6">
        <div class="about-text">
          Texephyr&rsquo;17 witnessed participations in huge numbers in a varied array of technical and non-technical events</span><strong>. IDRL being held for the first time in Maharashtra &amp; Rally Mania </strong><span style="font-weight: 400;">were the star attraction of our event</span><strong>.</strong><span style="font-weight: 400;"> Texephyr has been inspiring the minds of young students, igniting them to conquer the challenges faced today and innovating solutions that will flow a fresh wind of change for development of society as well as themselves. To encourage more participation and inculcate knowledge there was a large sum of cash prize. Enthralling workshops by</span> <strong><em>CDAC, Skyfi Labs, Geek&rsquo;s Lab, F1 Race Participants</em></strong> <span style="font-weight: 400;">and many more were organised to upskill the students and expand their capabilities. </span></p>
          <p><span style="font-weight: 400;">Continuing our</span> <span style="font-weight: 400;">tradition we are back with the</span><strong> 5</strong><strong><sup>th</sup></strong><strong> edition TEXEPHYR&rsquo;18 </strong><span style="font-weight: 400;">to support &nbsp;&nbsp;&nbsp;</span><strong> A. P. J. Abdul Kalam&rsquo;s Vision 2020. </strong><span style="font-weight: 400;">Be a part of TEXEPHYR&rsquo;18 to indulge and witness this exciting festival.</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Achievements Section -->
<div id="achievements" class="section dark-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div class="achievement-box"> <span class="count">5000</span>
          <h4>Footfall</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="achievement-box"> <span class="count">21</span>
          <h4>No. of Events</h4>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="achievement-box"> <span class="count">3,50,000</span> 
          <h4>Total Prize Money</h4>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Our Events</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" class="active" onclick="unhide('2')" >Mechanical</a></li>
            <li><a href="#" onclick="unhide('3')" >Computer</a></li>
            <li><a href="#" onclick="unhide('4')" >E&TC</a></li>
            <li><a href="#" onclick="unhide('5')" >Workshops</a></li> 
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>


<div class="container" id="web_design" style="display: block;">
        <div class="portfolio-items">

        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item" style="cursor: pointer">
            <a onclick="document.getElementById('m1').style.display='block'">
            <div class="hover-bg">
              <div class="hover-text">
                <h4>Rally Mania</h4>
                <small>Why turn when you can drift!</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/RALLYMANIA.png" class="img-responsive" alt="Project Title">  </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item" style="cursor: pointer">
            <a onclick="document.getElementById('m2').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Mr. Mechanix</h4>
                <small>The only two things that interests a mechanical engineer, is a model and a model.
</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/m2.png" class="img-responsive" alt="Project Title">  </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item" style="cursor: pointer">
            <a onclick="document.getElementById('m3').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Contraption</h4>
                <small>A fat domino died, let's hope it doesn't set off a chain reaction</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/CONTRAPTION.png" class="img-responsive" alt="Project Title">  </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item" style="cursor: pointer">
            <div class="hover-bg"> 
            <a onclick="document.getElementById('m4').style.display='block'">
              <div class="hover-text">
                <h4>Designer Pro</h4>
                <small>The world doesn’t need superheroes, it needs incredible designers.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/DESIGNERPRO.png" class="img-responsive" alt="Project Title"> </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item" style="cursor: pointer">
          <a onclick="document.getElementById('m5').style.display='block'">
              <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Paparazzi</h4>
                <small>A fun fact-The only person a woman listens to is a Photographer.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/PAPARAZZI.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
    <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item" style="cursor: pointer">
          <a onclick="document.getElementById('m6').style.display='block'">
              <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Box Cricket</h4>
                <small>Keep Calm Aur De Ghumake!</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/CRICKET.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item" style="cursor: pointer">
          <a onclick="document.getElementById('m7').style.display='block'">
              <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Box Soccer</h4>
                <small>7 days without football makes one WEAK.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/SOCCER.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item" style="cursor: pointer">
          <a onclick="document.getElementById('m8').style.display='block'">
              <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Inquizzitive</h4>
                <small>Stay hungry, Stay foolish.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/INQUIZZITIVE.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        

      </div>
</div>

<div id="m1" class="modal" >
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m1').style.display='none'">&times;</span><br><br>
     <center><h2><strong>RALLY MANIA</strong></h2></center><br>
<p><strong>Max. No. Of Participants</strong>: 4</p>
<p><strong>Registration Fees</strong>: Rs 400/- per team (team with at least 2 SAE members)</p>
<p>Rs 500/- per team (team with Non SAE members)&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p><strong>No. of Rounds</strong>: 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION:</strong></p>
<p>For all those who believe in setting the place on fire! Here&rsquo;s a live experience of a racing tournament. Build your own remote controlled IC engine car and come on board! The operator will be given a ramp to stand on, giving visibility of the track and another team member will be allowed to assist him during the operation.</p>
<p>&nbsp;</p>
<p><strong>ARENA: </strong></p>
<li>The arena will be <strong>displayed later on the website</strong>.</li>
<li>Rough patches, slopes, obstacles, speed-breakers will be there on the race track.</li>
<p>&nbsp;</p>
<p><strong>SPECIFICATIONS of RC CARS:</strong></p>
<ul>
<li>The participants must use the vehicle of frequency of 2.4 GHz</li>
<li>The machine must not be made from readymade kits like LEGO or Mechano sets or any other kits available in the market.</li>
<li>However remote controls can be used from various model cars or toys or even those purchased from the market.</li>
<li>The machine may be roughly classified into structural and functional parts:</li>
</ul>
<ol>
<li><strong>FUNCTIONAL PARTS</strong> &ndash; Gears, differential gear shift, engine with clutch, pulley and pulley belt, springs, motors and servos (non propulsion purposes only), batteries, wheels and suspensions are allowed to be used as available in the market.</li>
<li><strong>STRUCTURAL PARTS</strong> - Chassis, body and body cover, steering mechanism have to be built by the participants themselves. Judging for the same will be strict and the participant will be immediately disqualified if any of the above structural components is found to be ready made.</li>
</ol>
<ul>
<li>The team must design the braking mechanism and the mounting suspension system. The body cover should be detachable so that the interior can be inspected. Note that the decision of the judges will be final and binding and any team found guilty of using ready made parts mentioned in this point will be disqualified.</li>
<li>The machine must be propelled forward using IC engines (<strong>Max power</strong> of 4 CC). But use of any other chemicals, compressed gas, rocket powered systems, DC motors or any other means as found dangerous by the organizers will not be allowed.</li>
<li>Start control mechanism: The start control mechanism must not provide any thrust to the vehicle along direction of motion of track. Those participants using IC engines must note that their starting mechanism must be removable and not interfere with the race.</li>
<li>The vehicle will be inspected before hand and will be disqualified if found dangerous by the judges.</li>
<li><strong>The participants may add some innovative mechanisms (Reverse Mechanism) in their car so as to get bonus points.</strong></li>
</ul>
<p><strong>&nbsp;</strong></p>
<p><strong>GENERAL RULES:</strong></p>
<ul>
<li>The participants must place their RC cars at the start line before start of the race. Any RC car starting beforehand will be given a warning and will be allowed to restart. However if they repeat the false start again then the run will be disqualified.</li>
<li>Only the operator shall stand on the controlling ramp.</li>
<li>Only One Member/Team shall be present in the arena.</li>
<li>Every time the vehicle needs to be lifted or reset either due to its stalling, tumbling or running off the track, it shall be placed at nearest previous checkpoint. The team will be disqualified if any damage to the track is observed.</li>
<li>The vehicle cannot be touched for any other reason barring those stated above.</li>
<li>The vehicle must remain intact throughout the race.</li>
<li>Teams will have to deposit their wireless remote controllers with the management while reporting every morning.</li>
<li><strong>No power supply will be given on the track.</strong></li>
<li>Teams are not allowed to purposefully damage the machine of the opponent&rsquo;s team. If doing so on track (while racing), the concerned team will get disqualified. Any team that is not competing in the right spirit and indulging in misbehavior will be disqualified. Execution of this rule will be subjective and relies completely on judge's discretion.</li>
<li>If the timelines are not strictly followed, the organizers shalldecide the consequences and the decision shall be final and binding to all teams.</li>
<li><strong>THE ORGANIZERS RESERVE THE RIGHTS TO CHANGE ANY OF THE ABOVE MENTIONED RULES AS THEY DEEM FIT.</strong></li>
</ul>
<p><strong>&nbsp;</strong></p>
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<ul>
<li>Any student with valid ID card of their educational institute can participate.</li>
<li>Each participant can be a part of one team only. If same participant is found as a member of more than one team, will lead to disqualification of both teams.</li>
</ul>

  </div>
</div>

<div id="m2" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m2').style.display='none'">&times;</span><br><br>
      <center><h2>MR.MECHANIX</h2></center>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. Of Team Members</strong>: 2</p>
<p><strong>Registration Fees</strong>: Rs 120/- (SAE member participants)</p>
<p>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs180/- (Non SAE member participants)</p>
<p><strong>No. of Rounds</strong>: 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION:</strong></p>
<p>For all those who want to see their ideas stand up tall! This event is a perfect blend of acknowledgement and analyzation of a concept. The event will mainly test your knowledge of the subjects namely SOM and applied mechanics. The final round will be based on model making.</p>
<p><strong>&nbsp;</strong></p>
<p><strong>GENERAL RULES:</strong></p>
<p><strong>EVENT FORMAT: </strong></p>
<p><strong>Round 1 (Elimination Round): </strong></p>
<ul>
<li>In this round, there will be a knowledge test consisting of <strong>Multiple Choice Questions (MCQ).</strong></li>
<li>MCQs will be based on Engineering Mechanics and Strength of material.</li>
<li>Test duration will be 40 minutes.</li>
</ul>
<p><strong>Round 2 (Final Round): </strong></p>
<ul>
<li>Teams which will crack Round 1 will compete in this <strong>model making </strong></li>
<li>An application based problem is to be solved and working model is a must to support their ideas.</li>
<li>All required material for model making will be provided by organizers.</li>
<li>Clear cut theoretical approach must be presented in a step-by-step manner.</li>
<li>Assessment of the model will also be done by the respective judges.</li>
<li>Top three Winners will be decided according to their marks scored in this particular round.</li>
</ul>
<p>&nbsp;</p>
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<p>Any student with valid ID card of their educational institute can participate.<strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></p>
<p>** Prize money may be subjected to change. Organisers reserve the right to change any rules.</p>

  </div>
</div>

<div id="m3" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m3').style.display='none'">&times;</span><br><br>
    <center><h2>CONTRAPTION</h2></center><br>
<p><strong>Max. No. Of Participants</strong>: 4</p>
<p><strong>Registration Fees</strong>: Rs 250/- per team</p>
<p><strong>No. of Rounds</strong>: 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION: </strong></p>
<p>For those of us, who are tired of straightforward algorithms- put on your thinking hats, and come up with all the bizarre and uncanny ideas you can think of to accomplish the most common tasks. A CONTRAPTION machine is a deliberately over-engineered machine that performs a very simple task in a very complex fashion, usually including a chain reaction. Instead of just &ldquo;solving&rdquo; the problem, team have to make the solution as complicated and as convoluted as possible. So go ahead, break the rules, defy all logic, and make life tougher!</p>
<p>&nbsp;</p>
<p><strong>AREA:</strong></p>
<ul>
<li>The area allotted to each team will be 3m x 3m.</li>
</ul>
<p>&nbsp;</p>
<p><strong>EVENT GUIDELINES:</strong></p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<ul>
<li>The arrangement should complete the contraption in a minimum of 5 steps.</li>
<li>A Step is defined as the action that results in another action working towards the final aim of the contraption/machine.</li>
<li>Each team will be given 2 trials to show their working arrangement. A setup time of 10 minutes will be given for the second trial.</li>
<li>A setup time of 2 hours will be given to every team before their first attempt.</li>
<li>The working time of the arrangement should be less than 3 minutes.</li>
<li>All energy conversions are allowed to drive the contraption (including potential, chemical, electrical, kinetic etc.)</li>
<li>Once initiated, manual intervention is allowed only when the contraption comes to an unexpected halt. Maximum times the manual intervention allowed is 3.</li>
</ul>
<p>&nbsp;</p>
<p><strong>JUDGEMENT CRITERIA:</strong></p>
<p><strong>&nbsp;</strong></p>
<ul>
<li>Each unique step carries 10 points.</li>
<li>Each unique Energy conversion carries 50 points. Thereafter if the energy conversion is repeated the points allotted wsould be half the initial points i.e 25 for the first same conversion and 12.5 for the further repetitions.</li>
<li>Each manual intervention made reduces the final score by 15.</li>
<li>Completion of the final task gives 100 points to the team.</li>
<li>In case of a tie the winner between the two teams will be decided by the time taken by the contraption to complete.</li>
</ul>
<p>&nbsp;</p>
<p>Problem statement will be displayed 20 days prior the competition on the event website. (Link - www.texephyr.com)</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<p>Any student with valid ID card of their educational institute can participate</p>

  </div>
</div>


<div id="m4" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m4').style.display='none'">&times;</span><br><br>
<center>    <h2>DESIGNER PRO</h2></center>
<h2>&nbsp;</h2>
<p><strong>Max. No. Of Team members</strong>: 1&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: Rs 180/- (SOLID WORKS)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs 120/- (AUTOCAD)</p>
<p><strong>No. of Rounds</strong>:&nbsp; 3</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION:</strong></p>
<p>Hand drafting?! Nah! Here&rsquo;s something more exciting.&nbsp; If you like working with a software for designing (modeling), this event is the right choice. One can work with either SOLIDWORKS or AUTOCAD. The event will be conducted in 3 rounds.</p>
<p>&nbsp;</p>
<p><strong>EVENT FORMAT: </strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>Round 1 (Elimination Round): </strong></p>
<ul>
<li>It will consist of 50 Multiple Choice Questions on SOLIDWORKS/AUTOCAD software and drafting basics. Time allotted for this round will be 30 minutes.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Round 2 (Part Modeling): </strong></p>
<ul>
<li>Participants will be evaluated for following things-</li>
</ul>
<ol>
<li>Number of parts successfully modelled.</li>
<li>Dimensional accuracy of parts modelled.</li>
<li>Appropriateness of the features used for part modelling</li>
</ol>
<p>&nbsp;</p>
<p><strong>Round 3 (Assembly Modeling): </strong></p>
<ul>
<li>Participants will be evaluated for following things-</li>
</ul>
<ol>
<li>Number of parts successfully modelled and assembled.</li>
<li>Constraining of parts in the assembly.</li>
<li>Whether sub-assemblies were used and why.</li>
<li>Appropriateness of the constraints used for assembly.</li>
</ol>
<p>&nbsp;</p>

  </div>
</div>

<div id="m5" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m5').style.display='none'">&times;</span><br><br>
    <center><h2>PAPARAZZI</h2></center>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. Of Team Members</strong>:2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Registration Fees</strong>: Rs 100/-</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION:</strong></p>
<p>For all the photographers out there! This is a fun event where you can go around capturing moments and well, a phone camera can do the work too so don&rsquo;t let it hold you back!!</p>
<p><strong>EVENT FORMAT: </strong></p>
<ul>
<li>Participants are allowed to click maximum 25 photographs during the events.</li>
<li>Participants are requested to submit their photographs in Pen drives.</li>
<li>Use of any kind of camera is allowed.</li>
<li>Downloaded or copied Photographs will lead to disqualification.</li>
<li>Photographs should not be Photoshopped. (Black/sepia is allowed)</li>
<li>Submitted Photographs are property of Team TEXEPHYR.</li>
<li>Final judging will be done by a Professional Photographer and Judge's Decision will be final.</li>
<li>The list of themes will be provided at the start of the event and all the themes on the list should be covered.</li>
<li>Photographs should be submitted before 7 pm on 15<sup>th</sup> March 2018.</li>
<li>Photographs should not depict any kind of obscenity or vulgarity.</li>
<li>Selected photos will be displayed on the canopy as well as on website.</li>
<li>No watermarks are allowed.</li>
</ul>
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<ul>
<li>Any student with valid ID card of their educational institute can participate.</li>
</ul>

  </div>
</div>

<div id="m6" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m6').style.display='none'">&times;</span><br><br>
    <center><h2>BOX CRICKET</h2></center>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. Of Team Members</strong>:7
<p> <strong>Registration Fees</strong>: Rs420/- (5+2)</p>
<p><strong>No. of Rounds</strong>: Knock-out&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION:</strong></p>
<p>A different version of the most loved game in our country. Make a team of 7 (5+2) and off you go!! And of course get a prize on winning!</p>
<p><strong>EVENT FORMAT: </strong></p>
<ul>
<p><strong>PITCH OVERVIEW :</strong></p><br>
<img src="img/portfolio/box_cricket.png">

<li>One tip-one hand out, over-arm bowling; elbow touching the stomach.</li>
<li>Elevation of the ropes A, B, C, D, E is 4 ft from ground. Batsman will be declared out if the ball goes directly outside ground over any of the ropes.</li>
<li>4 runs will be given if the ball crosses ropes C or D, while 6 runs will be given if the ball crosses C or D without touching the ground.</li>
<li>10 bonus runs if the ball touches the board displayed right in front of the batsman.</li>
<li>Umpire decision will be the final decision. Arguments with the organizing committee won&rsquo;t be tolerated, as it has the right to disqualify the team.</li>
</ul>
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<ul>
<li>Any student with valid ID card of their educational institute can participate.</li>
</ul>
  </div>
</div>

<div id="m7" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m7').style.display='none'">&times;</span><br><br>
    <p><center><h2>BOX SOCCER</h2></center></p>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. Of Team Members</strong>: 5
<p><strong>Registration Fees</strong>: Rs420/- team of 7( 5+2)</p>
<p><strong>No. of Rounds</strong>: Knock-out&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p><strong>INTRODUCTION:</strong></p>
<p>Here&rsquo;s a new way to play football! All you need is a team of 5(3+2) so join in and win prizes.</p>
<p><strong>EVENT FORMAT:</strong></p>
<ul>
<li>The goals should be hit within 10 feet area.</li>
<li>Ball rising above waist will be considered a foul.</li>
<li>Three fouls of one team will give one penalty shot to the opposite team.</li>
<li>Penalty shot will be from goal to goal.</li>
<li>There&rsquo;ll be a 15 minutes match.</li>
<li>Goal specifications will be given on the spot.</li>
<li>The organizers reserve the right to change any or all of the above rules as they deem fit. Change in rules, if any, will be highlighted on the website and notified to the registered participants. Participants are requested to check website regularly for updates.</li>
</ul>
<p><strong>GAME FIELD:</strong> <br>
<img src="img/portfolio/soccer.jpg">
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<ul>
<li>Any student with valid ID card of their educational institute can participate.</li>
</ul>

  </div>
</div>

<div id="m8" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('m8').style.display='none'">&times;</span><br><br>
    <p><center><h2>INQUIZZITIVE</h2></center></p>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. Of Team Members</strong>: 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: Rs120/-</p>
<p><strong>No. of Rounds</strong>: 2</p>
<p><strong>INTRODUCTION:</strong></p>
<p>If you are well updated with things and events happening around, roll in for this event and test your own reach!</p>
<p><strong>EVENT FORMAT: </strong></p>
<p><strong>Round 1 (Preliminary Elimination): </strong></p>
<ul>
<li>An elimination round will be conducted at the start.</li>
<li>It will be a MCQ quiz covering topics like-</li>
<li>Indian Politics</li>
<li>Global Sports</li>
<li>Films and Television</li>
<li>History</li>
<li>Top 10 teams will go to the final.</li>
<li>Marking scheme for this round will be told to participants before start of round.</li>
</ul>
<p><strong>Round 2 (Finale): </strong></p>
<ul>
<li>Final round will be conducted using following formats -</li>
</ul>
<p>"Infinite Rebound&rdquo;, "Rapid Fire", "Buzzer Round".</p>
<ul>
<li>This round will consist of questions on all GK traits.</li>
</ul>
<p><strong>ELIGIBILITY CRITERIA: </strong></p>
<p>Any student with valid ID card of their educational institute can participate.</p>
<p>&nbsp;</p>
<p>&nbsp;</p>

  </div>
</div>


<div class="container" id="app_development" style="display: none;">
        <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('c1').style.display='block'">
              <div class="hover-bg">
              <div class="hover-text">
                <h4>Algoholics</h4>
                <small>High on Efficiency </small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/algoholics.jpg" class="img-responsive" alt="Project Title">  </div> </a>
          </div>
        </div>
       
       
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('c2').style.display='block'">
              <div class="hover-bg">
              <div class="hover-text">
                <h4>Code Break</h4>
                <small>Breaking the Bad Code</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/codebreak.jpg" class="img-responsive" alt="Project Title">  </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <a onclick="document.getElementById('c3').style.display='block'">
              <div class="hover-bg">
              <div class="hover-text">
                <h4>Codestorm</h4>
                <small>Be plus plus</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/codestorm.jpg" class="img-responsive" alt="Project Title"> </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <a onclick="document.getElementById('c4').style.display='block'">
              <div class="hover-bg">
              <div class="hover-text">
                <h4>Junkyard Wars</h4>
                <small>Playing the Part</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/junkyardwars.jpg" class="img-responsive" alt="Project Title"> </div> </a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <a onclick="document.getElementById('c5').style.display='block'">
              <div class="hover-bg">
              <div class="hover-text">
                <h4>Case Of Qriosity</h4>
                <small>Rack those fun lil brains</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/case_of_qriosity.jpg" class="img-responsive" alt="Project Title"> </div> </a>
          </div>
        </div>


      </div>
</div>


<div id="c1" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('c1').style.display='none'">&times;</span><br><br>
<center>    <h2>ALGOHOLICS</h2>
<p>(High on efficiency)</p></center>
<p>&nbsp;</p>
<p><strong>Max. No. of Participants</strong>:&nbsp; 2</p>
<p><strong>Registration Fees:</strong>&nbsp; Rs150 (single entry)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.200 (team of two)</p>
<p><strong>No. of rounds</strong>:&nbsp;&nbsp; 3</p>
<p>&nbsp;</p>
<p><strong>Introduction:</strong></p>
<p>Algoholics, as the name suggests, is an algorithm based event which tests</p>
<p>your logical thinking rather than testing your coding abilities. The motto</p>
<p>of the event is Think efficient, build efficient.</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; The following are the rounds in the event:</p>
<p><strong>Round 1</strong>- Logical questions (30 mins)</p>
<p>Questions to test your logics, basic aptitude and computer knowledge</p>
<p>will be asked. + BONUS ROUND</p>
<p><strong>Round 2</strong>- Answering from pseudo code (30 mins)</p>
<p>The participant will be provided with a pseudo code on which an input will</p>
<p>be given and output is to be answered.</p>
<p><strong>Round 3</strong>- Algorithm development (60 mins)</p>
<p>A problem statement will be given for which an algorithm has to be built.</p>
<p>The algorithm will be evaluated on the basis of its correctness, efficiency</p>
<p>and time for solving (quickness). Evaluation will be done by judges</p>
<p>from the industries.</p>

  </div>
</div>


<div id="c2" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('c2').style.display='none'">&times;</span><br><br>
<center>    <h2>CODE-BREAK</h2></center>
<ul>
<li><strong> No. of Participants</strong>: 2</li>
<li><strong>Registration fee</strong>: 150 (Single entry)</li>
<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 (team of two)</li>
<li><strong>No. of rounds</strong>: 3</li><br>
<li><strong>ROUND I</strong> : Djigksaw Puzzle</li>
<li>For all the inquisitives who love solving puzzles. The twist here is that the code will be puzzled and the participant has to put all the snippets in the right place.</li>
<li>Event format:</li>
<li>It will consist of three levels- simple, medium, hard. The participant starts from simple level. On every correct answer, the participant gets a problem statement from the next level and on every wrong answer, the level will be reduced with an added penalty. Every level has a fixed number of points for each puzzle E.g.</li>
<li></li>
</ul>
<p><u>Level 1 (simple) </u>- if puzzle is solved go to level 2</p>
<p>&nbsp;</p>
<p><u>Level 2 (medium)</u> - if puzzle is solved go to level 3 if puzzle is unsolved go to level 1 with added penalty</p>
<p>&nbsp;</p>
<p><u>Level 3 (hard)</u> - if wrong go to level 2 with added penalty</p>
<p>&nbsp;</p>
<p><strong>ROUND II</strong> : Qwerky Code</p>
<p>This round will integrate fun and excitement in coding. There will be various twists in the keyboard that will jumble the minds of the programmers.</p>
<p>Format:</p>
<ul>
<li>This round consists of four stages with different twist. In each stage points will be reduced for breaking the rules. At the end of round, points will be awarded on the basis of least number of errors. Bonus points for correct code.</li>
</ul>
<p>&nbsp;</p>
<p><strong>ROUND III</strong>&nbsp; : Blind Coding</p>
<p>&nbsp;</p>
<p><u>Level 1:</u> You will be given the problem statement and 5 minutes to think about it. After that you will have 15 minutes to type the code. In these 15 minutes, you are allowed to turn on the monitor once under supervision. No rough work will be allowed.</p>
<p>&nbsp;</p>
<p><u>Level 2:</u> The problem statement will be a bit complex. You will be given 5 minutes along with a chit for rough work. After that, the chits will have to be returned and you will have to type the code with a dysfunctional keyboard (10 mins).</p>
<p><u>Level 3:</u> You can write on the chits for 5 minutes (you are allowed to keep the chits). 10 mins to code with functional keyboard but no monitor and the final 5 mins of free time for error correction.</p>
<p>&nbsp;</p>
<p><strong>Rules: </strong></p>
<ul>
<li>Participants should only be from recognized educational institutes/universities.</li>
<li>Participants have to bring their College ID cards and the receipt of registration during reporting.</li>
<li>Time slots will be given and participants are expected to follow it strictly.</li>
<li>Participants are expected to give their correct contact details, so as to inform them about the results.</li>
<li>Details of the round will be disclosed at the time of event.</li>
<li>Rules may be changed without prior intimation.</li>
</ul>

  </div>
</div>

<div id="c3" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('c3').style.display='none'">&times;</span><br><br>
<center>    <h2>CODESTORM</h2></center>
<p>&nbsp;</p>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. of Participants</strong>: 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration fee</strong>: Rs.150 (For single entry)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Rs.200 (team of two)</p>
<p><strong>No. of rounds</strong>: 3</p>
<p><strong>Introduction: </strong></p>
<p>For all the coders TEXEPHYR brings Code storm. Write out the optimised and most efficient code to prove your coding prowess. This event will not only test your coding &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; but also evaluate your debugging.</p>
<p>Event format:</p>
<p>&nbsp;They are two completely different tracks: 1) Minor (Diploma &amp; FE &amp; SE)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2) Major (TE &amp; BE)</p>
<p>&nbsp;</p>
<p><strong>&nbsp;Prizes for both tracks are different.</strong></p>
<p>&nbsp;</p>
<p><strong>Round 1-MCQ</strong></p>
<p>Contestants will have to answer set of questions. Questions will be of multiple choice and the contestant has to choose the appropriate one. Questions will be based on technical know-how.</p>
<p>&nbsp;</p>
<p><strong>Round 2-</strong>
<strong>REVERSE CODING (For Minor)</strong></p>
<p>Contestants will be given input-output sequences and will have to decode the logic behind it. The code can be written in any of the four languages i.e. C, C++, java or python. Both time and correctness of code will be considered.<strong>&nbsp;</strong></p>
<p><strong>PRACTICAL PROBLEMS (CODES RELATING TO DAILY LIFE PROBLEMS (For Major)) </strong></p>
<p>Feel the technological change that how you recover faster from disaster. Contestants are assumed to be at a zero level initially. Contestants will have to choose one of the given difficulty levels (say around 1 to 5). For each of the difficulty level contestants will be rewarded with certain points if answered correctly (say 100 for difficulty level 1, 200 for 2 and so on).</p>
<p>&nbsp;</p>
<p><strong>Round 3-Final Coding Round</strong></p>
<p><strong>&nbsp;</strong></p>
<p>This round will be a hard core coding round. A problem statement will be provided for which a code needs to be developed. The code can be written in any of the four languages i.e. C, C++, java or python. Both time and correctness of code will be considered.</p>
<h2>&nbsp;</h2>
<p>&nbsp;</p>

  </div>
</div>

<div id="c4" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('c4').style.display='none'">&times;</span><br><br>
    <h2><center>JUNKYARD WARS</center></h2>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
<p><strong>Max. No. of Participants</strong>:&nbsp;&nbsp; 2</p>
<p><strong>Registration Fees</strong><strong>:</strong>&nbsp; Rs.150(single entry)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.200 (team of two)</p>
<p><strong>No. of rounds:</strong>&nbsp; 2</p>
<p><strong>Introduction:</strong></p>
<p>Do you know your PC? Find the right parts and assemble the PC in</p>
<p>30 minutes. Teamwork is everything to win this war. The competition is</p>
<p>designed for students to display skills in PC assembly with great</p>
<p>precision and speed. Students will demonstrate their ability to put</p>
<p>together a PC from junk parts until it has started to successfully boot.</p>
<p>&nbsp;</p>
<p><strong>Following components will be provided-</strong></p>
<ul>
<li>Motherboard with attached Processor</li>
<li>RAM</li>
<li>HDD with Installed OS</li>
<li>DVD Drive</li>
<li>Heat sink/Fan Combo</li>
<li>SMPS</li>
</ul>
<p>&nbsp;</p>
<p><strong>Round 1 (pick, collect and assemble - 30 mins)</strong></p>
<ul>
<li>Different parts of the PC will be missing; participant has to find them from</li>
</ul>
<p>the junk of components.</p>
<ul>
<li>Maximum time for assembling is 30 minutes.</li>
<li>Fixed no. of screws will be provided. Lose them, and you lose your</li>
</ul>
<p>points.</p>
<ul>
<li>You can pick only two components at a time.</li>
<li>Points will be awarded for each correct part assembled.</li>
</ul>
<p>Team will get a second chance if their assembled PC throws up</p>
<p>errors. Points will be lost, too.</p>
<p>Team with the maximum points will be the winner (within stipulated time</p>
<p>i.e. 30 minutes.)</p>
<p>&nbsp;</p>
<p><strong>Round 2 (test, assemble with twist)</strong></p>
<ul>
<li>Different parts of the PC will be missing; participant has to find them from</li>
</ul>
<p>the junk of components (working + non-working)</p>
<ul>
<li>There will a short test related to the hardware in computer (MCQ based).</li>
<li>The time will be allotted according to this quiz.</li>
<li>All the assembling steps are same as round 1</li>
</ul>
<p>Team with the maximum points will be the winner.</p>

  </div>
</div>

<div id="c5" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('c5').style.display='none'">&times;</span><br><br>
    <h2><p><strong><center>Case of Qriosity</center></strong></p></h2>
<p><strong>Max. No. of Participants:</strong> 2&nbsp;</p>
<p><strong>No. of Rounds:</strong> 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration fee:</strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.100 (For single entry)</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs.150 (team of two)&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Introduction:&nbsp;</strong></p>
<p>Investigate the crime scene and find the criminal. This event is dedicated to all the Sherlock fans who would love to solve mysteries. The only twist here is that the investigations are digital.&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Round 1- Puzzle questions (60 mins) </strong></p>
<p>A set of puzzles i.e. a problem statements will be given for which the criminals have to be found. Points will be given for solving each puzzle. The more number of puzzles you solve, the more points you earn.&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Round 2-bid for clues and solve (180 mins)&nbsp;&nbsp; </strong></p>
<p>The teams have to bid for the case they want. They will be shown different set of clues of which each set is sufficient to lead to the criminal. If more number of clues are required, the participant will buy more clues. Winner will be decided by the time and amount of points left.</p>

  </div>
</div>


<div class="container" id="branding" style="display: none;">
        <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e1').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Roborace</h4>
                <small>Racing! Is it in your DNA?</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/Roborace.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e2').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Circuitrix</h4>
                <small>If you have the potential make a difference.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/circuitrix.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e3').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Line Adepto</h4>
                <small>Trace your path for the win.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/Line Tracer.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e4').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>BE Project</h4>
                <small>Innovation gets amplified!</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/be project.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e5').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>TE Project</h4>
                <small>In this reign of innovators, Let your logic shout.</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/TE project.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e6').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Ball Wars</h4>
                <small>Aim! Shoot! Defend!</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/Ball Wars.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e7').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Treasure Hunt</h4>
                <small>E&TC</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/treasure.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('e8').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Gaming</h4>
                <small>E&TC</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/gaming.png" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>


      </div>
</div>

<div id="e1" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e1').style.display='none'">&times;</span><br><br>
    <h2><center>ROBORACE</center></h2>
<p>&nbsp;</p>
<p><strong>Max. No. Of&nbsp; participants</strong>: 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: 300/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>(and 50/-&nbsp; extra for each member)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>No. of Rounds</strong>: 3</p>
<p>&nbsp;</p>
<p><strong>Introduction:</strong></p>
<p>The machine (bot) should navigate the track in minimum possible time by clearing all obstacles and checkpoints.</p>
<p>&nbsp;</p>
<p><strong>General Rules:</strong></p>
<ul>
<li>There will be 3 rounds. Two elimination rounds followed by a final round.</li>
<li>The teams are required to complete the track in minimum possible time.</li>
</ul>
<p>The team will be given two runs in each elimination&nbsp; round. The best score</p>
of the two runs will be considered.
<ul>
<li>Teams selected from the second elimination round will qualify for the final round.</li>
<li>At the start of the run, the machines will be placed behind the starting</li>
line.
</ul>
<ul>
<li>The time will start as soon as the front edge of the bot crosses the</li>
</ul>
line.
<ul>
<li>There will be four checkpoints in the track. The team has to clear all the</li>
</ul>Check points before reaching the finish line.</p>
<ul>
<li>A total of 3 restarts will be given to the team during the run. If a team opts for a restart, then the bot will be restarted by placing it at the previously completed checkpoint.</li>
</ul>
<ul>
<li>No penalty will be awarded for a restart. During a restart, the team cannot make any hardware changes or repairs to their bot. Moreover, the time won't be paused during the restart.</li>
</ul>
<ul>
<li>In the final round, if all the teams are unable to complete the task in the stipulated time, then the team&nbsp; that&nbsp; reaches the farthest wins.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Miscellaneous:</strong></p>
<ul>
<li>Any team that is not ready at the time specified will be eliminated from the Competition&nbsp; automatically.</li>
</ul>
<ul>
<li>The bots will be checked for their safety before the run and prohibited from use if found unsafe for other participants and spectators.</li>
<li>Organizers' decision shall be treated as final and binding on all.</li>
<li>The organizers reserve the right to change any or all of the above rules as they deem fit.</li>
</ul>
<ul>
<li>Change in rules, if any, will be highlighted on the website and notified to the registered participants.</li>
</ul>
<ul>
<li>In case of ties during elimination round, a re-run will be given to the teams.</li>
</ul>
<ul>
<li>The organizing team members will neither be held responsible nor be liable for any incidents and / or accidents caused by participating teams and/or their equipment.</li>
</ul> 
<p>&nbsp;</p>
<p><strong>Bot Specifications:</strong></p>
<ul>
<li>Power supply will be provided to the team at the time of event for its Machines.</li>
</ul>
<ul>
<li>The potential difference between any two points of the machines must not exceed 24 VDC and 6A of current.</li>
</ul>
<ul>
<li>The machine can be either wired or wireless.</li>
<li>The bot dimensions must not exceed 28cm*28cm*28cm.</li>
<li>In case the machine is using a non-electric power supply, kindly get it approved from the organizers beforehand via email. </li>
</ul>
<p><strong>Organizers are not responsible for inconvenience if approval is not sought.</strong></p>
  </div>
</div>

<div id="e2" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e2').style.display='none'">&times;</span><br><br>
<h2><center>CIRCUITRIX</center></h2>
<h2>&nbsp;</h2>
<p><strong>Max. No. of Participants</strong>: 1-2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: 150/- per team&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>No. of Rounds</strong>: 3</p>
<p><strong>Description:</strong></p>
<p>Flaunt your electronic skills by designing and debugging circuits at your disposal.</p>
<p><strong>Rules:</strong></p>
<ul>
<li>There would be a qualifying round.</li>
<li>In the qualifying round, MCQ test (online) will be taken based on basic electronics</li>
<li>Knowledge at the given&nbsp; location. Time limit for the qualifying round will be 30 min.</li>
</ul>
<ul>
<li>Selected groups based on pre-defined cut off score will be promoted to next round.</li>
</ul>
<ul>
<li>In the second round i.e. &lsquo;Box of Lies&rsquo;, the contestants would be given a circuit</li>
</ul>
<p><strong>Along with some specifications.</strong></p>
<ul>
<li>The contestants would have to observe the circuit and have to determine. Whether the given circuit is right or wrong.</li>
</ul>
<ul>
<li>The groups qualified after the second round would compete in the final round.</li>
<li>The final round would be conducted on Multisim software (2012 version).</li>
<li>The participants have to design and&nbsp; implement the given circuit on the software.</li>
</ul>
<ul>
<li>The time limit for the final round would be 90 min.</li>
<li>Final result will be based on accuracy of the output as well as time taken by participants.</li>
</ul>
<ul>
<li>Winners would be declared at the end of the final round. </li>
</ul>
<p><strong>The decision of the organizers would be final and binding.</strong></p>

  </div>
</div>

<div id="e3" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e3').style.display='none'">&times;</span><br><br>
   <h2><center>LINE ADEPTO</center></h2>
<p>&nbsp;</p>
<p><strong>Max. No. Of participants:</strong> 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fee</strong>: 200/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;(50/- per extra member)</p>
<p><strong>No. of&nbsp; Rounds</strong>: 3</p>
<p><strong>Introduction:</strong></p>
<p>The objective of this contest is for a robot to follow a black line on a white background, without losing the line. The robot to complete the course in the shortest period of time while accurately tracking the course line from start to finish wins.</p>
<p><strong>General Rules:</strong></p>
<ul>
<li>Competition will consist of three rounds, two qualifying round and the final round.</li>
</ul>
<ul>
<li>Course Time: Time is measured from the time the robot crosses the starting line until the time it crosses the finish line. A robot is deemed to have crossed the line when the forward most wheel, track, or leg of the robot contacts or crosses over the line.</li>
</ul>
<ul>
<li>Time Limit: A maximum of 5 minutes is allowed for a robot to complete the course. A robot that cannot complete the course in the allotted time shall be disqualified.</li>
</ul>
<ul>
<li>Time Keeping: Time will be measured by a judge with a stopwatch. The recorded time will be final. Recorded times will not be revealed to their respective teams.</li>
</ul>
<ul>
<li>Once the participating team begins the round, no alteration of their bot is permitted.</li>
<li>Arena Edges: A robot that wanders off of the arena surface will be disqualified. A robot shall be deemed to have left the arena when any wheel, leg, or track has moved completely off the arena surface. The teams are required to complete the track in minimum possible time. The team will be given two runs in the elimination round. The best score of the two runs will be considered.</li>
</ul>
<ul>
<li>Preparatory time of 5 minutes would be given to the contestants before Start of the first 2 rounds.</li>
</ul>
<ul>
<li>In case of deviation from the track, the team has to continue the race from previous check point and maximum of 3 attempts are given in the whole run.</li>
</ul>
<ul>
<li>Track Size: The width of the black line will be 3cm.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Miscellaneous:</strong></p>
<ul>
<li>The participants should ensure that room lighting, photography etc. does not affect the functioning of sensors.</li>
</ul>
<ul>
<li>Any team that is not ready at the time specified will be removed from the competition automatically. Each team has to report at least 15 minutes before the event starts.</li>
</ul>
<ul>
<li>The teams must not damage the opponent&rsquo;s bot or track in any way.Judges reserve the right to disqualify any team indulging in negative controlling &amp; misbehavior.</li>
</ul>
<ul>
<li>Maximum voltage batteries allowed is of 15V.Participants should bring their own power supply/Batteries.</li>
</ul>
<ul>
<li>A maximum of 5 IR pairs are permitted.</li>
<li>The bots will be checked for their safety before the run and prohibited from use if found unsafe for other participants and spectators.</li>
</ul>
<ul>
<li>Organizers' decision shall be treated as final and binding on all.</li>
<li>Participating teams are responsible for the safety of their robots and are liable for any accidents caused by their team members or their robots.</li>
</ul>
<ul>
<li>The organizing team members will neither be held responsible nor be liable for any incidents and / or accidents caused by participating teams and/or their equipment.</li>
</ul>
<ul>
<li>The organizers reserve the right to change any or all of the above rules as they deem fit.</li>
</ul>
<ul>
<li>Change in rules, if any, will be highlighted on the website and notified to the registered participants. In case of ties during elimination round, a re-run will be given to the teams.</li>
</ul>
  </div>
</div>

<div id="e4" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e4').style.display='none'">&times;</span><br><br>
<h2><center>BE PROJECT</center></h2>
<p>&nbsp;</p>
<p><strong>Max. No. of participants</strong>: 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration fee: </strong>&nbsp;200/-</p>
<p>(50/- for extra member)</p>
<p><strong>No. of rounds</strong>: 2</p>
<p>&nbsp;</p>
<p><strong>Introduction:</strong></p>
<p>For all final year students, Texephyr&rsquo;18 provides you a platform to
demonstrate your talent. The event has received an overwhelming
response in the past few years with students from different colleges
enthusiastically being a part of it. The contest, being judged by highly
qualified faculty members and industrial experts, provides hands-on
experience for industrial projects and gives students a rare chance for
open interaction with industrial expertise.</p>
<p><strong>Rules:</strong></p>
<ul>
<li>This event is for students from E &amp;TC, ETX, Computer, IT and Mechanical branches only.</li>
</ul>
<ul>
<li>Computers and Power Supply would be provided by us.</li>
<li>Any other equipment/prerequisite must be borne by the participants.</li>
<li>The decision of the judges would be final and binding.</li>
<li>Participants should only be from recognized educational institutes/universities.</li>
</ul>
<ul>
<li>Participants have to bring their College ID cards and the receipt of registration during reporting.</li>
</ul>
<ul>
<li>Time slots will be given and participants are expected to follow it strictly.</li>
<li>Participants are expected to give their correct contact details, so as to inform them about the results.</li>
</ul>
<ul>
<li>Details of the round will be disclosed at the time of event.</li>
<li>Rules may be changed without prior intimation. Participants are requested to check the TEXEPHYR website regularly for updates.</li>
</ul>
<h2>&nbsp;</h2>
<p>&nbsp;</p>

  </div>
</div>

<div id="e5" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e5').style.display='none'">&times;</span><br><br>
<h2><center>TE PROJECT</center></h2>
<p>&nbsp;</p>
<p><strong>Max. No. Of participants</strong>: 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: 200/- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;(50/- for extra member)<strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</strong></p>
<p><strong>No. of Rounds</strong>: 2</p>
<p><strong>Description:</strong></p>
<p>For all third year students, Texephyr&rsquo;18 provides you&nbsp; a platform to Demonstrate your talent. The competition aims at bringing out the &lsquo;techie&rsquo; in you. The judges would be eminent faculty members and industry experts from various reputed institutions, providing a rare chance for students to interact with industry experts from their fields. So grab this excellent opportunity to nurture and enhance your talent!</p>
<p>&nbsp;</p>
<p><strong>Rules:</strong></p>
<ul>
<li>This event is for students from E &amp;TC, ETX, Computer and IT branches only.</li>
</ul>
<ul>
<li>Computers and Power Supply will be provided by us.</li>
<li>Any other equipment/prerequisite must be borne by the participants.</li>
<li>The decision of the judges would be final and binding.</li>
</ul>
<p>&nbsp;</p>

  </div>
</div>

<div id="e6" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e6').style.display='none'">&times;</span><br><br>
<h2><center>BALL WARS</center></h2>
<p><strong>&nbsp;</strong></p>
<p><strong>&nbsp;</strong></p>
<p><strong>Max. No. of Participants</strong>: 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: 200/- per team&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>No. of Rounds</strong>: 2</p>
<p>&nbsp;</p>
<p><strong>Texephyr Provided Bots</strong></p>
<p><strong>Max. No. of Participants:</strong> 1</p>
<p><strong> Winner:</strong> 1000/-</p>
<p><strong>Registration Fees:</strong> 100/-</p>
<p>(50/- for extra member)</p>
<p><strong>No. of Rounds: 2</strong></p>
<p>&nbsp;</p>
<p><strong>Introduction:</strong></p>
<p>The machine (bot) has to put as many balls as possible from&nbsp; its area to the opponent&rsquo;s area.</p>
<p>&nbsp;</p>
<p><strong>Rules:</strong></p>
<ul>
<li>At the start of the run, the machines will be placed in their respective starting zones.</li>
<li>It will be a one on one match of 5minutes.</li>
<li>If a team opts for a restart, then the machine will be restarted by placing it in its starting zone.</li>
<li>No penalty will be awarded for a restart.</li>
<li>During the match, the teams cannot make any hardware changes or repairs.</li>
<li>At the end, the team with more points wins.</li>
<li>The number of points awarded for different acts and further rules would be notified by end of February.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Miscellaneous: </strong></p>
<p>➢Any team that is not ready at the time specified will be removed from the competition automatically.</p>
<p>➢The machines would be checked for their safety before the run and would be discarded if found unsafe for other participants and spectators.</p>
<p>➢Organizers' decision shall be treated as final and binding on all.</p>
<p>➢In any case there should be no damage to the arena.</p>
<p>➢The organizers reserve the right to change any or all of the above rules as they deem fit.</p>
<p>➢Change in rules, if any, will be highlighted on the website and notified to the registered participants.</p>
<p>➢In case of ties during elimination round, a rerun will be given to the teams.</p>
<p>&nbsp;</p>
<p>SPECIFICATIONS:</p>
<p>&nbsp;</p>
<ol>
<li>SUPPLY</li>
</ol>
<p>&nbsp;</p>
<ul>
<li>Power supply will be provided to the team at the time of event for its machines.</li>
<li>Onboard power supply is also allowed.</li>
<li>The potential difference between any two points of the machines must not exceed 24V DC and 4A of current.</li>
</ul>
<p>&nbsp;</p>
<ol start="2">
<li>BOT:</li>
</ol>
<ul>
<li>The bot dimensions must not exceed 25cm*25cm.</li>
<li>The bot can be wired or wireless. In case the machine is using a non-electric power supply, kindly get it approved from the organizers beforehand via email.</li>
<li>Organizers are not responsible for inconvenience if approval is not sought.</li>
<li>Diameter of ball is 6cm.</li>
</ul>
<h2>While travelling, the bot must not carry more than 5 balls.</h2>

  </div>
</div>

<div id="e7" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e7').style.display='none'">&times;</span><br><br>

<h2><center>TREASURE HUNT</center></h2>
<p><strong>Max. No. Of participants</strong>: 3 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>Registration Fees</strong>: 100/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p><strong>No. of Rounds</strong>: 4</p>
<p><strong>Description:</strong></p>
<p>&nbsp;&nbsp; The ultimate aim of the game is to find the treasure with the help of maps, compass and someclues. It is a team event which will have 4 rounds and will require teams to find and decrypt clues which are hidden throughout the campus.</p>

<p><strong>Rules:</strong></p>
<ul>
<li>Team Event</li>
<li>A team must consist of maximum 3 members.</li>
<li>Students from any branch&nbsp; may particiapte.</li>
<li>The event will span across both days.</li>
<li>Any number of Teams from&nbsp; same college are allowed.</li>
<li>Judges Decisions will be final.</li>
<li>The organizers reserve the right to change the rules or nature of rounds at any point of time if the situation demands.</li>
<li>Candidates those who do not report at the specific venue on the stipulated time will be disqualified.</li>
<li>Each team has to announce a leader at the time of&nbsp; prelims.</li>
<li>The means used&nbsp; by the teams should be fair, in case of any violation of the rules or any use of unfair means, teams will be disqualified from the contest.</li>
</ul>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &bull;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Wallets, mobile phones and all the other device of communication or IT devices may be taken away from the participants during the rounds.</p>

  </div>
</div>


<div id="e8" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('e8').style.display='none'">&times;</span><br><br>
    <h2><center>GAMING</center></h2>
<p>&nbsp;</p>
<p><strong><em><u>Counter Strike</u></em></strong></p>
<p>Max. No. Of participants: 5 per team &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Winner: 3,000/-</p>
<p>Registration Fees: 250/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Runner-Up: 2,000/-</p>
<p>&nbsp;</p>
<p><strong><em><u>NFS</u></em></strong></p>
<p>Max. No. Of participants: 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Winner: 2,000/-</p>
<p>Registration Fees: 250/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Runner-Up: 1,000/-</p>
<p>&nbsp;</p>
<p><strong><em><u>FIFA</u></em></strong></p>
<p>Max. No. Of participants: 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Winner: 2,000/-</p>
<p>Registration Fees: 250/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Runner-Up: 1,000/-</p>
<p>&nbsp;</p>
<p><strong><em><u>Wii Sports Tennis (Singles)</u></em></strong></p>
<p>Max. No. Of participants: 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Winner: 1,000/-</p>
<p>Registration Fees: 50/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p><strong><em><u>Wii Sports Tennis (Doubles)</u></em></strong></p>
<p>Max. No. Of participants: 2 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Winner: 2,000/-</p>
<p>Registration Fees: 100/-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><strong>Introduction:</strong></p>
<ul>
<li>Students from all colleges and disciplines are invited to come and display their gaming enthusiasm.</li>
<li>A number of single player games such as NFS and FIFA as well as team games like Counter Strike and DOTA 2 for students to battle each other and claim prizes.</li>
<li>For the first time ever, Texephyr will be offering Wii Sports Tennis as an event for those casual or beginner gamers looking to have a fun time. This event will be in singles and doubles format so find a friend and have some fun!</li>
</ul>
<p><strong>Rules:</strong></p>
<ul>
<li>Major penalties are given for major incidents such as deliberately deceiving admins, failing to show up for matches, repeated rule breaking, and any activities will violate the General Code of Conduct</li>
<li>We will provide the computers, monitors and peripheral devices required by the participants. Participants are free to bring their own peripherals such as a mouse, mousepad, etc. provided they do not provide any unfair advantage.</li>
<li>All matches in the Tournament should start as stated by the event head, no changes to the time can be requested. All Teams and Players in a match should be on the server or in the game lobby and ready to go at the latest 10 minutes before the match is to start</li>
<li>When cheating is uncovered, The Team will be disqualified from the current Tournament. The use of the following programs will result in a cheat ban: Multihacks, Wallhack, Aimbot, Coloured Models, NoRecoil, No-Flash and Sound changes. These are only examples, other programs or methods may be considered cheats as well.</li>
<li>In case of any dispute, Organizers decision will be final and binding for all.</li>
</ul>

  </div>
</div>


<div class="container" id="workshop" style="display: none;">
        <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <a onclick="document.getElementById('w1').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Python Workshop</h4>
                <small>Workshop</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/python.jpeg" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <a onclick="document.getElementById('w2').style.display='block'">
            <div class="hover-bg"> 
              <div class="hover-text">
                <h4>Android Development</h4>
                <small>Workshop</small>
                <div class="clearfix"></div>
              </div>
              <img src="img/portfolio/android.jpg" class="img-responsive" alt="Project Title"> </div></a>
          </div>
        </div>
      </div>
</div>



<div id="w1" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('w1').style.display='none'">&times;</span><br><br>
    <h2><center>Python Workshop</center></h2>
<p>&nbsp;</p>
<p><strong>Course Contents-</strong></p>
<p>&nbsp; &nbsp;1.Basic introduction</p>
<p>&nbsp; &nbsp;2.Introduction to data types and libraries</p>
<p>&nbsp; &nbsp;3.File handling and string handling</p>
<p>&nbsp; &nbsp;4.Writing Functions and classes</p>
<p>&nbsp; &nbsp;5.Use of python in data visualisation and plotting</p>
<p>&nbsp; &nbsp;6.Use of python in image processing</p>
<p>&nbsp; &nbsp;7.Use of python in Machine learning</p>
<p>&nbsp;</p>
<p>&nbsp;<strong>Date-</strong>&nbsp;27-Jan-28 Jan</p>
<p><strong>*Duration-</strong> *4-5 hrs / day</p>
<p><strong>Venue-</strong> Department of computer engineering, MIT PUNE KOTHRUD.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p>
<p><strong>Workshop Cost-</strong>&nbsp;&nbsp;₹300 for 2 days</p>
<p>&nbsp;</p>
<p>Limited seats...Register your name as soon as possible to confirm your seat.</p>
<p>&nbsp;</p>
<p>For further information please contact on the given no:-</p>
<p>Siddharth-95 45 158528</p>
  </div>
</div>

<div id="w2" class="modal">
    <div class="modal-content">
    <span style="float:right;cursor:pointer;" onclick="document.getElementById('w2').style.display='none'">&times;</span><br><br>
<h2><center>Anroid Development</center></h2><br><br>
<p>TEXEPHYR&rsquo;18 is organising a <strong>2-day</strong> workshop on Android Development conducted by&nbsp;Seed Infotech</p>
<p>The perspective of this course is to understand basic concepts for developing an app:<br />1. Introduction to the Android world<br />2. Understanding the Building Environment for Android<br />3. Understanding Layouts<br />4. Getting familiar with Activity<br />5. Introduction to Intents<br />6. Understanding various Notifications<br />7. Other Interesting Stuff<br />8. Some Technical Stuff<br />9. Developing Applications<br />10. Publishing an Application on Google Play.</p>
<p><strong>Date-</strong> 12 and 13 March<br /><strong>Venue-</strong> Department of computer engineering, MIT PUNE KOTHRUD.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br /><strong>Workshop Cost-</strong> ₹600 for 2 days</p>
<p><strong>Contact Details-</strong> Siddharth-95 45 158528*</p>

  </div>
</div>


  </div>
</div>




<!-- Services Section -->
<!-- <div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Our Sponsors</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> 
      </div>
    </div>
  </div>
</div> -->



<!-- Gallery Section -->

<div id="gallery-section">
  <div class="container"> <!-- Container -->
    <div class="section-title text-center center">
      <h2>Gallery</h2>
      <hr>
      <div class="clearfix"></div>
      <p><strong>Texephyr</strong></p>
    </div>

    <div class="container" >
  
  <div id="myCarousel2" class="carousel slide" data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel2" data-slide-to="1"></li>
      <li data-target="#myCarousel2" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
       <!-- <div class="portfolio-items"> -->
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/1.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/1.jpg" class="img-responsive"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/2.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/2.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
       
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/3.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/3.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/4.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/4.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/5.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/5.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/6.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/6.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/7.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/7.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
       <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/8.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/8.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      <!-- </div> -->
      </div>

      <div class="item">

        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/9.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/9.jpg" class="img-responsive"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/10.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/10.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
       
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/11.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/11.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/12.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/12.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/13.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/13.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/14.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/14.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/15.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/15.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
       <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/16.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/16.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>     
        

      </div>
    
   <div class="item">     
        
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/17.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/17.jpg" class="img-responsive"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/18.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/18.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
       
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/19.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/19.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/20.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/20.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/21.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/21.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/22.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/22.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/23.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/23.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/EVENT PHOTOS/24.jpg" rel="prettyPhoto">
              <img src="img/EVENT PHOTOS/24.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
      <span class="sr-only">Previous</span>
      <img src="img/go-back.png" style="max-height: 100%;width:50%;position: relative;top:37%;">
    </a>
    <a class="right carousel-control" href="#myCarousel2" data-slide="next">
<!--       <span class="glyphicon glyphicon-chevron-right"></span>
 -->      <span class="sr-only">Next</span>
      <img src="img/go-next.png" style="max-height: 100%;width:50%;position: relative;top:37%;">

    </a>
  </div>
</div>



  </div>
</div>

<!-- Team Section -->
<div id="team-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Meet the Team</h2>
      <hr>
    </div>
    <div id="row">
      <div class="col-md-2 col-sm-8 team">
        <div class="thumbnail"> <img src="img/team/rushikesh_fin.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Rushikesh Hadole</h3>
            <p>Management Leader</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <div class="thumbnail"> <img src="img/team/pulkit_final.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Pulkit Gupta</h3>
            <p>PR & Publicity Lead</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <div class="thumbnail"> <img src="img/team/vipul_final.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Vipul Dhande</h3>
            <p>Finance Lead</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <div class="thumbnail"> <img src="img/team/sonal_final.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Sonal Jotwani</h3>
            <p>Marketing Lead</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <div class="thumbnail"> <img src="img/team/pritam_final.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Pritam Kumar</h3>
            <p>Event Lead</p>
          </div>
        </div>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <div class="thumbnail"> <img src="img/team/shubham_final.jpg" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3>Shubham Salampuria</h3>
            <p>Secretarial Lead</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <i class="fa fa-sort-desc" style="font-size: 60px; cursor: pointer;" id="down" onclick="collapse(0)"></i>
  <div id="team" style="display: none;">
    <div id="row">
      <div class="col-md-2 col-sm-8 team">
        <strong>Design Team : </strong><br>
        Nidhi Khobragade<br>
        Aditya Rethe<br>
        Pankaj Pandit<br>
        Shantanu Patne<br>
        Rajesh Sawant<br>
        Sushmita Patil<br><br><br>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <strong>PR & Publicity : </strong><br>
        Vivek Bhange<br>
        Sumeet Nikam<br>
        Siddharth Gupta<br>
        Tushar Saykar<br><br><br>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <strong>Event : </strong><br>
        Deepankar Ojha<br>
        Ritvik Nesargi<br>
        Subhash Rajpurohit<br>
        Chinmay Rane<br>
        Yash Hatekar<br><br><br>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <strong>Treasury : </strong><br>
        Anshul Lawankar<br>
        Nancy Das<br>
        Pratiksha Panchbhai<br><br><br>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <strong>Marketing : </strong><br>
        Kushal Bhutada<br>
        Khushal Agarwal<br>
        Siddharth Sharma<br>
        Rohit Raj<br><br><br>
      </div>
      <div class="col-md-2 col-sm-8 team">
        <strong>Technical Team : </strong><br>
        Abdul Sheikh - Technical Lead<br>
        Sumit Hotchandani<br>
        Shikhar Bhatt<br>
        Kailash Raj Gaur<br>
        Harish Chivukula<br>
        Tejas Chuttar<br>
        Harshali Bedmutha<br>
        Yash Kondawar<br><br><br>
      </div>
    </div>
  </div>
  <i class="fa fa-sort-asc" id="up" style="font-size: 60px; cursor: pointer; display: none;" onclick="collapse(1)"></i>
</div>

<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-6"> <a href="https://www.google.co.in/maps/place/124,+Paud+Rd,+Mahaganesh+Colony,+Kothrud,+Pune,+Maharashtra+411038/@18.5076536,73.8176425,17z/data=!3m1!4b1!4m5!3m4!1s0x3bc2bf95bd8eb1d5:0x1a60b4c6078ce8b!8m2!3d18.5076536!4d73.8198312?hl=en" target="_blank"><i class="fa fa-map-marker"></i>
        <p>S.No.124, Paud Road, Kothrud,<br> Pune, Maharashtra-411038</p></a>
      </div>
      <div class="col-md-6"><a href="mailto:info@texephyr.in"> <i class="fa fa-envelope-o"></i>
        <p>info@texephyr.in</p></a>
      </div>
       
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
      <form id="con" >
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <div id="errna" class="alert-danger" style="background: white"></div>
              <input type="text" id="name1" name="name" class="form-control" placeholder="Name" onkeypress="return ValidateAlpha(event)" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <div id="errph" class="alert-danger" style="background: white"></div>
              <input type="text" name="phone" id="phone" class="form-control" rows="4" placeholder="Phone" onkeypress="return isNumberKey(event)" minlength="10" maxlength="10" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div id="errem" class="alert-danger" style="background: white"></div>
          <input type="email" id="email1" name="email" class="form-control" placeholder="Email" required="required">
          <p class="help-block text-danger"></p>
        </div>
        <div class="form-group">
          <textarea name="message" id="message1" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="errm" class="alert-danger" style="background: white"></div>
        <div id="success"></div>
      </form>
        <button type="submit" class="btn btn-default" onclick="form_contact()">Send Message</button>
      </div>
  </div>
</div>
</div>
<div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com/texephyr/" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/mit_texephyr?s=08" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/mit_texephyr/" target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.youtube.com/channel/UCrw25HiTlNJBEo9fjZDVY7g" target="_blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
    </div>
  </div>
</div>
<div id="footer">
  <div class="container">
    <div class="fnav">
      <p>Copyright &copy; MIT Texephyr 2018. Designed by <a href="#" rel="nofollow">IT Department</a></p>
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/jquery.counterup.js"></script> 
<script type="text/javascript" src="js/waypoints.js"></script> 
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/myjs.js"></script> 
<script type="text/javascript" src="js/custom.js"></script> 
<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="js/main.js"></script>

<script type="text/javascript">
  function collapse(check)
  {
    if (check==0)
    {
        var hide = document.getElementById("down");
        var show = document.getElementById("team");
        var show1 = document.getElementById("up");

        hide.style.display="none";
        show.style.display="block";
        show1.style.display="block";
    }
    else if (check==1)
    {
        var hide = document.getElementById("team");
        var hide1 = document.getElementById("up");
        var show = document.getElementById("down");


        hide.style.display="none";
        hide1.style.display="none";
        show.style.display="block";
    }
  }
</script>
<script type="text/javascript">
  function form_contact()
  {
    $('#errna').html("");
    $('#errem').html("");
    $('#errm').html("");
    $('#errph').html("");

    var name1=document.getElementById("name1").value;
    var email1=document.getElementById("email1").value;
    var phone=document.getElementById("phone").value;
    var message1=document.getElementById("message1").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(name1=="")
    {
      document.getElementById("name1").focus();
      $('#errna').html("<strong>Enter your name</strong>");
      return false;
    }
    if(phone=="")
    {
      document.getElementById("phone").focus();
      $('#errph').html("<strong>Enter your phone no.</strong>");
      return false;
    }
    if(phone.length<10)
    {
      document.getElementById("phone").focus();
      $('#errph').html("<strong>Enter a valid phone no.</strong>");
      return false;
    }
    if(email1=="")
    {
      document.getElementById("email1").focus();
      $('#errem').html("<strong>Enter your email</strong>");
      return false;
    }
    if (!filter.test(email1)) 
    {
      document.getElementById("email1").focus();
      $('#errem').html("<strong>Enter a valid email-id</strong>");
      return false;
    }
    if(message1=="")
    {
      document.getElementById("message1").focus();
      $('#errm').html("<strong>Enter your message</strong>");
      return false;
    }
    $.ajax({
      url:"management/contact_us.php",
      type:"post",
      data:{
        name:name1,
        email:email1,
        message:message1,
        phone:phone
      },
      cache:false,
      success:function(html){
        $('#success').html("<div class='alert alert-success'>");
                    $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-success')
                        .append("<strong>Your message has been sent. </strong>");
                    $('#success > .alert-success')
                        .append('</div>');

                    //clear all fields
                    $('#con').trigger("reset");
      },
      error: function() {
                    // Fail message
                    $('#success').html("<div class='alert alert-danger'>");
                    $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
                        .append("</button>");
                    $('#success > .alert-danger').append("<strong>Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!");
                    $('#success > .alert-danger').append('</div>');
                    //clear all fields
                    $('#contactForm').trigger("reset");
    },
    });
  }
</script>
</body>
</html>