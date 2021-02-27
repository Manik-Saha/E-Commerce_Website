<?php
  include('entity/Buyer.php');
  include('repository/BuyerRepo.php');

  $userId=$fname=$lname=$email=$dob=$address=$bloodgroup=$gender=$phone=$password="";

  $userId_empty=$fname_empty=$lname_empty=$email_empty=$dob_empty=$address_empty=$bloodgroup_empty
  =$gender_empty=$phone_empty=$password_empty="";
  $upmsg="";
  $target_file_name;
  $errormsg;
  $flag=true;
  
  session_start();
  $buyer=new Buyer();
  if(isset($_POST['submit']))
  {
    $target_dir = "../files/";   
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $target_file_name=basename($_FILES["fileToUpload"]["name"]);

        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            $upmsg= "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            $_SESSION["image"]=$target_file;
        } 
        else 
        {
            $upmsg=  "Sorry, Select A File.";
            $flag=false;
        }
      
  
    //$userId=$_POST["userId"];
    $_SESSION["bid"]=$userId;
    $fname=$_POST["fname"];
    $lname=$_POST["lname"];
    $email=$_POST["email"];
    $dob=$_POST["dob"];
    $address = $_POST["address"];
    $bloodgroup = "";
    $gender=$_POST["gender"];
    $phone=$_POST["phone"];
    $password=$_POST["password"];
    $tyof="buyer";

    
     
    /*if(empty($userId))
    {   
        $userId_empty="Fill";
        $flag=false;
    }
    else
    {
    $_SESSION["userId"]=$fname;
    $buyer->setUserId($userId);  
    echo $buyer->getUserId();
    }*/


    if(empty($fname))
    {
        $fname_empty="Fill";
        $flag=false;
    }
    else
    {
    
        $_SESSION["fname"]=$fname;
        $buyer->setFname($fname);
        $buyer->getLname();        
    }


    if(empty($lname))
    {
    $lname_empty="Fill";
    $flag=false;
    }
    else
    {
        $_SESSION["lname"]=$lname;
        $buyer->setLname($lname);        
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
        $email_empty="incorrect format";
        $flag=false;
    }
    else
    {
        $_SESSION["email"]=$email;
        $buyer->setEmail($email); 
    }
    }
    
    if(empty($dob))
    {
    $dob_empty="Fill";
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
    $_SESSION["address"]=$address;
    $buyer->setAddress($address);
    }

    if(empty($phone))
    {
    $phone_empty="Fill"; 
    $flag=false;
    }
    else
    {
    $_SESSION["phone"]=$phone;
    $buyer->setPhone($phone);
    }

    if(empty($password))
    {
    $password_empty="Fill";
    $flag=false;
    }
    else
    {
    $_SESSION["password"]=$password;
    $buyer->setPassword($password);
    }

    $buyer->setGender($gender);
    $_SESSION["gender"]=$gender;
    $buyer->setImage($target_file);
    $_SESSION["image"]=$target_file;
    $buyer->setTyof($tyof);
    $_SESSION["tyof"]=$tyof;

    if($flag)
    {
        $b_rep=new BuyerRepo();
        $b_rep->InsertStatement($buyer);
    }
    else 
    {
       
    }
  
  }
  

?>