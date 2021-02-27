<?php
session_start();

if(session_destroy()) // Destroying All Sessions
{
setcookie('userName',$_POST['userName'],time()-1);
header("Location: Login.php"); // Redirecting To Home Page
}
?>