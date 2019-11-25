<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Barbados Revenue Authority</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<script type="text/javascript" src="javaScript.js"></script>
</head>
    
<body onload="loadData()">

<div class="wrapper">
	<header class="wrap">
		<div class="container" onclick="logOut()">
			<div class="bar1"></div>
			<div class="bar2"></div>
			<div class="bar3"></div>
			<div id="myDropdown" class="dropdown-content">
				<a href="logout.php">Log Out</a>
			</div>
		</div>
		
		<img class= "textwrap" src="Bdos_flag.png" align="left" height="80" width="86">
		<p class="title" align="center">Barbados Revenue Authority </p>
		<p class="title" align="center">Vehicle Licensing and Registration System</p>
		
		<ul class="loggedIn">
			<li class="loggedIn">NAME:</li>
			<li class="loggedIn">LICENSE NO.:</li>
		</ul>
	</header>
	
	<br><br><br>
	<div align="center">
		<input type="submit" class="bigbutton" value="Renew License"><br><br><br>
		<input type="submit" class="bigbutton" value="Renew Vehicle License Registration">
	</div>
	
	<br><br><br><br>
	
	
</div>
</body>
</html>