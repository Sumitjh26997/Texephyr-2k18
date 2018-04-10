<?php
	include 'mysqlconnection.php';
	function writeMsg($table,$param,$value,$conn) {
	$select = "select * from $table where $param = $value ";
	$result = mysqli_query($conn,$select);
	echo $select;
	if($conn)
	{
		echo "successful";
	}
	echo $table;
	echo $param;
	echo $value;



while($row = mysqli_fetch_array($result))
{
	echo $row['sport_name'];
}
	if(mysqli_num_rows($result)>0)
	{
		return $row;
	}
	else {
		return 0;
	}
}

$result = writeMsg("sport_table","sport_id",1,$conn);



?>
