<?php 
//include('../control/ConfirmOrderVal.php');
include('../control/repository/OrderRepo.php');
session_start();
?>
<link rel="stylesheet" href="../css/viewBuyerHome.css">
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
<h4>Order List</h4>

<?php 
    $bid=$_SESSION["bid"];
    $temp_r=new OrderRepo();
    $result=$temp_r->GetAllOrderById($bid);
    if(isset($result))
    {
    echo "<table style='width:35%'><tr><td>Order Id:<hr></td><td>Product Id:<hr></td><td>Price:<hr></td><td>Status<hr></td></tr>";
    while ($row = $result->fetch_assoc()) 
    {
        echo "
        <tr>
        <td>".$row["oId"]."</td>".
        "<td>".$row["pId"]."</td>".
        "<td>".$row["totalPrice"]."</td>".
        "<td>".$row["status"]."</td></tr>";
    
    }
    echo "</table>";
    }
    else{
        echo "OrderList is empty";
    }
?>

</body><br>
<br>
<br>
<br><br>
<br>
<br><br><br>
<br>
<br>
<br>
<br><br>
<br>
<br><br><br>
<br>
<br>
<br>
<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
</div>
</html>
