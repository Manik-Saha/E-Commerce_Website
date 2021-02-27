<?php
session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
</head>
<body>
<div class="sticky">
<div class="header"><h3>Update Product</h3></div>
<div class="topnav">
<a href="AddProduct.php"> < </a>
</div>
</div>
<br>
<script src="../javaScript/productSearch.js"></script>

<p id="error"></p>
<label>Enter Product Id to search</label>

  <input type="text" id="id" >
  <button  onclick="showProduct()">search</button>
<p id="mytext">
<p id="msg">

</p>
 


<br><br>

<br>


      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
</body>
</html>

<?php


?>   
