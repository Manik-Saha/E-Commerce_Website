<?php
session_start(); 
include('../control/DB/DBconnection.php');
include('../control/updatecheck.php');
include('../control/deletecheck.php');


if(empty($_SESSION["userName"])) // Destroying All Sessions
{
header("Location: ../control/login.php"); // Redirecting To Home Page
}

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
<link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
<body>

<div class="header"><h3>Your Profile</h3></div>
<div class="topnav">
<a href="SellerHome.php"><</a>
<a href="SellerHome.php"> Home </a>   
<a href="SellerProfile.php"> Profile </a>
<a href="AddProduct.php"> Add New Product </a>
<a href="CheckOrder.php"> Check Order & Delivery </a>
</div>
<center>
<br>
<?php
$radio1=$radio2=$radio3="";
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->CheckUsers($conobj,"users",$_SESSION["userName"],$_SESSION["password"]);

if ($userQuery->num_rows > 0) {
    echo "<form action='' method='post'>";
    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
  
      echo "<table><tr><td>User Id :</td><td> <input type='text' name='id' value=".$row["id"]." disabled></td></tr>";
      
      echo "<tr><td>Firstname :</td><td> <input type='text' name='fname' value=".$row["firstname"]." ></td></tr>";

      echo "<tr><td>Lastname :</td><td> <input type='text' name='lname' value=".$row["lastname"]." ></td></tr>";
   
      echo "<tr><td>Email :</td><td> <input type='text' name='email' value=".$row["email"]." disabled></td></tr>";

      echo "<tr><td>Password :</td><td> <input type='text' name='password' value=".$row["userPassword"]." ></td></tr>";
    
      echo "<tr><td>Address :</td><td> <input type='text' name='address' value=".$row["homeAddress"]." ></td></tr>";

      echo "<tr><td>Phone :</td><td> <input type='text' name='phone' value=".$row["phone"]." ></td></tr>";
  
      if($row["gender"]=='female')
      {$radio1="checked";}
      else if($row["gender"]=='male')
      {$radio2="checked";}
      else {$radio3="checked";}

      echo "<tr><td>Gender :</td><td> <input type='radio' name='gender' value='female' $radio1>Female
      <input type='radio' name='gender' value='male' $radio2>Male
      <input type='radio' name='gender' value='other' $radio3>Other </td></tr></table>" ;

    

    }
    echo   "<br><br> <input name='update' type='submit' value='Update'>";
    echo "<br><br>Delete My Account";
    echo   "<br><br> <input name='delete' type='submit' value='Delete'></form>";
  } else {
    echo "0 results";
  }



?>



<br><br>

<a href="SellerHome.php">Back</a>
</center>


<br><br>

<br>


      <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
</div>
</body>
</html>