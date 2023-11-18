<title>Fayrouz Restaurant</title>
<link rel = "icon" href="img/f1.png">
<?php include "header.php"; ?>

<style type="text/css">
	tr{
		font-size: 1.2em;
		color: #6b2222;


	}
    *{
        font-family: Andalus;
    }
	tr:hover{
		background-color: #6b2222;
		color: white;
	

	}
	th{
		color: #6b2222;
		font-size: 1.3em;
        font-family: Andalus;
	}
	.del{
		color: #491717;
		text-decoration: none;
	}
	.del:hover{
		color: #ffffff;
		text-decoration: none;
		text-shadow: 2px 3px 2px #FFFFFF;
	}


</style>
<div class="content">
	<table border=1 width="100%" cellspacing="3" cellpadding="5" style="box-shadow: 5px 4px 10px 2px; font-family: times new roman; background-color:">

		<tr>
			<th>TITLE</th>
			<th>PRICE</th>
			<th>IMAGE</th>
			<th>REMOVE</th>
            <th>UPDATE</th>

		</tr>
		<?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
			$s = mysqli_query($con,"select * from menu");
			while($r = mysqli_fetch_array($s))
			{
			?>
				<tr align=center>
					<td><?php echo $r['title']; ?></td>
					<td><?php echo $r['price']; ?></td>
					<td><img src="<?php echo $r['image']; ?>" width=70 height=70></td>
					<td><a href="delfood.php?a=<?php echo $r['id']; ?>" class="del">DELETE</a></td>
                    <td><a href="updateMenu.php?b=<?php echo $r['id']; ?>" class="del">Edit</a></td>

				</tr>

		<?php
			}
		?>


	</table>	


</div>

