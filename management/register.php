<?php
include 'mysqlconnection.php';
    
    

    	$name=$_POST['name'];
    	$email=$_POST['email'];
    	$contact=$_POST['contact'];
    	$event=$_POST['event'];
      $college=$_POST['college'];
      //echo $name.$email.$contact.$event.$college;


      $query="INSERT INTO register(name,email,contact,college,event,timestamp) values ('$name','$email','$contact','$college','$event',now())";

      
      if (!mysqli_query($conn,$query))
      {
        //echo "false";

        //echo("Errorcode: " . mysqli_errno($conn));
       
        echo "<div class='alert alert-danger'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
        echo "<strong>Sorry, it seems you have already registered for this event</strong>";
        echo "</div>";
        

      }
      else
      {
        
        //echo("Errorcode: " . mysqli_errno($conn));
       
        echo "<div class='alert alert-success'>";
        echo "<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>";
        echo "<strong>Registration successful. </strong>";
        echo "</div>";
      }

   
  
        //header("refresh:5;index.php");                               

?>
