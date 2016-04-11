<?php

//Database connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "professor";

$verify = $_GET['email'];

$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
if ($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}

?>


<!DOCTYPE HTML>

<html>
	<head>
		<title>Arcane University</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1><a id="logo">Choose Your Student</a></h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
							<?php
								echo "<li><a href='mainPage.php?email=".$verify."'>Home</a></li>";
								echo "<li><a href='registerNewStudent.php?email=".$verify."'>Register Student</a></li>";
								echo "<li><a href='chooseStudent.php?email=".$verify."'>Update Student Profile</a></li>";
								echo "<li class='current'><a href='selectStudentToView.php?email=".$verify."'>View Student Information</a></li>";
								?>
							</ul>	
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						<div id="content">

							<!-- Content -->

								<article>
									<header>
										<h2>Which Student Would You Like To View?</h2>
										<p>Pick Your Fighter</p>
									</header>

									
									<?php
									echo "<form action = 'viewStudentInfo.php?email=".$verify."' method = 'post'>";
									?>
									<br>
										<select name = "parent">
										<option select = "selected"> Choose Student</option>
									
										<?php
										$sql = "select userID, firstName, lastName from studentinfo";
										$result = $conn->query($sql);
										while($data = $result->fetch_assoc()){
										?>
										<option value ="<?php echo $data['userID'];?>" name = "student" id = "student">
										<?php
										echo $data['firstName']." ".$data['lastName'];
										?>
										</option>
										<?php
										}
										?>
										</select>
										<br><br>
										<input type = "submit" name = "submit" id = "submit" value = "View">
									</form>

								</article>

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
								<li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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
<?php
$conn->close();
?>