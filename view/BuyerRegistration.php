<?php 
include('../control/BuyerValidation.php');
?>
<link rel="stylesheet" href="../css/buyerReg.css">
<!DOCTYPE html>
<html>
<div class="header">
    <head class="header"> <script src="../javaScript/buyerReg.js"></script>
    <title>Buyer Registration</title>
    <h2>Buyer Registration</h2>
</head>
</div>


<body>
<p id="error"></p>
<div class="main_cont">
<table  >
<hr>
<form method="post" onsubmit="return Validate()" action ="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data"> 

   <tr>
   <td><label for="fname" >First Name:</label></td><td><input type="text" id="fname" name="fname"><?php echo $fname_empty ?></td>
   </tr>

   <tr>
   <td><label for="lname" >Last Name:</label></td><td><input type="text" id="lname" name="lname"><?php echo $lname_empty ?></td>
   </tr>

   <tr>
   <td><label for="email" >Email:</label></td><td><input type="text" id="email" name="email"><?php echo $email_empty ?></td>
   </tr> 
    

   <tr>
   <td><label>Date Of Birth:</label></td>
   <td><input type="date" id ="date" name="dob"><?php echo $dob_empty ?></td>
   </tr>

   <tr>
   <td><label for="address">Address:</label></td><td><input type="text" id ="address"name="address"><?php echo $address_empty ?></td>
   </tr>

    <tr>
    <td><label for="gender">Gender:</label></td>
    <td><input type="radio" value="male" name="gender"> <label for="male">Male</label>
    <input type="radio" value="female" name="gender"> <label for="female">Female</label>
    <input type="radio" value="other" name="gender" checked> <label for="other"  >Other</label> </td>
    </tr>

    <tr>
    <td><label for="phone">Phone:</label></td><td><input type="text" id="phone" name="phone"><?php echo $phone_empty ?></td>
    </tr>
    
    <tr>
    <td><label for="password">Password:</label></td><td><input type="password" id="password" name="password"><?php echo $password_empty ?></td>
    </tr>

    <tr><td><label for="image">Upload image </label><input type="file" id="file" name="fileToUpload" id="fileToUpload" ><td><?php echo $upmsg ?></td></td></tr>

    <tr><th><br><input type="submit" name="submit" value="Submit"></th>
     <th><br><button onclick="back()">Back</button></th></tr>

</form>


</table></div>
</body>


</html>