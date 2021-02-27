<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../control/DB/DBconnection.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
        <title></title>
    </head>
    <body>
<link rel="stylesheet" type="text/css" href ="../CSS/mystyle.css">
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
    <div class="sticky">
<div class="header">
<h1>My profile</h1>
</div>

</div>
<div class="topnav">
<a href="AdminDashboard.php"> <</a>
<a href="AdminDashboard.php"> Home</a>
<a href="changePassword2.php">Change Password</a>
<a href="AdminProfile.php">My Profile</a>
<a href="addEmployee.php"> Add employee </a>
<a href="viewAllEmployee.php">All Employee </a>
<a href="viewAllAdmin.php">Admin </a>
<a href="viewAllseller.php">Seller </a>
<a href="viewAllDeliveryMan.php">Delivery-man </a>
<a href="viewAllProduct.php">Product </a>
<a href="viewAllOrder.php">Order </a>
<a href="Logout.php">Logout</a>
<a href=" "> about</a>
</div>
</div>
    <h3>My Profile Information : </h3>
    <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showMyProfile($conobj,"users",$_SESSION["userName"]);

if ($userQuery->num_rows > 0)
{
   while($row = mysqli_fetch_assoc($userQuery))
   {
       echo "Employee ID : ".$row["id"]."<br>";
       echo "First name : ".$row["firstname"]."<br>";
       echo "Last name : ".$row["lastname"]."<br>";
       echo "Employee type : ".$row["userType"]."<br>";
       echo "Phone : ".$row["phone"]."<br>";
       echo "Gender : ".$row["gender"]."<br>";
       echo "Address: ".$row["homeAddress"]."<br>";
       echo "Email : ".$row["email"]."<br>";
       echo "Group : ".$row["blood"]."<br>";
       echo "Date Of Birth : ".$row["birthDate"]." <br>";
   }

}
else
{
echo "0 results found.";
}
$connection->CloseCon($conobj);
?>
<br> 
<a href="EditEmployeeProfile.php">Edit</a>
<br> <br>
<br><br>

<br>

<br><br>
  <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
  </div>
    </body>
</html>