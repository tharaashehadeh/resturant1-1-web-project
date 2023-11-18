<?php session_start();

 include "header.php"; ?>
<?php
if(isset($_POST['sb']))
{

    $pid = $_POST['pid'];
    $uid = $_POST['uid'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];
    $total  = $price*$qty;

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "restaurant";
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
    mysqli_query($con,"insert into addcart(p_id,u_id,price,qty,total ) values('$pid','$uid','$price','$qty','$total')") or die(mysqli_error($con));
    echo "<script type='text/javascript'>alert('Your data Is Add Inside Cart')</script>";

}

?>
<style>
    *{
        font-family: Andalus;

    }
    input{
        font-size: 20px;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
        width: 100px;
        height: 40px;
        text-align: center;
    }
    table{
        font-size: 20px;
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }
</style>

<link rel="stylesheet" href="cart.css">



<![endif]-->
<body>

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1 style="text-align: center; padding-top: 20px">Order List </h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box" >
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12" >

	<form action="" method="post">
		
		<table  align="center" border="3" cellspacing="14" cellpadding="12" style="color: #721c24;border-bottom-left-radius: 20px; border-top-right-radius: 20px; width: 50%"  >

			    <tr align="center">

			    	<td style="color: #721c24;">  Product ID  </td>
			    	<td> <input type="hidden" name="pid"  value="<?php echo $_GET['pid']; ?>"><?php echo $_GET['pid']; ?></td>
			    	
			    </tr>

			    <tr align="center">
			    	<td style="color: #721c24">  User Name </td>
			        <td> <input type="hidden" name="uid" value="<?php echo $_GET['uid']; ?>"><?php echo $_GET['uid']; ?></td>
			    </tr>
			    <tr align="center">
			    	<td style="color: #721c24">   Price </td>
			        <td> <input type="hidden" name="price" value="<?php echo $_GET['price']; ?>"><?php echo $_GET['price']; ?></td>
			    </tr>
				    <tr align="center">
			    	<td style="color: #721c24"> Quantity</td>
			        <td> <input type="number" name="qty" value="" min=1 max=10 required></td>
			    </tr>

                <tr align="center">
                	<td colspan="4"> <input type="submit" name="sb" value="ADD Order" style=" border-bottom-left-radius: 20px; border-top-right-radius: 20px;background-color: #721c24 ; color: #e2e6ea" ></td>
                </tr>
		</table>
	</form>

					




				</div>
			</div>
		
		</div>
	</div>
	<!-- End Contact -->
