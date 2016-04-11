<!DOCTYPE HTML>
<?php
//Create php variables which holds the names of the parameters in your MYSQL database
$servername = "localhost";
$username = "root";
$password = "";
$mainDB = "professor";

$id = $_POST['parent'];
$verify = $_GET['email'];

$conn = mysqli_connect($servername, $username, $password, $mainDB);
//Check connection
if ($conn->connect_error){
	die("Connection failed: " .$conn->connect_error);
}
$sql = "SELECT * from studentInfo where userID = '$id'";
		
$result = $conn->query($sql);
//var_dump($result);
$data = $result->fetch_assoc();


$conn->close();
?>
<html>
	<head>
		<title>Viewing Student's Information</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="css/main.css" />
	
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<h1>Viewing Information</h1>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<?php
								echo "<li><a href='mainPage.php?email=".$verify."'>Home</a></li>";
								echo "<li><a href='registerNewStudent.php?email=".$verify."'>Register Student</a></li>";
								echo "<li><a href='chooseStudent.php?email=".$verify."'>Update Student Profile</a></li>";
								echo "<li class = 'current'><a href='selectStudentToView.php?email=".$verify."'>View Student Information</a></li>";
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
												<?php
													echo "<h2>Edit ".$data['firstName']." ".$data['lastName']."'s Information.</h2>";
												?>	
											</header>
												<?php
												echo "<form action = 'updateStudentInfo.php?email=".$verify."' method = 'post'>";
												?>	
													<?php 
														if (isset($_GET["field"]) && $_GET["field"] == "blank") 
														echo "<h2 style = 'color: red'> One, or all of your fields are blank!</h2>" 
													?>
													<?php    
													echo 	"<input type = 'text' name = 'bann' id = 'bann' value = ".$data['bannerID'].">";
													?>	
													<p><label for="addre">Mailing Address</label>
														<input id="addre" name="addre" type="text">
													</p>
				
													<p><label for="phNum">Phone Number</label> 
														<input id="phNum" name="phNum" type="text">
													</p>
				
													<p><label for="GPA">Cumulative GPA</label>
														<input id="GPA" name="GPA" type="text">
													</p>
				
													<p><label for="credits">Total Amount of Credit Hours: </label>
														<input id="credits" name="credits" type="text">
													</p>
				
													<p><label for="fees">Tuition & Fees: </label>
														<input id="fees" name="fees" type="text">
													</p>

													<input name="submit" id="submit" tabindex="5" value="Update" type="submit"> 	 
												</form> 							    
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