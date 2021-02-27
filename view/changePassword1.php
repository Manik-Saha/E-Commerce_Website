<?php 
include('../control/changePass.php');
?>

<link rel="stylesheet" href="../css/viewBuyerHome.css">
<link rel="stylesheet" href="../css/buyerProfile.css">
<!DOCTYPE html>
<html>
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
    
</body> <script src="../javaScript/changepass.js"></script>
<div class="change">
    <h4>Change Password </h4>  <?php echo  $msg;?> 
    <hr>
  
    <p id="msg"></p>
    <form method="post" action="" onsubmit="return Validate()">
    <table>
    <tr><td></td></tr>
    <tr><td><label for="oldPass">Old Password:</label></td>
    <td> <input type="password" id="oldPass" name="oldPass"></td></tr>
    <tr><td><label for="New_pass">New Password:</label></td>
    <td> <input type="password" id="newPass" name="newPass"></td></tr>
    <tr><td> <label for="conPass" >Confirm Password:</label></td>
    <td><input type="password" id="conPass" name="conPass"></td></tr>
    <tr><th><br><input type="submit" name="save" value="save"></th>
    <td><br><button onclick="back()">Back</button></td>
   </tr>
    </table>
    </form>
    
    
   
   
    
</div>
    
</body>

<br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br>
<br><br>
<br>
<br><br>
<br><br><br>
<br>
<br><br>
<br><br>
<br>
<br>
<div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
  </div>
</html>



