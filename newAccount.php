<?php
session_start();

//This file is validating as HTML5
//You need to use an HTML5 validator to check your code
echo("<?xml version=\"1.0\" encoding=\"UTF-8\"?>"); 
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Lab 07 - Create New Account</title>
	<meta charset="utf-8" />
	<style type="text/css">
		ul{ list-style:none; margin-top:5px;}
		ul li{ display:block; float:left; width:100%; height:1%;}
		ul li label{ float:left; padding:7px; color:#6666ff}
		ul li input, ul li textarea{ float:right; margin-right:10px; border:1px solid #ccc; padding:3px; font-family: Georgia, Times New Roman, Times, serif; width:60%;}
		.checkID {float:right; margin:10px; margin-top:0px; border:1px solid #6666ff; display:none; color:#6666ff; background-color:#eeffff; padding: 3px; font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; width:60%;}
		li input:focus, li textarea:focus{ border:1px solid #666; }
		fieldset{ padding:10px; border:1px solid #ccc; width:400px; overflow:auto; margin:10px;}
		legend{ color:#000099; margin:0 10px 0 0; padding:0 5px; font-size:11pt; font-weight:bold; }
		label span{ color:#ff0000;  }
		fieldset#billing {position:absolute; top:60px; left:20px; width:460px; }
		fieldset#submit {position:absolute; top:540px; left:20px; width:460px; text-align:center; }
		fieldset input#SubmitBtn{ background:#E5E5E5; color:#000099; border:1px solid #ccc; padding:5px; width:150px;}
		div#errorMsg {color:#ff0000; font-weight:bold; font-size:12pt; position:absolute; top:500px; left:25px;}
	</style>
    <script type="text/javascript" src="includes/checkUserID.js"></script>
    <script type="text/javascript">
	window.onload = function() { document.getElementById("UserID").onchange = checkUsernameAvailability; };
	</script>
</head>

<body>
<h1 style="font-size:14pt; text-indent:360px;">Lab 07 - Create New Account</h1>

<form id="form0" method="post" action="createNewAccount.php"> 
    <fieldset id="billing">
        <legend>Create New Account</legend>
        <ul>
            <li> <label title="UserID" for="UserID">UserID <span>*</span></label> <input type="text" name="UserID" id="UserID" size="30" maxlength="30" value="<?php if(!empty($_SESSION["UserID"])){echo($_SESSION["UserID"]);} ?>" /></li>
            <li><span id="usernameAvailability" class="checkID">asdf</span></li>
            <li> <label title="Passwd" for="Passwd">Password <span>*</span></label> <input type="password" name="Passwd" id="Passwd" size="30" maxlength="30" value="<?php if(!empty($_SESSION["Passwd"])){echo($_SESSION["Passwd"]);} ?>" /></li>
            <li> <label title="PasswdConfirm" for="PasswdConfirm">Confirm Password <span>*</span></label> <input type="password" name="PasswdConfirm" id="PasswdConfirm" size="30" maxlength="30" value="<?php if(!empty($_SESSION["PasswdConfirm"])){echo($_SESSION["PasswdConfirm"]);} ?>" /></li>
            <li> <label title="AcctType" for="AcctType">Account Type <span>*</span></label> <input type="text" name="AcctType" id="AcctType" size="30" maxlength="30" value="<?php if(!empty($_SESSION["AcctType"])){echo($_SESSION["AcctType"]);} ?>" /></li>
            <li> <label title="Name" for="name">Name <span>*</span></label> <input type="text" name="name" id="name" size="30" maxlength="30" value="<?php if(!empty($_SESSION["name"])){echo($_SESSION["name"]);} ?>" /></li>
            <li> <label title="Address" for="address">Address <span>*</span></label> <input type="text" name="address" id="address" size="30" maxlength="30" value="<?php if(!empty($_SESSION["address"])){echo($_SESSION["address"]);} ?>" /></li>
            <li> <label title="City" for="city">City <span>*</span></label> <input type="text" name="city" id="city" size="30" maxlength="30" value="<?php if(!empty($_SESSION["city"])){echo($_SESSION["city"]);} ?>" /></li>
            <li> <label title="State" for="state">State <span>*</span></label> <input type="text" name="state" id="state" size="30" maxlength="30" value="<?php if(!empty($_SESSION["state"])){echo($_SESSION["state"]);} ?>" /></li>
            <li> <label title="Zip" for="zip">Zip Code <span>*</span></label> <input type="text" name="zip" id="zip" size="7" maxlength="5" value="<?php if(!empty($_SESSION["zip"])){echo($_SESSION["zip"]);} ?>" /></li>
            <li> <label title="Phone" for="phone">Phone <span>*</span></label> <input type="text" name="phone" id="phone" size="30" maxlength="30" value="<?php if(!empty($_SESSION["phone"])){echo($_SESSION["phone"]);} ?>" /></li>
            <li> <label title="Email" for="email">Email <span>*</span></label> <input type="text" name="email" id="email" size="30" maxlength="30" value="<?php if(!empty($_SESSION["email"])){echo($_SESSION["email"]);} ?>" /></li>
        </ul>
    </fieldset>
    <fieldset id="submit">
        <input id="SubmitBtn" name="SubmitBtn" type="submit" value="Create New Account" />
    </fieldset>
</form>

<div id="errorMsg"><?php if(!empty($_SESSION["errorMessage"])){echo($_SESSION["errorMessage"]);} ?></div>

<script type="text/javascript">
	document.getElementById("UserID").focus();
</script>

</body>
</html>
