<?php 
include('../control/ConfirmOrderVal.php');
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
<title>
</title>
<body>
<br>
<?php echo $msg; ?>
<br><br>
<a href="BuyerHome.php">back to homepage?</a>
</body>
</html>