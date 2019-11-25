<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Barbados Revenue Authority</title>
	<link rel="stylesheet" href="style.css" type="text/css"/>
	<!-- <script type="text/javascript" src="javaScript.js"></script> -->
</head>
    
<body onload="loadData()">

<div class="wrapper">
	<header class="wrap">
		<img class= "textwrap" src="Bdos_flag.png" align="left" height="80" width="86">
		<p class="title" align="center">Barbados Revenue Authority </p>
		<p class="title" align="center">Vehicle Licensing and Registration System</p> 
	
	<ul class="navbar">
		<li class="active">DRIVER SIGN IN</li>
		<li><a href="registration.tpl.php">ACCOUNT REGISTRATION</a></li>
		<li><a href="admin/index.tpl.php">ADMINISTRATION LOGIN</a></li>
	</ul>
	</header>
	
	<br><br><br><br><br><br>
	

	<div class="row">
		<div id="column1">
			<p class="textboxtitle">Username&nbsp;&nbsp;&nbsp;</p>
            <p class="textboxtitle">Password&nbsp;&nbsp;&nbsp;</p>
		</div>
        
	   <form method= "POST" name="index1" action="index.php">
		  <div id="column2">
              <input type="text" class="textbox" name="uname">
              <input type="text" class="textbox" name="passwd"><br><br>
           </div>
        
           <div id="column3">
				    <p id="empty_1" class="errorMsg"></p>
				    <p id="empty_2"    class="errorMsg"></p>
           </div>
        
	</div>
	
		<div align="center">
			<input type="submit" class="button" value="Sign In" name="signIn">
            <br><br>
			<a href="">Forgot Password?</a>&nbsp;&nbsp;&nbsp;
            <a href="registration.tpl.php">Sign Up</a>
        </div>
		</form>
	<br><br><br><br><br><br><br><br>
</div>
	
</body>
</html>