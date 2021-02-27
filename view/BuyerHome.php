<?php
include('../control/repository/ProductRepo.php');
session_start();  
?>
<link rel="stylesheet" href="../css/viewBuyerHome.css">
<link rel="stylesheet" href="../css/viewBuyerHomeProduct.css">
<!DOCTYPE html>
<html>
<div class="header">
<head><h1 id="title">
E-commerce site</h1>
</head>
<!-- <h5 >User: <?php //echo $_SESSION["fname"]." ". $_SESSION["lname"] ?> -->
</h5>

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
<br>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<body> <script src="../javaScript/productSearch.js"></script>

<?php if(isset($_COOKIE['username']))
{echo "User:".$_COOKIE['username']."<br><br>";
}else{}
 ?>


<input type="text" id="search" >
<button onclick="showProduct()">search</button>
<p id="error"></p>
<p id="content"></p>

<div class="main_cont">
<br>
<div class="showAllProducts">
<label >Products Available For Sale-</label>
<table><hr><tr><th>Image<hr></th><th></th><th>Product Id<hr></th> <th>Product Name<hr></th> <th>Brand<hr></th> <th>Price<hr></td> <th>description<hr></th> 
</td></tr>
<?php
$t_r=new ProductRepo();
$result=$t_r->GetAllProduct();
 while ($row = $result->fetch_assoc()) 
 {   
    
    echo "<tr><th><img id='img' image src='".$row["pimage"]."'><th>
    <td>".$row["pid"]."<hr></td>"."<td>".$row["pname"]."<hr></td>"."<td>".$row["brand"]."<hr></td>"
    ."<td>".$row["price"]."<hr></td>"."<td>".$row["descrip"]."<hr></td>";
    echo' <td><a class="buy it" href="CheckOut.php?id='.$row['pid'].'">Buy it</a></td> </tr>';
    
  
}
?>
</table>
</div>

</div>
</body>
<br>
<br>

<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
</div>
</html>
