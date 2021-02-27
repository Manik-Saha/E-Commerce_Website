<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../control/DB/DBconnection.php');
$user="";
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
<link rel="stylesheet" type="text/css" href ="../CSS/myStyle.css">

 <?php
$connection = new db();
$conobj=$connection->OpenCon();

$user = $_POST['id'];
if($user !=""){
    $userQuery = $connection->showSearchOrder($conobj,"product","orders",$user);

    if ($userQuery->num_rows > 0)
    {
        echo "<table style='width:100%' border='1'>";
        echo "<tr><th>Order ID</th><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Description</th><th>Quantity</th><th>Discount</th><th>Total Price</th></tr>";
       while($row = mysqli_fetch_assoc($userQuery))
       {
           echo "<tr><td>".$row["oId"]."</td><td>".$row["pId"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td><td>".$row["quantity"]."</td><td>".$row["discount"]."</td><td>".$row["totalPrice"]."</td></tr>";
       }
       echo "</table>";
    }
    else
    {
    echo "No order found.";
    }
    $connection->CloseCon($conobj);    
}

?>

    </body>
</html>