<title>Fayrouz Restaurant</title>
<link rel = "icon" href="images/f1.png">
<?php session_start();
	$uid = $_SESSION['uid'];
 include "header.php"; ?>

<style type="text/css">
	tr{

	}
	tr:hover{
		background-color: #721c24;
		color: #e2e6ea;

	}

</style>

    <link rel="stylesheet"href="cart.css">
<div style="height: 150px;"></div>
<br style="width: 90%; margin: 0 auto;">
	<center> <img src="images/cartt.png" width="10%"> </center>
<center> <p style="font-size: 2em; color: #721c24;font-family: Andalus" > My Cart </p> </center>

	<br>
	 <div>
		<?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
			$s = mysqli_query($con,"SELECT addcart.price, addcart.qty, addcart.total,addcart.id, menu.image
        FROM addcart
       INNER JOIN menu ON addcart.p_id=menu.id where addcart.u_id='$uid'");
		?>
		<table align="center" border="3" width="80%" cellpadding="8" cellspacing="20" style="color: black;border-color: #721c24;">
		<tr>
            <th>image  </th>
			<th>Price</th>
			<th>Qty</th>
			<th>Total</th>
			<th>Remove</th>
		</tr>

		<?php
			while($r = mysqli_fetch_array($s))
			{
		 ?>
			<tr>
				<td align="right"><img src="admin/<?php echo $r['image']; ?>" width=100 height=100></td>
				<td><?php echo $r['price']; ?></td>
				<td><?php echo $r['qty']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><a  href="deletecart.php?id=<?php echo $r['id']; ?>"><img src="images/delete.png" height="30%" width="30%"></a></td>

			</tr>
			
		
		<?php
		}
		?>
		</table>	
		<div style="width: 90%; padding: 20px; text-align: right;">
			<a href="checkout.php"><img src="images/checkout.png" width="40"></a>
			<a style="text-decoration: none;color:#721c24 " href="checkout.php">Confirm Order</a>
		</div>
	 </div>
</br>

</div>
