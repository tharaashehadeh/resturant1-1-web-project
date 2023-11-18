<title>Fayrouz Restaurant</title>
<link rel = "icon" href="img/f1.png">
<?php include "header.php"; ?>

<style type="text/css">
	tr{
		font-size: 1.2em;


	}
	tr:hover{
		background-color: #811f1f;
		color: white;
	

	}
	th{
		color: #811f1f;
		font-size: 1.3em;
	}
	.del{
		color: #6b2222;
		text-decoration: none;
	}
	.del:hover{
		color: #491717;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}


</style>
<div class="content">
	<?php
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "restaurant";
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
		$a = $_GET['a'];
		mysqli_query($con,"delete from menu where id='$a'");

		header("location:view_food.php");
	?>
		
</div>
