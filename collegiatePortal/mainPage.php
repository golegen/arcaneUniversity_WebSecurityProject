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

/*
//Connect to the login database
$dbh2 = new mysqli($servername, $username, $password, $logDB);
//Check connection for main database
if($dbh2->connect_errno > 0){
	//kill connection
	die("Connection failed: " . $dbh2->connect_error);
}else{
	echo "Login DB Connected";
}
*/
$sql1 = "select firstName, lastName, email from professorinfo where email = '$verify'";
$result1 = mysqli_query($dbh1, $sql1);
$data = mysqli_fetch_assoc($result1);

/*
//Create your sql query
$sql = "SELECT * FROM professorInfo";
$result = $conn1->query($sql);
//var_dump($result);
$data = $query1->fetch_assoc();
*/

$dbh1->close();
?>

<html lang="en-US">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html">
		<title>AU Collegiate Portal</title>
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
	</head>
	
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
					<?php
						echo "<h1 style='font-size: 24pt'>Welcome <em>".$data["firstName"]." ".$data["lastName"]."</em>!</h1>";
					?>
					<!-- Nav -->
						<nav id="nav">
							<ul>
								<?php
								echo "<li class='current'><a href='mainPage.php?email='".$data["email"].">Home</a></li>";
								echo "<li><a href='registerNewStudent.php?email=".$data["email"]."'>Register Student</a></li>";
								echo "<li><a href='chooseStudent.php?email=".$verify."'>Update Student Profile</a></li>";
								echo "<li><a href='selectStudentToView.php?email=".$verify."'>View Student Information</a></li>";
								echo "<li><a href='../collegiateLogin.php'>Logout</a></li>";
								?>
							</ul>
						</nav>

				</div>

			<!-- Banner -->
				<section id="banner">
					<header>
						<?php
						echo"<h2>Logged At: <em>".date('Y-m-d H:i:s')."</em></h2>";
						?>
						<!--<a href="#" class="button">Learn More</a>-->
					</header>
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