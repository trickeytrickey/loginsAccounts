<?php

//start session
session_start();

include("includes/openDbConn.php");

//get the data from the form

$userID = $_POST["UserID"];
$password = md5($_POST["Passwd"]);

//form query to check credentials

$sql = "SELECT * FROM Users_356Lab07 WHERE UserID='".$userID."' AND Password ='".$password."'";

//call query
$result = mysql_query($sql);

//check to make sure there is a result
if(empty($result))
{
	$num_records = 0;
}
else
{
	$num_records = mysql_num_rows($result);
}

//close connection
include("includes/closeDbConn.php");

//if there is a record
if($num_records == 1)
{
	CleanUp();
	$_SESSION["errorMessage"] = "";
	$_SESSION["login"] = $userID;
	header("Location:success.php");
	exit;
}
else
{
	CleanUp();
	$_SESSION["errorMessage"] = " Either your login or your password were incorrect";
	header("Location:index.php");
	exit;
}

function CleanUp()
{
	$userID 		="";
	$password		="";
	$sql			="";
	$result			="";
	$num_records 	="";
}
?>
