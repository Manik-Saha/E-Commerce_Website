<?php
session_start(); 
if(empty($_SESSION["userName"])) 
{
header("Location: Login.php"); // Redirecting To Home Page
}
include('../control/DB/DBconnection.php');
include('../control/ProfileUpdateValidation.php');
$radio1=$radio2=$Aplus=$Aminus=$Bplus=$Bminus=$Oplus=$Ominus=$ABplus=$ABminus="";
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
<h1> My profile</h1>
</div>
<div class="topnav">
<a href="AdminDashboard.php"> Home</a>
<a href="changePassword2.php">Change Password</a>
<a href="AdminProfile.php">My Profile</a>
<a href="addEmployee.php"> Add employee </a>
<a href="viewAllAdmin.php">Admin </a>
<a href="viewAllseller.php">Seller </a>
<a href="viewAllDeliveryMan.php">Delivery-man </a>
<a href="viewAllProduct.php">Product </a>
<a href="viewAllOrder.php">Order </a>
<a href="Logout.php">Logout</a>
<a href=" "> about</a>
</div>
</div>
    <h3>Update Profile Information : </h3>
    <?php
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->showMyProfile($conobj,"users",$_SESSION["userName"]);

if ($userQuery->num_rows > 0)
{
     echo ' <form action="" method="post"> ';
     echo "<table>";

   while($row = mysqli_fetch_assoc($userQuery))
   {
    
    echo "<tr>
    <td><label for='ID'>Employee ID : </label></td>
    <td><input type='text' value=".$row["id"]." name='id' disabled></td>
    </tr>";
    
    echo "<tr>
    <td><label for='first_name'>First name : </label></td>
    <td><input type='text' value=".$row["firstname"]." name='first_name' ></td>
    <td><p style='color:red;'><?php echo $fnameError; ?></td>
    </tr>";

    echo "<tr>
    <td><label for='last_name'>Last name : </label></td>
    <td><input type='text' value=".$row["lastname"]." name='last_name' ></td>
    </tr>";

    echo "<tr>
    <td><label for='phone'>Phone number : </label></td>
    <td><input type='text' value=".$row["phone"]." name='phone' ></td>
    </tr>";

    if($row["gender"]=='male')
    {
      $radio1="checked";
    }
    else
    {
      $radio2="checked";
    }
    echo "<tr><td>Gender : </td><td><input type='radio' id='male' name='gender' value='male' $radio1> male";
    echo "<input type='radio' id='female' name='gender' value='female' $radio2> female </td></tr>";

    echo "<tr>
    <td><label for='address'>Home Address : </label></td>
    <td><input type='text' value=".$row["homeAddress"]." name='address' ></td>
    </tr>";

    echo "<tr>
    <td><label for='email'>E-mail : </label></td>
    <td><input type='text' value=".$row["email"]." name='email'></td>
    </tr>";

    if($blood =='A+')
    {
      $Aplus="selected";
    }
    else if($blood=='A-')
    {
      $Aminus="selected";
    }
    else if($blood=='B+')
    {
      $Bplus="selected";
    }
    else if($blood=='B-')
    {
      $Bminus="selected";
    }
    else if($blood=='O+')
    {
      $Oplus="selected";
    }
    else if($blood=='O-')
    {
      $Ominus="selected";
    }
    else if($blood=='AB+')
    {
      $ABplus="selected";
    }
    else if($blood=='AB-')
    {
      $ABminus="selected";
    }
    
    echo "<tr>
    <td><label for='blood_group'>Blood group :</label></td>
    <td><select name='blood_group' id='blood_group' name='blood_group'>
       <option value='A+' $Aplus>A+</option>
       <option value='A-' $Aminus>A-</option>
       <option value='B+' $Bplus>B+</option>
       <option value='B-' $Bminus>B-</option>
       <option value='O+' $Oplus>O+</option>
       <option value='O-' $Ominus>O-</option>
       <option value='AB+' $ABplus>AB+</option>
       <option value='AB-' $ABminus>AB-</option>
    </select>
    </tr>";

    echo "<tr>
    <td><label for='birthday'>Date Of birth:</label></td>
    <td> <input type='date' id='birthday' value=".$row["birthDate"]." name='birthday'></td>
    </tr>";

    echo "</table>";
   }

}
else
{
echo "0 results found.";
}
$connection->CloseCon($conobj);
?>
<br>
<tr><td><input type="submit" name = "submit" value="UPDATE"></td></tr>
<br> <br>
</form>
<br><br>

<br>

<br><br>
  <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
  </div>
    </body>
</html>