<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../control/DB/DBconnection.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    <script>
function SearchOrder(){
  var id =  document.getElementById("search").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/mycode/E-Commerce_Website/control/getSearchOrder.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("id="+id);
}
</script>
    </head>
    <body>
    <script src="../javaScript/jquery.js"></script>
<link rel="stylesheet" type="text/css" href ="../CSS/mystyle.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
    <div class="sticky">
<div class="header">
<h1> All order</h1>
</div>

</div>
<div class="topnav">
<a href="AdminDashboard.php"> <</a>
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
<input type="text" placeholder="Search order ID"  name= "search" id="search">
<button name="search" onclick="SearchOrder()"> Search </button>
<p id="mytext"></p>
<br> <br>
    <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showAllOrder($conobj,"product","orders");

if ($userQuery->num_rows > 0)
{
    echo "<table style='width:100%' border='1'>";
    echo "<tr><th>Order ID</th><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Description</th><th>Quantity</th><th>Discount</th><th>Total Price</th></tr>";
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "<tr><td>".$row["oId"]."</td><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td><td>".$row["quantity"]."</td><td>".$row["discount"]."</td><td>".$row["totalPrice"]."</td></tr>";
   }
   echo "</table>";
}
else
{
echo "No ordered yet.";
}
$connection->CloseCon($conobj);
?>

<br><br>

<br>

<br><br>
  <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
  </div>
    </body>
</html>