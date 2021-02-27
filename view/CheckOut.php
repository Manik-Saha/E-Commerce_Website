<?php
session_start();
include('../control/CheckOutVal.php');
include('../control/repository/ProductRepo.php');
//echo $_SESSION["email"];
?>
<link rel="stylesheet" href="../css/viewBuyerHome.css">
<link rel="stylesheet" href="../css/viewBuyerHomeProduct.css">
<!DOCTYPE html>
<html>
<title>Checkout</title>
<div class="header">
<head><h1>
E-commerce site</h1>
</head>
</div>
<div class="sticky">
<div class="topnav">
<h4>
<a href="BuyerHome.php">Home</a> 
<a href="BuyerProfile.php">Profile</a> 
<a href="orderlist.php">Orders</a>
<a href="EditBuyerProfile.php">Customize Profile</a>
<a href="Logout.php" name="logout"> Logout</a>
</h4>
</div>
</div>

<body>
<h4>User: <?php echo $_SESSION["fname"]." ". $_SESSION["lname"] ?></h4>

<h5>Details</h5>
<?php 

$temp=new ProductRepo();
$id=$_GET["id"];
$entity=$temp->GetProduct($id);
while ($row = $entity->fetch_assoc())
{
    echo "<table style='width:30%'><tr>
    <tr><th><img id='img' image src='".$row["pimage"]."'><th></tr>
    <tr><td>Product Id:</td>"."<td>".$row["pid"]."</td></tr>".
    "<tr><td>Product Name:</td>"."<td>".$row["pname"]."</td></tr>".
    "<tr><td>Product Brand:</td>"."<td>".$row["brand"]."</td></tr>".
    "<tr><td>Product Description:</td>"."<td>".$row["descrip"]."</td></tr>".
    "<tr><td>Product Price:</td>"."<td>".$row["price"]."</td></tr></table>";

    $_SESSION["pid"]=$row["pid"];
    $_SESSION["sid"]=$row["sid"];
    $_SESSION["price"]=$row["price"];
} 
    echo "<form action='successOrder.php'>
    <br>
    <input type='submit' name = 'confirm' value='confirm'>"."<label > or, </label><a href='BuyerHome.php'>previous page?</a>"."
    </form>";
   
?>
</body>
<br>
<br>
<br>
<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
</div>
</html>
