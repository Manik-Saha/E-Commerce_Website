<?php
include('../control/DB/DBconnection.php');
include('../control/ProfileUpdateValidation.php');
include('../control/deleteEmployee.php');
$user=$seller=$delivery=$id="";
$radio1=$radio2=$Aplus=$Aminus=$Bplus=$Bminus=$Oplus=$Ominus=$ABplus=$ABminus="";
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>

    </head>
    <body>
 <link rel="stylesheet" type="text/css" href ="../CSS/myStyle.css">
 <link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
<div class="header">
<h1> Admin Homepage</h1>
</div>
<div class="topnav">
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
 <?php

$connection = new db();
$conobj=$connection->OpenCon();

$user = $_GET['id'];

$userQuery = $connection->showSearchEmployee($conobj,"users",$user);

if ($userQuery->num_rows > 0)
{
      while($row = mysqli_fetch_assoc($userQuery))
      {
        $id=$row["id"];
        $type=$row["userType"];
        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $phone=$row["phone"];
        $email=$row["email"];
        $gender=$row["gender"];
        $address=$row["homeAddress"];
        $blood=$row["blood"];
        $birth=$row["birthDate"];

      }

      if($type =='Seller')
      {
        $seller="checked";
      }
      else if($type=='Delivery man')
      {
        $delivery="checked";
      }

      if($gender=='male')
      {
        $radio1="checked";
      }
      else
      {
        $radio2="checked";
      }

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
      
    }
    else
    {
    echo "0 results found.<br>";
    }
    $connection->CloseCon($conobj);    

?>
       <p id="mytext">
        <form action="" method="post">
        <table>
       <tr>
       <td><label for='ID'>Employee ID : </label></td>
       <td><input type='text' value='<?php echo $id ?>' name='id'></td>
       </tr>

       <tr>
            <td><label for="employeeType">Employee type : </label></td>
            <td><input type="radio" id="employeeType" name="employeeType" value="Seller" <?php echo $seller?>>
            <label for="seller">Seller</label>
            <input type="radio" name="employeeType" value="Delivery man" <?php echo $delivery?>>
            <label for="Delivery man">Delivery man</label></td>
            </tr>
       
       <tr>
       <td><label for='first_name'>First name : </label></td>
       <td><input type='text' id="first_name" value="<?php echo  $fname?>" name='first_name' >
       <p id='fnameError'></td>
       </tr>
   
       <tr>
       <td><label for='last_name'>Last name : </label></td>
       <td><input type='text' id='last_name' value="<?php echo $lname ?>" name='last_name' >
       <p id='lnameError'></td>
       </tr>
   
       <tr>
       <td><label for='phone'>Phone number : </label></td>
       <td><input type='text' id='phone' value="<?php echo $phone ?>" name="phone">
       <p id='phoneError'></td>
       </tr>
   

       <tr>
            <td><label for="gender">Gender : </label></td>
            <td><input type="radio" id="gender" name="gender" value="male" <?php echo $radio1 ?>>
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female" <?php echo $radio2 ?>>
            <label for="female">Female</label>
            </tr>
   
       <tr>
       <td><label for='address'>Home Address : </label></td>
       <td><input type='text' id='address' value="<?php echo $address ?>" name='address'></td>
       </tr>
   
       <tr>
       <td><label for='email'>E-mail : </label></td>
       <td><input type='text' id='email'  value="<?php echo $email ?>" name='email'>
       <p id='emailError'></td>
       </tr>
       
       <tr>
       <td><label for='blood_group'>Blood group :</label></td>
       <td><select name='blood_group' id='blood_group' name='blood_group'>
          <option value='A+' <?php echo $Aplus?> >A+</option>
          <option value='A-' <?php echo $Aminus?> >A-</option>
          <option value='B+' <?php echo $Bplus?> > B+</option>
          <option value='B-' <?php echo $Bminus?> >B-</option>
          <option value='O+' <?php echo $Oplus?> >O+</option>
          <option value='O-' <?php echo $Ominus?> >O-</option>
          <option value='AB+' <?php echo $ABplus?> >AB+</option>
          <option value='AB-' <?php echo $ABminus?> >AB-</option>
       </select>
       </tr>
   
       <tr>
       <td><label for='birthday'>Date Of birth:</label></td>
       <td> <input type='date' id='birthday' value="<?php echo $birth?>" name='birthday'></td>
       </tr>
   
       </table>
      <br>
      <input type="submit" name = "submit" value="SAVE">
      <input type="submit" name = "DELETE" value="DELETE">


      <br><br>

<br>

<br><br>
  <div class="footer">
  <p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>
  </div>
    </body>
</html>