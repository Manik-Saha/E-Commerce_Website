<?php
include('../control/BuyerEditProfileValidation.php');
//include('../control/repository/BuyerRepo.php');
$bid=$_SESSION["bid"];
$pass=$_SESSION["password"];
$msg="";

if(isset($_POST['save']))
{
    $opass=$_POST["oldPass"];
    $new=$_POST["newPass"];
    $con=$_POST["conPass"];

    if($opass!=$pass)
    {   
        $msg="Old Password wrong <br>";
    }

    if($new==$con)
    {
        //$br=new BuyerRepo();
        $res=$temp->UpdateBuyerPass($bid,$new);
        if($res)
        {
            $_SESSION["password"]=$new;
            $msg="Password Changed";
        }
        else
        {
            $msg="Error occured";
        }
    }
    
}
if(isset($_POST['dltAcc']))
{
    //echo "Called";
    $res=$temp->DeleteBuyer($bid);
        if($res)
        {
            echo "Account Deleted";
            header('Location:Login.php');    
        }
        else
        {
            $msg="Error occured";
        }
}

if(isset($_POST['cancel']))
{
    //echo "Called";
    header('Location:../view/EditBuyerProfile.php');
}

?>