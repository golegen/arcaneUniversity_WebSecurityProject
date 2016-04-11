<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "professor";

//$banneri = $_POST ['bann'];

$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if ($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}
$sql = "SELECT * from professorInfo";
		
$result = $conn->query($sql);
$data = $result->fetch_assoc();


$conn->close();

?>

<html>
<head>
<title>Update Information</title>
	<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7; IE=EmulateIE9">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="http://www.freshdesignweb.com/wp-content/themes/fv28/images/icon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <link rel="stylesheet" type="text/css" href="css/fdw-demo.css" media="all">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet" type="text/css">

	<script type="text/javascript">try {
		window.AG_onLoad = function(func) { if (window.addEventListener) { window.addEventListener('DOMContentLoaded', func); } };
		window.AG_removeElementById = function(id) { var element = document.getElementById(id); if (element && element.parentNode) { element.parentNode.removeChild(element); }};
		window.AG_removeElementBySelector = function(selector) { if (!document.querySelectorAll) { return; } var nodes = document.querySelectorAll(selector); if (nodes) { for (var i = 0; i < nodes.length; i++) { if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } } } };
		window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
		var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
} 		catch (ex) { console.error('Error executing AG js: ' + ex); }
	</script>

</head>
<body class = "backPic">
 <div class="container">
      
			<header>
			<h1><strong> Update Profile </strong></h1>
            </header>       
      <div class="form">

    		<form id="contactform" action = "updateProfessorInfo.php" method = "post"> 
            <?php 
				if (isset($_GET["field"]) && $_GET["field"] == "blank") 
					echo "<h2 style = 'color: red'> One, or both of your fields are blank!</h2>" 
				?>
			<?php    
				echo 	"<input type = 'hidden' name = 'bann' id = 'bann' value = ".$data['bannerID'].">";
			?>	
				<p class="contact"><label for="addre">Mailing Address</label></p> 
    			<input id="addre" name="addre" type="text">
				
				 <p class="contact"><label for="phNum">Phone Number</label></p> 
    			<input id="phNum" name="phNum" type="text">

			<br>
            <input class="buttom" name="submit" id="submit" tabindex="5" value="Ok" type="submit"> 	 
   </form> 
  </div>       
</div>
            


</body>
</html>