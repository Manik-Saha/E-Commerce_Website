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
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
       <title>Seller Home</title> 
    </head>
    <body>

    <div class="header"><h2>Welcome To Seller Home Page</h2></div>

 <div class="topnav">
<a href="SellerHome.php"> Home </a>   
<a href="SellerProfile.php"> Profile </a>
<a href="AddProduct.php"> Add New Product </a>
<a href="CheckOrder.php"> Check Order & Delivery </a>
</div>

<center>
<h5> <?php echo "Loged Email: " . $_SESSION["userName"];?></h5> 
    <h5>Do you want to <a href="Logout.php">Logout</a></h5>
</center>

<br><br>
<br><br>

<br><br>

<br><br>

<br><br>

<br><br>
<br><br>

<br><br>

<br><br>

<br><br>


<br>


      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
    </body>
</html>