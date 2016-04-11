<!DOCTYPE HTML>
<?php
//Create php variables which holds the names of the parameters in your MYSQL database
$servername = "localhost";
$username = "root";
$password = "";
$mainDB = "professor";
$logDB = "logindb";

$verify = $_GET['email'];
//Connect to the main database
$dbh1 = new mysqli($servername, $username, $password, $mainDB);
//Check connection for main database
if($dbh1->connect_errno > 0){
	//kill connection
	die("Connection failed: " . $dbh1->connect_error);
}


/*$sql1 = "select firstName, lastName, email from professorinfo where email = '$verify'";
$result1 = mysqli_query($dbh1, $sql1);
$data = mysqli_fetch_assoc($result1);*/

?>
<html>
	<head>
		<title>Register A New Student</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		
		<script type="text/javascript">try {
		window.AG_onLoad = function(func) 
			{ if (window.addEventListener) { 
			window.addEventListener('DOMContentLoaded', func); } 
			};
		window.AG_removeElementById = function(id) { 
		var element = document.getElementById(id); 
		if (element && element.parentNode) { 
		element.parentNode.removeChild(element); }
		};
		window.AG_removeElementBySelector = function(selector) { 
		if (!document.querySelectorAll) { 
		return; } 
		var nodes = document.querySelectorAll(selector); 
		if (nodes) { for (var i = 0; i < nodes.length; i++) {
			if (nodes[i] && nodes[i].parentNode) { nodes[i].parentNode.removeChild(nodes[i]); } 
			} 
			} 
			};
		window.AG_each = function(selector, fn) { if (!document.querySelectorAll) return; var elements = document.querySelectorAll(selector); for (var i = 0; i < elements.length; i++) { fn(elements[i]); }; };
		var AG_removeParent = function(el, fn) { while (el && el.parentNode) { if (fn(el)) { el.parentNode.removeChild(el); return; } el = el.parentNode; } };
} 		catch (ex) { console.error('Error executing AG js: ' + ex); }
	</script>
	
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1>Register Your New Student</h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<?php
								echo "<li><a href='mainPage.php?email=".$verify."'>Home</a></li>";
								echo "<li class='current'><a href='registerNewStudent.php?email=".$verify."'>Register Student</a></li>";
								echo "<li><a href='chooseStudent.php?email=".$verify."'>Update Student Profile</a></li>";
								echo "<li><a href='selectStudentToView.php?email=".$verify."'>View Student Information</a></li>";
								?>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div class="row 200%">
							<div class="8u 12u(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2>Welcome In Your New Student!</h2>
												<p>You Can Enter All of Their Information Below</p>
											</header>

											<span class="image featured"><img src="images/banner.jpg" alt="" /></span>

											    <div class="form">
													<?php
													echo "<form id='contactform' action = 'studentAddSuccess.php?email=".$verify."' method = 'post'>";
													?>
														<p class="contact"><label for="first_name">First Name</label> 
														<input id="first_name" name="first_name" value = "First" type="text"> 
														</p>
														
														<p class="contact"><label for="last_name">Last Name</label>
														<input id="last_name" name="last_name" value = "Last" type="text">
														</p> 
														
														<p class="contact"><label for="em">Email</label> 
														<input id="em" name="em" value = "hence@ncat.edu" type="email"> 
														</p>
														
														<p class="contact"><label for="ban">Banner ID</label> 
														<input id="ban" name="ban" type="text"> 
														</p>
														
														<p class="contact"><label for="addre">Mailing Address</label> 
														<input id="addre" name="addre" type="text">
														</p>
														
														<p class="contact"><label for="phNum">Phone Number</label> 
														<input id="phNum" name="phNum" type="text">
														</p>
														
														<p class="contact"><label for="gPa">GPA</label> 
														<input id="gPa" name="gPa" type="text">
														</p>
														
														<p class="contact"><label for="tCred">Total Credits</label> 
														<input id="tCred" name="tCred" type="text">
														</p>
														
														<p class="contact"><label for="banner">Tuition Charge</label>
														<input id="charge" name="charge" type="text">
														</p> 
														
														<p class="contact"><label for="password">Create a password</label> 
														<input id="password" name="password" type="password"> 
														</p>
														
														<p class="contact"><label for="repassword">Confirm your password</label> 
														<?php 
														if (isset($_GET["password"]) && $_GET["password"] == "noMatch") 
														echo "<p> style = 'color: red'> The credentials that you entered do not match!</p>" 
														?>
														<input id="repassword" name="repassword" type="password">
														</p>
														<br>
														<input class="buttom" name="submit" id="submit" tabindex="5" value="Register Your Student!" type="submit"> 	 
													</form> 
												</div>       
										</article>

								</div>
							</div>
						</div>
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
				

					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Arcana University. All rights reserved</li><li>Design: <a>Dylan J. Gunn & Michael Page</a></li>
							</ul>
						</div>

				</div>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>