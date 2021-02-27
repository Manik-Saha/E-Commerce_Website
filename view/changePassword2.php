<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../control/passwordValidation.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    <script src="../javaScript/passwordValidation.js"></script>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href ="../CSS/mystyle.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
<div class="header">
<h1> Home Applience</h1>
</div>
<div class="topnav">
<a href="AdminDashboard.php"> <</a>
<a href="AdminDashboard.php"> Home</a>
<a href="AdminProfile.php">My Profile</a>
<a href="addEmployee.php"> Add employee </a>
<a href="viewAllEmployee.php">All Employee </a>
<a href="viewAllAdmin.php">Admin </a>
<a href="viewAllseller.php">Seller </a>
<a href="viewAllDeliveryMan.php">Delivery-man </a>
<a href="viewAllProduct.php">Product </a>
<a href="viewAllOrder.php">Order </a>
<a href="Logout.php">Logout</a>
<a href=" "> about</a>
</div>

            <center><fieldset width=70%>
            <form action=" " method="post"> 
            <table style='width:100%' border='1'>
            <tr> <h3> Change Password </h3>
            <tr>
            <td><label for="password">Password : </label></td>
            <td><input type="password" placeholder="Password" id="password" name="password" onkeyup="validatePassword()" >
            <p id="passError"><?php //echo $passError; ?></td>
            </tr>

            <tr>
            <td><label for="Cpassword">Confirm Password : </label></td>
            <td><input type="password" placeholder="Confirm password" id="Cpassword" name="Cpassword" onkeyup="validateCpassword()" >
            <p id="CpassError"><?php //echo $passError; ?></td>
            </tr> 
            </table>

        <br> <br>
        <input type="submit" name = "submit" value="CHANGE">
        <br><br>

    </body>
</html>