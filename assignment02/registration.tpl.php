<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Barbados Revenue Authority</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<!-- <script type="text/javascript" src="javaScript.js"></script> -->
</head>
    
<body>

<div class="wrapper">
	<header class="wrap">
		<img class= "textwrap" src="Bdos_flag.png" align="left" height="80" width="86">
		<p class="title" align="center">Barbados Revenue Authority </p>
		<p class="title" align="center">Vehicle Licensing and Registration System</p> 
	
	<ul class="navbar">
		<li><a href="index.tpl.php">DRIVER SIGN IN</a></li>
		<li class="active">ACCOUNT REGISTRATION</li>
		<li><a href="admin/index.tpl.php">ADMINISTRATION LOGIN</a></li>
	</ul>
	</header>
	
	<br>
	<p class="alert" align="center">All fields must be filled</p>
	
	<div class="row">
		<div id="column1">
			<p class="textboxtitle">National ID&nbsp;</p>
			<p class="textboxtitle">License No.&nbsp;</p>
			<p class="textboxtitle">First Name&nbsp;</p>
			<p class="textboxtitle">Last Name&nbsp;</p>
            <p class="textboxtitle">Email&nbsp;</p>
            <p class="textboxtitle">Telephone&nbsp;</p>
			<p class="textboxtitle">Address 1&nbsp;</p>
			<p class="textboxtitle">Address 2&nbsp;</p>
			<p class="textboxtitle">Parish&nbsp;</p>
		</div>
	
		<form method= "POST" name="regis" action="registration.php">
			<div id="column2">
				<input type="text" class="textbox" name="id" value="">
				<input type="text" class="textbox" name="lic_no" value="">
				<input type="text" class="textbox" name="fname" value="">
				<input type="text" class="textbox" name="lname" value="">
                <input type="text" class="textbox" name="email" value="">
                <div>
                    <input type="text" class="TeleTextboxSmall" name="telephone" value="">
                    -
                    <input type="text" class="TeleTextboxLarge" name="telephone2" value="">
                </div>
				<input type="text" class="textbox" name="addr1" value="">
				<input type="text" class="textbox" name="addr2" value="">
				<select class="dropdown" name="parish">
					<option>**Choose One**</option>
					<option>Christ Church</option>
					<option>St. Andrew</option>
					<option>St. George</option>
					<option>St. James</option>
					<option>St. John</option>
					<option>St. Joseph</option>
					<option>St. Lucy</option>
					<option>St. Michael</option>
					<option>St. Peter</option>
					<option>St. Philip</option>
					<option>St. Thomas</option>
				</select><br><br>
			</div>
	
        
			<div id="column3">
				<p id="empty1" class="errorMsg"></p>
				<p id="empty2" class="errorMsg"></p>
				<p id="empty3"  class="errorMsg"></p>
				<p id="empty4" class="errorMsg"></p>
				<p id="empty5" class="errorMsg"></p>
				<p id="empty6" class="errorMsg"></p>
				<p id="empty7" class="errorMsg"></p>
			</div>
	</div>	
	
	<div align="center">
		<input type="submit" class="button" name="register" value="Register"> &nbsp;&nbsp;&nbsp;
		<input type="submit" class="button" name="cancel" value="Cancel">
		
	</div>
	</form>

	<br><br>
</div>
</body>
</html>