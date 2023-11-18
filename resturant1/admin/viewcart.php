<title>Fayrouz Restaurant</title>
<link rel = "icon" href="img/f1.png">
<?php session_start();
if(isset($_SESSION['uid']))
{

include "header.php"; ?>
<div style="background-color: white; width: 98%; margin: 0 auto; ">
	<br>



	<table border=1 align="center" width=90% cellspacing="10" cellpadding="12">
		<tr>
			<th>NO</th>
			<th>Email</th>
			<th>Product ID</th>
			<th>Price</th>
			<th>Quality</th>
			<th>Total</th>
			<th>IMAGE</th>
			
			
		</tr>
		<?php
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "restaurant";
        $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        $pid = $_GET['pid'];
	    $uid = $_GET['uid'];
		$s = mysqli_query($con,"SELECT addcart.price, addcart.p_id, addcart.qty, addcart.total,addcart.id, checkout.name, addcart.u_id, menu.image
FROM addcart
INNER JOIN checkout ON addcart.p_id=checkout.p_id INNER JOIN menu on menu.id=checkout.p_id  where addcart.u_id='$uid' and checkout.p_id='$pid'");


		while($r = mysqli_fetch_array($s))
		{
		?>
		<tr>
				<td><?php echo $r['id']; ?></td>
				<td><?php echo $r['u_id']; ?></td>
				<td><?php echo $r['p_id']; ?></td>
				<td><?php echo $r['price']; ?></td>
				<td><?php echo $r['qty']; ?></td>
				<td><?php echo $r['total']; ?></td>
				<td><img src="<?php echo $r['image']; ?>" width=100 height=100></td>
			
		</tr>
		<?php
			}
		?>

	</table>
</div>


<?php
}
else
{
     header("location:index.php");
}
?>
