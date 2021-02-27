<?php
include('DB/DBconnection.php');

session_start();
$error="";
// store session data
if (isset($_POST['submit'])) {
if (empty($_POST['userName']) || empty($_POST['password'])) {
$error = "Enter user name or password";
}
else
{
$userName=$_POST['userName'];
$password=$_POST['password'];
$rem=$_POST['remember'];
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery = $connection->CheckUsers($conobj,"users",$userName,$password);

if ($userQuery->num_rows > 0)
{
  while($row = mysqli_fetch_assoc($userQuery))
  {
    //<?php echo $row["userType"]
    if($row["userType"] == "Admin")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: AdminDashboard.php');
    }
    else if($row["userType"] == "buyer")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["fname"] = $row["firstname"] ;
      $_SESSION["lname"] = $row["lastname"] ;
      $_SESSION["email"] = $row["email"] ;
      $_SESSION["bid"] = $row["id"] ;
      $_SESSION["password"] = $row["userPassword"] ;

      header('Location: ../view/BuyerHome.php');
    }
    else if($row["userType"] == "Seller")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: SellerHome.php');
    }
    else if($row["userType"] == "Delivery man")
    {
      if(isset($_POST['remember'])){
        setcookie('userName',$_POST['userName'],time()+60*60*7);
      }
      $_SESSION["userName"] = $userName;
      $_SESSION["password"] = $password;
      header('Location: DeliveryHome.php');
    }
    
  }
}
 else {
$error = "Username or Password is invalid";
}
$connection->CloseCon($conobj);

}
}


?>
