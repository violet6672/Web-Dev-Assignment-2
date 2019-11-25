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
	
    <p align="center" class="titleBold">Upload a Copy of Your Insurance Cover Note</p><br>
	
	<!-- The data encoding type, enctype, MUST be specified as below -->
	<form enctype="multipart/form-data" action="__URL__" method="POST">
		
	<div class="row">
		<div id="column1">
			<p class="textboxtitle">Policy Number&nbsp;&nbsp;&nbsp;</p>
            <p class="textboxtitle">Date Issued&nbsp;&nbsp;&nbsp;</p>
            <p class="textboxtitle">Date Expired&nbsp;&nbsp;&nbsp;</p>
            <p class="textboxtitle">Insurance Cover Note&nbsp;&nbsp;&nbsp;</p>
		</div>
        
	   
		  <div id="column2">
              <input type="text" class="textbox" name="pol_num">
              <input type="text" class="textbox" name="date_issued">
			  <input type="text" class="textbox" name="date_expired">
			  <!-- MAX_FILE_SIZE must precede the file input field -->
			<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
              <input type="text" class="textbox" name="cover_note_img"><br><br>
           </div>
        
           <div id="column3">
                    <p id="empty_1" class="errorMsg"></p><br>
                    <p id="empty_1" class="errorMsg"></p><br>
                    <p id="empty_1" class="errorMsg"></p><br>
				    <input type="submit" class="button" value="Browse">
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