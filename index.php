<!DOCTYPE html>
<html >
<head>
	<title>AU Collegiate Portal</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">    
    
		<!--Stylesheets-->
        <link rel="stylesheet" href="collegiatePortal/css/style.css"type="text/css" />
		<link href="collegiatePortal/css/loginStyle.css" rel="stylesheet" type="text/css" />
		<!--Javascript Files-->
        <script src="js/prefixfree.min.js"></script>

</head>
<body>

    <div class="body"></div>
	
		<div class="grad"></div>
		<div class="header">
			<div style = "right: 250px; position: relative">Arcane<span>University</span></div>
			<div style = "right: 515px; top: 30px; position: relative">Collegiate<span>Portal</span></div>
		</div>
		<br>
		<form method = "POST" action = "collegiatePortal/connect.php">

		<div class="login">
				<?php 
				if (isset($_GET["status"]) && $_GET["status"] == "fail") 
					echo "<h2 style = 'color: red'> The credentials that you entered do not match!</h2>" 
				?>
				<input type="text" placeholder="username" name="em"><br>
				<input type="password" placeholder="password" name="pass"><br><br>
				<input type="submit" name="submit" value="Login" id="button">
		</div>
		</form>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    
    
    
    
  </body>
</html>
