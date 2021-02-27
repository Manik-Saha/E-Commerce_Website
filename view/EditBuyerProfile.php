<?php 
include('../control/BuyerEditProfileValidation.php');
$bid=$_SESSION["bid"];
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
<?php echo $msg ?>
<h4>Edit your profile:</h4>
<script src="../javaScript/updateBuyer.js"></script>

<form method="post" action="" onsubmit="return Validate()">
<table style="width:30%">
<p id="msg"></p>
<hr>
<tr><th><img id="img" image src="<?php echo $entity->getImage(); ?>"></th></tr>
<tr><td>UserId:</td><td><?php echo $bid; ?></td></tr>
<tr><td>First Name:</td><td><input type="text" id="fname" name="fname" value="<?php  echo $entity->getFname(); ?>"></td></tr>
<tr><td>Last Name:</td><td><input type="text" id="lname" name="lname" value="<?php echo $entity->getLname(); ?>"></td></tr>
<tr><td>Email:</td><td><input type="text" id="email" name="email" value="<?php  echo $entity->getEmail(); ?>"  ><td>
<?php echo$invalid_email ?></td></td></tr>
<tr><td>Date Of Birth:</td><td><input type="date" id="dob" name="dob" value="<?php echo $entity->getDob(); ?>"></td></tr>
<tr><td>Address:</td><td><input type="text" id="address" name="address" value="<?php echo $entity->getAddress(); ?>"  ></td></tr>
<tr><td>Gender:</td><td><?php echo $entity->getGender(); ?></td></tr>
<tr><td>Phone:</td><td><input type="text" id="phone"  name="phone"  value="<?php echo $entity->getPhone(); ?>"></td></tr>

<tr><td><br><input type="submit" name="submit" value="submit"></td>
</tr>
<tr><td><br><a href="changePassword.php">Change Password?</a></td></tr>
<tr><td><br><a href="DeleteBuyerAccount.php">Delete Account?</a></td></tr>


</table>

</form>





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
<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
</div>
</html>
