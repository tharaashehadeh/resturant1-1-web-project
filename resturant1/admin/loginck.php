<title>Fayrouz Restaurant</title>
<link rel = "icon" href="img/f1.png">
<?php session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "restaurant";
$con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	$aid = $_POST['aid'];
	$pass = $_POST['pass'];

	$sql = mysqli_query($con,"select * from admin where adminid='$aid' and password='$pass'");
	if(mysqli_fetch_array($sql))
	{
		$_SESSION['aid'] = $aid;
		header("location:after_login.php");
	}
	else
	{
		echo "<center><span style='color:red; font-size:2.3em; font-weight:bold;'>Please Enter Valid AdminID and Password</span></center>";
		include "index.php";
	}
?>