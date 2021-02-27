<?php 
include('../control/BuyerProfileValidation.php');
//session_start();
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
<h4>Welcome to profile.</h4>
<table >
<hr>
<div class="main_cont"> </div>
<tr><th><img id="img" image src="<?php echo $entity->getImage(); ?>"></th></tr>
<tr><td>UserId:</td><td><?php echo $bid; ?></td></tr>
<tr><td>First Name:</td><td><?php echo $entity->getFname(); ?></td></tr>
<tr><td>Last Name:</td><td><?php echo $entity->getLname(); ?></td></tr>
<tr><td>Email:</td><td><?php echo $entity->getEmail(); ?></td></tr>
<tr><td>Date Of Birth:</td><td><?php echo $entity->getDob(); ?></td></tr>
<tr><td>Address:</td><td><?php echo $entity->getAddress(); ?></td></tr>
<tr><td>Gender:</td><td><?php echo $entity->getGender(); ?></td></tr>
<tr><td>Phone:</td><td><?php echo $entity->getPhone(); ?></td></tr>


</table>


</body>

<br>
<br>
<br>
<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
</div>
</html>
