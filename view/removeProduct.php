<?php
include('../control/productRemoveVal.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
</head>
<body>
<div class="sticky">
<div class="header"><h3>Remove Product</h3></div>
<div class="topnav">
<a href="AddProduct.php"> < </a>
</div>
</div>
<script src="../javaScript/productValidate.js"></script>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
  <br><br>
    <lable>Product ID</lable>
     <lable>:</lable>  <input type="text" id="pid" name="pid" value="<?php echo @$_POST['pid'];?>" > 
     <input type="submit" value="Delete">

<br><br>
 

</form> 


<?php
//include('../control/DB/DBconnection.php');
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showAllProduct($conobj,"product");

if ($userQuery->num_rows > 0)
{
  echo "<table id='addpro'>";
   echo "<tr><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Product Description</th><th>Image</th></tr>";
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td><td><img src='".$row["pimage"]."' height='100' width='100'/></td></tr>";
   }
   echo "</table>";
}
else
{
echo "Error!!";
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