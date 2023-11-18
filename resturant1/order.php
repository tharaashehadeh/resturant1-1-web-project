<?php session_start(); ?>
<?php include "header.php"; ?>
<title>Fayrouz Restaurant</title>
<link rel = "icon" href="images/f1.png">
<div style="height: 140px;"></div>
<div style="width: 90%; margin: 0 auto; background-color: silver; padding: 50px;">
    <link rel="stylesheet" href="projectStyle.css">

<?php
if(isset($_SESSION['uid']))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "restaurant";
    $con = new mysqli($host, $dbUsername, $dbPassword, $dbName);
	$uid = $_SESSION['uid'];
	$nm = $_POST['nm'];
	$mo = $_POST['mo'];
	$em = $_POST['em'];
	$ad = $_POST['ad'];
	$s= mysqli_query($con,"select * from addcart where u_id='$uid'");
	while($r = mysqli_fetch_array($s))
	{
		$p_id = $r['p_id'];
		mysqli_query($con,"insert into checkout(p_id, u_id,name,mobile,email,location) values('$p_id','$uid','$nm','$mo','$em','$ad')") or die("Error");
	?>
		
	<?php
	}


?>

	<div style="background-color: #721c24; font-size:2.3em; color: #e2e6ea;">Your Order Submit Successfully </div>


<?php
}
else
{
?>
		<div style="background-color: #721c24; color: #ffffff; padding: 20px; font-size: 2.1em;">No Record Found please Add to Cart Your Product Then Continue to Check Out</div>

<?php
}	
?>

</div>
<br><br><br>

<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-item">
                <h6>Our Location</h6>
                <p>Palestine, Nablus,<br> Amman Street</p>

            </div>
            <div class="footer-item">
                <h6>Opening Hour</h6>
                <p>Saturday To Thursday<br>9:00 AM - 12:00 PM</p>

            </div>
            <div class="footer-item">
                <h6>Contact Us</h6>
                <p>0569865648</p>
                <p>info@gmail.com</p>
                <div class="social-link">
                    <a href="https://www.facebook.com/Mariamsharaqa89"><i class="fa fa-facebook" aria-hidden="true" ></i></a>
                    <a href="https://www.instagram.com/maryoooma_kitchen/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

  
