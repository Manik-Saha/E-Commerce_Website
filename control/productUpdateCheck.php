<?php
//include('DB/DBconnection.php');
 $error="";

if (isset($_POST['update'])) {
if (empty($_POST['pid']) || empty($_POST['pname']) || empty($_POST['brand']) || empty($_POST['price']) || empty($_POST['descrip']))
 {
$error = "input given is invalid";
}
else
{
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateProduct($conobj,"product",$_POST["pid"],$_POST['pname'],$_POST['brand'],$_POST['price'],$_POST['descrip']);

echo $userQuery;
$connection->CloseCon($conobj);

}
}


?>
