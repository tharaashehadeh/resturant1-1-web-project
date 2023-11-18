<?php $id = $_GET['id'];
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "restaurant";
$con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
mysqli_query($con,"delete from addcart where id='$id'");
header("location:cart.php");
?>