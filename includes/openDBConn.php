<?php
// Connect to MySQL from PHP
// Open DB connection and select DB to use
// The '@' bypasses the usual PHP error handling, so you get to deal with a
// failure return from pconnect yourself in the if statement below.
// If you leave off the '@' then any errors will automatically be thrown
@ $db = mysql_pconnect("localhost", "cgt356web2e", "Yummiest2e780");
mysql_select_db("Users_356Lab07");

// check to see if connection was successful
if(!$db)
{
	echo "Error: Could not connect to database.  Please try again later.";
	exit;
}
?>
