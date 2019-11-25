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
		<p class="title" align="center">Vehicle Licensing and Registration System</p> <br>
	
	</header>
	
	<br><br><br><br><br><br>
	
    <p align="center" class="titleBold">Upload an Image of Your Driver's License</p><br>
    
	<form method= "POST" name="licenseUp" action="license_upload.php">
	<div class="row">
		<div id="column1">
			<p class="textboxtitle">License Number&nbsp;&nbsp;&nbsp;</p>
            <p class="textboxtitle">Driver's License Image&nbsp;&nbsp;&nbsp;</p>
		</div>
        
	   
		  <div id="column2">
              <input type="text" class="textbox">
              <input type="text" class="textbox"><br><br>
           </div>
        
           <div id="column3">
				    <p id="empty_1" class="errorMsg"></p><br>
				    <input type="submit" class="button" value="Browse" name="add_lic_img">
           </div>
           
	</div>
	
		<div align="center">
			<input type="submit" class="button" value="Upload">
            <input type="submit" class="button" value="Cancel">
            <br><br>
        </div>
		</form>

	<br><br><br><br><br><br><br><br>
</div>
	
</body>
</html>