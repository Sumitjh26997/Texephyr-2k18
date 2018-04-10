<?php 
//$servername = "localhost";
//$username = "mitpunea_usrsumt";
//$password = "password@summit123";
//$dbname = "mitpunea_dbmitsummit";
//// Create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// function getName($table,$param,$value,$conn,$req) {
//	$select = "select * from $table where $param = $value ";
//	$result = mysqli_query($conn,$select);
//	$row = mysqli_fetch_array($result);
//	$name =  $row["$req"];
//	//echo $name;
//	if(mysqli_num_rows($result)>0)
//	{
//		return $name;
//	}
//	else {
//		return 0;
//	}
//}
//
//
////$choice = 1;
////$sport_id = 2;
//
//
//	$query = "SELECT * FROM bus_table  ORDER BY date,time";
//
//$result = mysqli_query($conn, $query);
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//	$result3 = array();
//    while($row = mysqli_fetch_assoc($result)) {
//
//			$college = getName("college_table","college_id",$row['college_id'],$conn,"college_name");
//			$city = getName("college_table","college_id",$row['college_id'],$conn,"city");
//			$college = $college.",".$city;
//			$sport = getName("sport_table","sport_id",$row['sport_id'],$conn,"sport_name");
//			$location = getName("location_table","location_id",$row['location_id'],$conn,"location_name");
//
//			$date = $row['date'];
//			$time = $row['time'];
//			$bus_number = $row['bus_no'];
//
//
//			echo  nl2br($college."\n".$sport."\n".$location."\n".$date."\n".$time."\n".$bus_number."\n");
//
//	}
//}
//
//mysqli_close();
?>