<?php

$mode = $_GET["mode"];

if($mode == "ask")
{
	$un = $_GET["username"];
	
	//connect to database
	include("includes/openDbConn.php");
	
	//make sure login doesnt exist
	$sql = "SELECT UserID FROM Users_356Lab07 WHERE UserID = '".$un."'";
	
	//call query
	$result = mysql_query($sql);
	//check to see if there is a result
	
	if (empty($result))
		$num_records = 0;
	else
		$num_records = mysql_num_rows($result);
		
	//close db connect
	include("includes/closeDbConn.php");
	
	if($num_records == 0)
		echo("Available");
	else
		echo("not available");

	
}
?>
