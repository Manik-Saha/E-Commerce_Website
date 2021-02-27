<?php 
session_start();
include('entity/Buyer.php');
include('repository/BuyerRepo.php');
$msg= "";
$email=$_SESSION["email"];
$password=$_SESSION["password"];
$entity=new Buyer();
$entity->setEmail($email);
$entity->setPassword($password);
$temp=new BuyerRepo();
$entity=$temp->GetBuyer($entity);
$invalid_email="";
//$msg="phase 1";
if(isset($_POST['submit']))
{
    //$msg= "phase 2";
    $buyer=new Buyer();
    //$email=$address=$phone="";
    $userId=$_SESSION["bid"];
    $email=$_POST["email"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $dob=$_POST["dob"];

    //echo $fname.$lname.$dob;


    $flag=true;

    if(empty($fname))
    {
    $flag=false;
    }
    else
    {
   
    $buyer->setFname($fname);
    }

    if(empty($lname))
    {
    $flag=false;
    }
    else
    {
 
    $buyer->setLname($lname);
    }

    if(empty($dob))
    {
    $flag=false;
    }
    else
    {
    $_SESSION["dob"]=$dob;
    $buyer->setDob($dob);
    }


    if(empty($address))
    {
    $address_empty="Fill";
    $flag=false;
    }
    else
    {
    
    $buyer->setAddress($address);
    }

    if(empty($phone))
    {
    $phone_empty="Fill"; 
    $flag=false;
    }
    else
    {

    $buyer->setPhone($phone);
    }

    if(empty($email))
    {
    $email_empty="Fill";
    $flag=false;
    }   
    else
    {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        $invalid_email="incorrect format";
        $flag=false;
    }
    else
    {
        //$_SESSION["email"]=$email;
        $buyer->setEmail($email); 
    }
    }
    if ($flag)
    {
        $buyer->setId($userId);
        $temp2=new BuyerRepo();
        $result=$temp2->UpdateBuyer($buyer);
        $_SESSION["fname"]=$fname;
        $_SESSION["email"]=$email;
        $_SESSION["address"]=$address;
        $_SESSION["phone"]=$phone;
        $_SESSION["lname"]=$lname;
        header('../view/BuyerProfile.php');
        $msg="update";
       
    }
    else
    {
        echo "fill all the info !";

    }

    

   
}

?>