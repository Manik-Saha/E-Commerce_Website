<?php
include('../control/orderUpdateVald.php');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
</head>
<body>
<div class="sticky">
<div class="header"><h3>Update Order</h3></div>
<div class="topnav">
<a href="AddProduct.php"> < </a>
</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../javaScript/productValidate.js"></script>



 
<p id="mytext"></p>
 <center>
<table>

<tr><td>Order ID:</td></tr>
 <tr><td><input type="text"  id="oid_" name="oid" disabled  value="<?php echo $oid ?>"></td></tr>

 <tr><td>Product ID:</td></tr>
 <tr><td><input type="text"  id="pid_" name="pid" disabled  value="<?php echo $pid ?>"></td></tr>

 <tr><td>Buyer ID:</td></tr>
 <tr><td><input type="text"  id="bid_" name="bid" disabled  value="<?php echo $bid ?>"></td></tr>


 <tr><td>Quantity:</td></tr>
 <tr><td><input type="text" id="quantity" name="quantity"  value="<?php echo $quantity ?>"></td></tr>

 <tr><td>Discount:</td></tr>
 <tr><td><input type='text' id='discount' name='discount'  value='<?php echo $discount ?>'></td></tr>

 <tr><td>Total Price:</td></tr>
 <tr><td><input type='text' name='totalprice' id='totalprice'  value='<?php echo $totalprice ?>'></td></tr>



 <tr><td><br> <button type="button" id="savebtn" onclick="Ordervalidate()" >Save</button> </td>
 <td><br> <button type="button" id="backbtn" onclick="back()" >Back</button> </td></tr>
</table>

<br><br>

<br>

<br><br>
      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
</center>
</body>
</html>