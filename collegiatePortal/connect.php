<?php
$servername = "localhost";
$username = "root";
$dbname = "logindb";
$password = "";


//define('DB_HOST', 'localhost');
//define('DB_NAME', 'logindb');
//define('DB_USER', 'root');
//define('DB_PASSWORD','');

//Create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);
//$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());

//Check connection 
if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}
//$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
global $conn;
session_start();
   //starting the session for user profile page
if(!empty($_POST['em']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$sql = "select * from credentials where email = '$_POST[em]' AND password = '$_POST[pass]'";
	//$query = mysql_query("SELECT *  FROM credentials where email = '$_POST[user]' AND password = '$_POST[pass]'") or die(mysql_error());
	$result = $conn->query($sql) or die(mysqli_error());
	//$row = mysql_fetch_array($query) or die(mysql_error());
	$data = $result->fetch_assoc();
	if(!empty($data['email']) AND !empty($data['password']))
	{
		$_SESSION['email'] = $data['email'];
		
		if($data['universityType'] == "P"){
		//echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
		header("Location: mainPage.php?email=".$data['email']);
		}
		else if($data['universityType'] == "S")
		{
		//echo "<p>Hello student.</p>";
		header("Location: studentPage.php?email=".$data['email']);	
		}
	}
	else
	{
		header("Location: collegiateLogin.php?status=fail");
		//echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}
$conn->close();
?>