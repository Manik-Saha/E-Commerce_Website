<?php
include('../control/RegValidation.php');

?>
<!DOCTYPE html>
<html>

<head>

<script src="../javaScript/myScript.js"></script>
</head>

<body>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
<div class="sticky">
<div class="header"><h3>Publish New Product</h3></div>
<div class="topnav">
<a href="SellerHome.php"> < </a>
<a href="searchUpdateProduct.php">Update Product</a>
<a href="removeProduct.php">Remove Product</a>
</div>
</div>

<br>


<center> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateProductForm()" enctype="multipart/form-data"> 
  <table>
  <tr>
     <td><lable>Seller ID</lable></td>
     <td><lable>:</lable>  <input type="text" id="sid" name="sid" value="<?php echo @$_POST['sid'];?>" placeholder="Enter Id (Only Number)" > </td> 
     
    </tr>
 
    <tr>
     <td><lable>Product Name</lable></td>
     <td><lable>:</lable>  <input type="text" id="pname" name="pname" value="<?php echo @$_POST['pname'];?>" placeholder="Enter Name (Only Letter)" > </td> 
     
    </tr>
    
    <tr>
     <td><lable>Brand</lable></td>
     <td><lable>:</lable> <input type="text" id="brand" name="brand" value="<?php echo @$_POST['brand'];?>"  placeholder="Enter Brand"></td>
    
    </tr>
    
    <tr>
     <td><lable>Product Price</lable></td>
     <td><lable>:</lable> <input type="text" id="price" name="price" value="<?php echo @$_POST['price'];?>"  placeholder="Enter price (Only Number)"></td>
   
    </tr>
   
    <tr>
     <td><lable>Product Description</lable></td>
     <td><lable>:</lable> <input type="text" size="70" id="description" name="description" value="<?php  echo @$_POST['description']; ?>"  placeholder="Write product Description"></td>
    </tr>

  </table>

<hr>

<br><br>
Upload Image :<input type="file" name="pimage" id="pimage">
<br><br>

<input type="submit">
<input type="reset">

<br><br>
 

</form> 
<h2 id="myerror"></h2>
<?php //echo $error; ?>

<br>

<h3>All Product: </h3>
<?php
include('../control/DB/DBconnection.php');
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
</center>


<br><br>

<br>

<br><br>
      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>

</body>
</html>
