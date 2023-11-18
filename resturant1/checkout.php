<?php session_start();
include "header.php";
?>
<style>

    td{
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    input{
        border-bottom-left-radius: 20px;
        border-top-right-radius: 20px;
    }
</style>
<link rel="stylesheet"href="cart.css">
<div style="height: 150px;"></div>
<div style="width: 80%; margin: 0 auto;">
		<div style="width: 50%; margin: 0 auto;">

<?php $host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "restaurant";
$con = new mysqli($host, $dbUsername, $dbPassword, $dbName); ?>

	<form action="order.php" method="post">

		<table align="center" border="5" cellspacing="14" cellpadding="12" style="width: 100%;border-color: #721c24;border-bottom-left-radius: 20px; border-top-right-radius: 20px;">
          <tr>
			<th style="border-bottom-left-radius: 20px; border-top-right-radius: 20px;"> <h3 align="center" style="font-size: 1.3em;">Order Form</h3> </th>
		<br>
            </tr>
			    <tr align="center" >

			    	<td style="color: #721c24">  Enter your name  <br>
			        <input type="text" name="nm" placeholder="Enter your name" style="width: 100%; padding: 10px; color: #e2e6ea; background-color: #491717" required="" pattern="[a-z,A-Z]*"></td>
			    		
			    </tr>

			    <tr align="center">
			    	<td style="color: #721c24 ;">   Enter Mobile no <br>
			        <input type="no" name="mo" placeholder="Enter Mobile no" style="width: 100%; padding: 10px; color: #e2e6ea; background-color: #491717" required="" pattern="\d{10}"></td>
			    </tr>

			    <tr align="center">
			    	<td style="color: #721c24">   Enter Email address <br>
			        <input type="Email" name="em" placeholder="Enter email address" style="width: 100%; padding: 10px; color: #e2e6ea; background-color: #491717"></td>
			    </tr>

                <tr align="center">
                	<td style="color: #721c24"> Enter address <br>
                 <input type="text" name="ad" placeholder="enter your address" style="width: 100%; padding: 50px; color: #e2e6ea; background-color: #491717">
                </tr>	

                <tr align="center">
                	<td colspan="4" > <input type="submit" name="s" value="Confirm Order" style="border-bottom-left-radius: 20px; border-top-right-radius: 20px;height: 50px; background-color:#721c24; color: #ffffff; padding: 10px; width: 30%;"> </td>
                	
                </tr>

                		    </table>	
			</form>
		           <br> <br>



	</div>
</div>


