<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Barbados Revenue Authority</title>
	<link rel="stylesheet" href="../style.css" type="text/css"/>
	<!-- <script type="text/javascript" src="../javaScript.js"></script> -->
</head>
    
<body>

<div class="wrapper">
	<header class="wrap">
		<img class= "textwrap" src="../Bdos_flag.png" align="left" height="80" width="86">
		<p class="title" align="center">Barbados Revenue Authority </p>
		<p class="title" align="center">Vehicle Licensing and Registration System</p> 
	
	   <ul class="navbar">
           <li> <a href="../index.tpl.php">DRIVER SIGN IN</a></li>
		  <li><a href="../registration.tpl.php">ACCOUNT REGISTRATION</a></li>
		  <li class="active">ADMINISTRATION LOGIN</li>
	   </ul>
	</header>
	
	<br><br><br><br><br><br>
	
	<div class="row">
		  <div id="column1">
			 <p class="textboxtitle">Employee ID&nbsp;&nbsp;&nbsp;
			 <p class="textboxtitle">Password&nbsp;&nbsp;&nbsp;
		  </div>
	
        <form method="POST" name="index2" action="AdminIndex.php">
            <div id="column2">
                <input type="text" class="textbox" name="empid"> <br>
                <input type="text" class="textbox" name="passwd"><br><br>
            </div>
        
            <div id="column3">
				    <p id="empty_3" class="errorMsg"></p>
				    <p id="empty_4" class="errorMsg"></p>
           </div>
	</div>
	
	<div align="center">
		<input type="submit" class="button" class="button" value="Log In"><br><br>
		<a href="">Recover Password</a>&nbsp;&nbsp;&nbsp;

	</div>
	</form>
	<br><br><br><br><br><br><br><br>
</div>
	
</body>
</html>