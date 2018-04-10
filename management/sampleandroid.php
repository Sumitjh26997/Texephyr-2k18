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
//$query =" ";
//$choice = $_POST['choice'];
//$sport_id = $_POST['sport_id'];
////$choice = 1;
////$sport_id = 2;
//
//if($choice == 1)
//{
//	$query = "SELECT * FROM match_table WHERE `sport_id`='".$sport_id."' AND `match_status`='".$choice."' ORDER BY date,time ";
//}
//else if($choice==2)
//{
//	$query = "SELECT * FROM match_table WHERE `sport_id`='".$sport_id."' AND `match_status`='".$choice."' ORDER BY date DESC ,time DESC";
//}
//$result = mysqli_query($conn, $query);
//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//	$result3 = array();
//    while($row = mysqli_fetch_assoc($result)) {
//
//			$team1 = getName("college_table","college_id",$row['team1_id'],$conn,"college_name");
//			$city1 = getName("college_table","college_id",$row['team1_id'],$conn,"city");
//			$team1 = $team1.",".$city1;
//			$team2 = getName("college_table","college_id",$row['team2_id'],$conn,"college_name");
//			$city2 = getName("college_table","college_id",$row['team2_id'],$conn,"city");
//			$team2 = $team2.",".$city2;
//			$venue = $row['venue'];
//			$score = $row['score'];
//			$date = $row['date'];
//			$time = $row['time'];
//			$winner = $row['winner'];
//			$p1 = $row['participant1_name'];
//			$p2 = $row['participant2_name'];
//			$type = getName("sport_table","sport_id",$sport_id,$conn,"sport_type");
//			if($choice==1)
//			{
//				$score ="N/A";
//				$winner ="N/A";
//			}
//			if($type!=2)
//			{
//				$p1="N/A";
//				$p2 = "N/A";
//			}
//			echo  nl2br($team1."\n".$team2."\n".$date."\n".$time."\n".$venue."\n".$score."\n".$winner."\n".$p1."\n".$p2."\n");
//	}
//}
//mysqli_close();
?>