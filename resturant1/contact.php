<?php
session_start();
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "restaurant";
$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);


if (isset($_POST['submit']))
{
if(!empty($_POST['message']) && !empty($_POST['name']) &&!empty($_POST['email']))
{

    $message   = $_POST['message'];
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $query = "INSERT INTO contactus (message, name, email) VALUES ('$message', '$name', '$email')";
    $run= mysqli_query($conn,$query) or die(mysqli_error());
    if($run)
    {
        echo "<script>alert('MESSAGE SEND SUCCESSFULLY');window.history.back(1);</script>";

    }
    else {
        echo "<script>alert('FAILED SEND MESSAGE')window.history.back(1);</script>";
    }

}

}
?>