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
			$s = mysqli_query($con,"select * from contactus");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['message']; ?></td>
					<td><?php echo $r['name']; ?></td>
					<td><?php echo $r['email']; ?></td>
					<td><a href="delreview.php?a=<?php echo $r['message']; ?>" class="del">DELETE</a></td>
				</tr>	
		<?php	
			}
		?>


	</table>	


</div>
