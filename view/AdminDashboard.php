<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
    <div class="sticky">
<div class="header">
<h1> Admin Homepage</h1>
</div>
<div class="topnav">
<a href="AdminDashboard.php"> Home</a>
<a href="changePassword2.php">Change Password</a>
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
</div>
    <br> <br>
     <a href="AdminProfile.php"> My profile </a>
     <br> <br>
    <a href="addEmployee.php"> Add employee </a>
     <br> <br>
     <a href="viewAllAdmin.php"> View all admin </a>
     <br> <br>
     <a href="viewAllseller.php"> View all seller </a>
     <br> <br>
     <a href="viewAllDeliveryMan.php"> View all delivery man </a>
      <br> <br>
      <a href="viewAllProduct.php"> View all product </a>
      <br> <br>
      <a href="viewAllOrder.php"> View all orders </a>
      <br> <br>
      <br><br>

<br>

<br><br>

  <div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
<p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
    </body>
</html>