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
    $userQuery = $connection->showSearchProduct($conobj,"product",$user);

    if ($userQuery->num_rows > 0)
{
    echo "<table style='width:100%' border='1'>";
    echo "<tr><th>Product ID</th><th>Product name</th><th>Brand</th><th>Price(Tk.)</th><th>Product Description</th></tr>";
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "<tr><td>".$row["pid"]."</td><td>".$row["pname"]."</td><td>".$row["brand"]."</td><td>".$row["price"]."</td><td>".$row["descrip"]."</td></tr>";
   }
   echo "</table>";
}
    else
    {
    echo "0 results found.";
    }
    $connection->CloseCon($conobj);    
}

?>
<br><a class="update" href="../view/updateProduct2.php?id=<?php echo $user ?>">Update Or delete</a>

    </body>
</html>