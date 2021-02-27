<?php
include('../control/productUpdateVal.php');
?>

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

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="../javaScript/productValidate.js"></script>



 
<p id="mytext"></p>
 <center>
<table >

<tr><td>Id:</td></tr>
 <tr><td><input type="text"  id="pid_" name="pid" disabled  value="<?php echo $pid ?>"></td></tr>

 <tr><td>Name:</td></tr>
 <tr><td><input type="text" id="pname" name="pname"  value="<?php echo $pname ?>"></td></tr>

 <tr><td>Brand:</td></tr>
 <tr><td><input type='text' id='brand' name='brand'  value='<?php echo $brand ?>'></td></tr>

 <tr><td>Price:</td></tr>
 <tr><td><input type='text' name='price' id='price'  value='<?php echo $price ?>'></td></tr>

 <tr><td>Description:</td></tr>
 <tr><td><input type='text' name='descrip' id='descrip' value='<?php echo $descrip ?>'></td></tr>

<tr><td><br><br></td></tr>
 <tr><td><button type="button" id="savebtn" onclick="validate()" >Save</button></td>
 <td><button type="button" id="backbtn" onclick="back()" >Back</button> </td></tr>
</table>

<br><br>

<br>


      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
</center>
</body>
</html>