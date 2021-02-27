<?php
include('DB/DBconnection.php');
$id = $_POST['id'];
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$type = $_POST['userType'];
$email = $_POST['email'];
$homeAddress = $_POST['homeAddress'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$blood = $_POST['blood_group'];
$birth = $_POST['birthday'];

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