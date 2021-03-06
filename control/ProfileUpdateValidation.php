<?php
$fname=$lname=$password=$Cpassword=$phone=$gender=$type=$homeAddress=$email=$blood=$birth=$image=$error=$id=$update=" ";
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
  
  if(empty($_POST['first_name']) || (!preg_match("/^[a-zA-z ]*$/",$_POST['first_name']))){
      $fnameError="Please enter your first name";
      $fnameFlag=FALSE;
   }
  else{ 
     $fname=$_POST['first_name'];
     $fnameFlag=TRUE;
   }

  if(empty($_POST['last_name'])||(!preg_match("/^[a-zA-z ]*$/",$_POST['last_name']))){
      $lnameError="Please enter your last name";
      $lnameFlag=FALSE;
   }
  else{ 
    $lname=test_input($_POST['last_name']); 
    $lnameFlag=TRUE;
   }

  if(empty($_POST['email'])){
    $emailError="Please enter your email";
    $emailFlag=FALSE;
  }
  else {
     
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
     $emailError = "Invalid email format";
     $emailFlag=FALSE;
    }
    else{
    $email = test_input($_POST['email']);
    $emailFlag=TRUE;
    }
  }

  if(empty($_POST['birthday'])){
      $birthError="Please enter your Date of birth";
      $birthFlag=FALSE;
    }
  else{
      $birth=test_input($_POST['birthday']);
      $birthFlag=TRUE;
    }

  if(empty($_POST['phone'])){
      $phoneError="Please enter your phone number";
      $phoneFlag=FALSE;
    }
  else{
      $phone=test_input($_POST['phone']);
      $phoneFlag = TRUE;
    }
  if(empty($_POST['gender'])){
      $genderError="Please select your gender";
      $genderFlag=FALSE;
    }
  else{
      $gender=test_input($_POST['gender']);
      $genderFlag=TRUE;
      }    

  if(empty($_POST['address'])){
       $addressError="Please fill up the address";
       $homeAddressFlag = FALSE;
    }
  else{
      $homeAddress=test_input($_POST['address']);
      $homeAddressFlag = TRUE;
     } 

              
  if(empty($_POST['blood_group'])){
       $bloodError="Please select your blood group";
       $bloodFlag = FALSE;
    }
  else{
      $blood=test_input($_POST['blood_group']);
      $bloodFlag = TRUE;
    } 
  if(empty($_POST['employeeType'])){
      $typeError="Please select employee type";
      $typeFlag = FALSE;
    }
  else{
     $type=test_input($_POST['employeeType']);
     $typeFlag= TRUE;
    } 
    
}

if (isset($_POST['submit'])) {
   

if($fnameFlag && $lnameFlag && $phoneFlag && $genderFlag && $homeAddressFlag && $bloodFlag && $birthFlag){

$connection = new db();
$conobj=$connection->OpenCon();


$flag=$connection->updateUsers($conobj,"users",$fname,$lname,$phone,$gender,$homeAddress,$email,$blood,$birth,$type);
if($flag)
{
   echo "<h1>Successfullly Updated.</h1>";
}
else
{
  echo "Error ouucued.<br>";
}

  }  
}

if (isset($_POST['DELETE'])) {
  $connection = new db();
  $conobj=$connection->OpenCon();
  $id=$_POST['id'];
  $flag=$connection->deleteEmp($conobj,$id);
  if($flag)
  {
       $connection->CloseCon($conobj);
       echo "Deleted Successfully";
  }
  else
  {
    echo "Error ouucued.";
  }
}
  ?>