<?php
$q = $_GET['q'];

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "restaurant";
$con = new mysqli($host, $dbUsername, $dbPassword, $dbName);


$sql="SELECT * FROM food_cat WHERE catnm = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<select name='scat' class='text'>";
while($row = mysqli_fetch_array($result)) {
  
  echo "<option value='" . $row['sub_cat'] . "'>". $row['sub_cat'] ."</option>";
  
}
echo "</select>";

?>