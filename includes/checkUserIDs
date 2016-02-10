// JavaScript Document
var request = false; 

try
{
	/*e.g FireFox */
	request = new XMLHttpRequest();
} 
catch(error1)
{
	try
	{
		//Some versions of IE
		request = new ActiveXObject("Msxm12.XMLHTTP");
	}
	catch (error2)
	{
		try
		{
			//some versions of IE
			request = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(error3)
		{
			request = false;
		}
	}
}
if (!request)
alert("Error initializing XMLHttpRequest!");

function updateUsernameAvailability(status)
{
	//get element from doc
	var txt = document.getElementById("usernameAvailability");
	document.getElementById("usernameAvailability").style.display="block";
	
	//use switch to set value of element
	switch(status)
	{
		case "available":
			txt.innerHTML = "The username you entered is available";
			document.getElementById("usernameAvailability").style.color="#6666ff";
			break;
			
		case "not available":
			txt.innerHTML = "The username you entered is already in use. Please try another username";
			document.getElementById("usernameAvailability").style.color ="#ff0000";
			break;
		case "blank":
			txt.innerHTML = "";
			break;
		default:
			txt.innerHTML = "Checking...";
			break;
	}
}

function determineUsernameAvailability()
{
	if(request.readyState ==4)
	{
		if(request.status ==200)
		{
			//get the response text
			var response = request.responseText;
			//check value of response test
			if (response == "available")
			//call function with value
				updateUsernameAvailability("available");
			else 
				updateUsernameAvailability("not available");
		}
		else 
		//debugging
		alert("Debug: status is " + request.status);
	}
}

function checkUsernameAvailability()
{
	var username = document.getElementById("UserID").value;
	var url 	 = "checkUserID.php?mode=ask&username=" + escape(username);
	
	if(username.length > 0)
	{
		//send default value
		updateUsernameAvailability("null");
		
		//open request
		request.open("GET", url, true);
		//set onreadystatechange
		request.onreadystatechange = determineUsernameAvailability;
		//send
		request.send(null);
	}
	else
		updateUsernameAvailability("blank");
}
