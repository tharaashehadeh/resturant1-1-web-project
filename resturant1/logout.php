<?php
session_start();
if(isset($_SESSION['id'])&& $_SESSION['id']!="")
{
    $_SESSION['id']="";
    unset($_SESSION['id']);
    session_destroy();
    header("location: account.html");

}
else
{
    header("location: account.html");
}
?>