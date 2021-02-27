<?php
include('../control/EmployeeValidation.php');
?>

<!DOCTYPE HTML>
<html>
    <head>
    <script src="../javaScript/EmployeeValidation.js"></script>
    </head>
    <body>
    <link rel="stylesheet" type="text/css" href="../css/myStyle.css" >
    <link rel="stylesheet" type="text/css" href="../css/footer.css" >
    <link rel="stylesheet" type="text/css" href="../css/colorchng.css" >
    <div class="sticky">
    <div class="header">
<h1>Register New employee</h1>
</div>
<div class="topnav">
<a href="AdminDashboard.php"> <</a>
</div>
</div>   
    <legend><h1> Register new employee page</h1></legend>
    <p id="allError">
         <table style='width:100%' border='1'>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" onsubmit="return validateForm()" enctype="multipart/form-data"> 
            
            <tr>
            <td><label for="employeeType">Employee type : </label></td>
            <td><input type="radio" id="employeeType" name="employeeType" value="Seller">
            <label for="selle">Seller</label>
            <input type="radio" name="employeeType" value="Delivery man">
            <label for="Delivery man">Delivery man</label>
            <p id="typeError"><?php //echo $typeError; ?></td>
            </tr>
           
            <tr>
            <td><label for="file">Upload image : </label></td>
            <td><input type="file" name="fileToUpload" id="fileToUpload">
            <p id="imageError"><?php //echo $imageError; ?></td>
            </tr>

            <tr>
            <td><label for="password">Password : </label></td>
            <td><input type="password" placeholder="Password" id="password" name="password" onkeyup="validatePassword()" >
            <p id="passError"><?php //echo $passError; ?></td>
            </tr>

            <tr>
            <td><label for="Cpassword">Confirm Password : </label></td>
            <td><input type="password" placeholder="Confirm password" id="Cpassword" name="Cpassword" onkeyup="validateCpassword()" >
            <p id="CpassError"><?php //echo $passError; ?></td>
            </tr> 
            
            <tr>
            <td><label for="first_name">First name : </label></td>
            <td><input type="text" placeholder="First name"  id="first_name" name="first_name" onkeyup="validateFname()" >
            <p id="fnameError"><?php //echo $fnameError; ?></td>
            </tr>

            <tr>
            <td><label for="last_name">Last name : </label></td>
            <td><input type="text" placeholder="Last name"  id="last_name" name="last_name" onkeyup="validateLname()" >
            <p id="lnameError"><?php //echo $lnameError; ?></td>
            </tr>

            <tr>
            <td><label for="phone">Phone number : </label></td>
            <td><input type="text" placeholder="phone "  id="phone" name="phone" onkeyup="validatePhone()" >
            <p id="phoneError"><?php //echo $phoneError; ?></td>
            </tr>

            <tr>
            <td><label for="gender">Gender : </label></td>
            <td><input type="radio" id="gender" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female">
            <label for="female">Female</label>
            <p id="genderError"><?php //echo $genderError; ?></td>
            </tr>

            <tr>
            <td><label for="address">Address : </label></td>
            <td><input type="text" placeholder="address"  id="address" name="address" onkeyup="validateAddress()"  > 
            <p id="addressError"><?php //echo $addressError; ?></td>
            </tr>

            <tr>
            <td><label for="email">E-mail : </label></td>
            <td><input type="text" placeholder="mymail@gmail.com"  id="email" name="email" onkeyup="validateEmail()" >
            <p id="emailError"><?php //echo $emailError; ?></td>
            </tr>

            <tr>
            <td><label for="blood_group">Blood group :</label></td>
            <td><select name="blood_group" id="blood_group" name="blood_group">
               <option>  </option>
               <option value="A+">A+</option>
               <option value="A-">A-</option>
               <option value="B+">B+</option>
               <option value="B-">B-</option>
               <option value="O+">O+</option>
               <option value="O-">O-</option>
               <option value="AB+">AB+</option>
               <option value="AB-">AB-</option>
            </select>
            <p id="bloodError"><?php //echo $bloodError; ?></td>
            </tr>

            <tr>
            <td><label for="birthday">Date Of birth:</label></td>
            <td> <input type="date" id="birthday" name="birthday">
            <p id="birthError"><?php //echo $birthError; ?></td>
            </tr>

            </table>

            <br> <br>
                          
            <input type="submit" name = "submit" value="REGISTER">
    
        <br> <br>
        </form>
        <br><br>

<br>

<br><br>
<div class="footer">
<h3> Copyright@</h3>
<p>Experience Personalized Online Shopping in Bangladesh with E-commerce</p>
</div>
    </body>
</html>