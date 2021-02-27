<?php

 $error="";

 function test_input($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['update'])) {
if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['address']) || empty($_POST['phone']) || empty($_POST['password']))
 {
   $error = " ";
}
else if ( (!preg_match("/^[a-zA-z ]*$/",$_POST['fname'])) ||  (!preg_match("/^[a-zA-z ]*$/",$_POST['lname']))){
  $error = " ";
}

else if ( $_POST['password'] < 5){
  $error = " ";
}

else if ( !preg_match('/^[0-9]*$/', $_POST['phone'])){
  $error = " ";
}

else
{

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->UpdateSeller($conobj,"users",$_SESSION["userName"],$_POST['fname'],$_POST['lname'],$_POST['address'],$_POST['phone'],$_POST['gender']);

echo $userQuery;
$connection->CloseCon($conobj);
}
}


?>
