<title>Fayrouz Restaurant</title>
<link rel = "icon" href="img/f1.png">
<?php include "header.php"; ?>

<style type="text/css">
	tr{
		font-size: 1.2em;


	}
	tr:hover{
		background-color: #491717;
		color: white;
	

	}
	th{
		color: #b34040;
		font-size: 1.3em;
	}
	.del{
		color: #491717;
		text-decoration: none;
	}
	.del:hover{
		color: #6b2222;
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
		mysqli_query($con,"delete from contactus where email='$a'");

	?>

		<br><br>
	<table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px;">

		<tr>
		<th>Message</th><th>Name</th><th>Email</th><th>Delete</th>
		</tr>
        <?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        $a = $_GET['a'];
        mysqli_query($con,"delete from contactus where message='$a'");
        echo "<div style='text-align:center; font-size:1.3em; color:red;'>Data Deleted SuccessFully</div>";
        header("location:review.php");
        ?>


	</table>	

</div>
