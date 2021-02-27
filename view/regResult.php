<?php
session_start(); 
if(empty($_SESSION["pname"])) 
{
header("Location: AddProduct.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<body>
<h2>Product Published!!</h2>

<h5><a href="SellerHome.php">Back</a></h5>

</body>
</html>

<?php


?>   