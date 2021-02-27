<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
<body>

<div class="sticky">
<div class="header"><h3>Order Details</h3></div>
<div class="topnav">
<a href="SellerHome.php"><</a>
<a href="searchUpdateOrder.php">Update Order</a>
</div>
</div>
<center>
<br><br><br>

<?php
   include('../control/DB/DBconnection.php');
   $connection = new db();
   $conobj=$connection->OpenCon();
   
   $userQuery = $connection->showAllOrder($conobj,"product","orders");

     if ($userQuery->num_rows > 0)
     {
        echo "<table border='1'><tr><th>Order ID</th><th>Buyer ID</th><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Description</th><th>Quantity</th><th>Discount</th><th>Total Price</th><th>Status</th></tr>";
        while($row = mysqli_fetch_assoc($userQuery))
        {
            echo "<tr><td>".$row["oId"]."</td><td>".$row["bId"]."</td><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td><td>".$row["quantity"]."</td><td>".$row["discount"]."</td><td>".$row["totalPrice"]."</td><td>".$row["status"]."</td></tr>";
        }
        echo "</table>";
     }
     else
     {
     echo "No ordered yet.";
     }
     $connection->CloseCon($conobj);
 ?>
 <a href="SellerHome.php">Back</a>

 <br><br>

<br>
</center>

      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
 </body>
</html>
