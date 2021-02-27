<?php
include('../control/LoginValidation.php');
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
    <title></title>
    </head>
    <body>
   <div class="sticky">
   <div class="header"><h2>Welcome To G4 Home Applicants</h2></div>
   <div class="topnav">
   <a href="AboutUs.php">About Us</a>
   <a href="BuyerRegistration.php"> Sign up For Shopping</a>
  </div>
</div>


  <center> <fieldset>
    <legend><h3>Login</h3></legend>
    <p><?php echo $error; ?></p>
     <br>
      <form action="" method="post">
        <input type="text" placeholder="Email address" id="userName" name="userName" > 
        <br> <br>
        <input type="password" placeholder="Password" id="password" name="password" > 
        <br> <br>
        <input type="checkbox" id="remember" name="remember" value="1">Remember Me 
        <br> <br>
        <input type="submit" name = "submit" value="LOGIN">
        <br> <br>
        Want to sell or deliver something? <a href="addEmployee.php"> register here </a>
        <br> <br>
        Want to buy something? <a href="BuyerRegistration.php"> sign up </a>
     <br> <br>
     <br> <br>
      </form>

      </center>


<br><br>

<br>

<br><br>
<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
<p>© 2020 Manik|Nowrin|Syed|Mahamudul All Rights Reserved</p>
  <p><a href="AboutUs.php">About Us</a></p>

    </body>
</html>