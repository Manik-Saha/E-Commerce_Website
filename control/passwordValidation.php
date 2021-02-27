<?php
$fname=$lname=$password=$Cpassword=$phone=$gender=$type=$homeAddress=$email=$blood=$birth=$image=$error="";
$fnameFlag=$lnameFlag=$passwordFlag=$phoneFlag=$genderFlag=$typeFlag=$homeAddressFlag=$emailFlag=$bloodFlag=$birthFlag=$imageFlag=FALSE;
$fnameError=$lnameError=$passError=$phoneError=$genderError=$typeError=$addressError=$emailError=$bloodError=$birthError=$imageError="";


function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  if(empty($_POST['password']) || empty($_POST['Cpassword'])){
    $passError="Please enter your password and confirm password";
    $passwordFlag=FALSE;
    }
  else{
    if($_POST['password'] == $_POST['Cpassword']){
      $password=test_input($_POST['password']);
      $passwordFlag=TRUE;
    }
    else{
        $passError="Password and confirm password does not match";
        $passwordFlag=FALSE;
      } 
    }
}


if (isset($_POST['submit'])) {
 
$email=$_SESSION["userName"]; 
if($passwordFlag){

include('DB/DBconnection.php'); 

$connection = new db();
$conobj=$connection->OpenCon();

$flag=$connection->changePassword($conobj,"users",$password,$email);
if($flag)
{
     $connection->CloseCon($conobj);
     echo "<h2>Password changed successfully</h2>";
}
else
{
  echo "Error ouucued.";
}

  }  
}
?>