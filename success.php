<?php
session_start();

//security: prevent people from typing in this url

if (empty($_SESSION["login"]))
	header("Location:index.php");

//This file is validating as HTML5
//You need to use an HTML5 validator to check your code
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>"); 

//connect to db
include("includes/openDbConn.php");

//make sure the login doesnt exist

$sql = "SELECT UserID, Password, Email FROM Users_356Lab07 WHERE UserID='".$_SESSION["login"]."'";

//call query
$result = mysql_query($sql);

if(empty($result))
	$num_records = 0;
else
	$num_records = mysql_num_rows($result);
	
if($num_records != 0)
{
	$row = mysql_fetch_array($result);
	$passwd = $row["Password"];
	$email = $row["Email"];
	
	//decrypt the email address
	
	$Email = mcrypt_decrypt(MCRYPT_RIJNDAEL_256, "go356phpEncryption", $email, MCRYPT_MODE_CFB, $_SESSION["iv"]);
	
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Lab 07 - Success</title>
	<meta charset="utf-8" />
</head>

<body>
<h1 style="font-size:14pt; text-indent:360px;">Lab 07 - Success</h1>
<p>You have been successfully logged in!</p>
<p>Your password that you encrypted using mcrypt_encrypt() is <span style="font-weight:bold;"><?php echo $passwd;?> and cannot be decrypted.</span></p>
<p>Your email address that you encrypted using mcrypt_encrypt() is <span style="font-weight:bold;"><?php echo $Email;?> and was decrypted using mcrypt_decrypt().</span></p>
<p><a href="index.php">Login again</a></p>
</body>
</html>
