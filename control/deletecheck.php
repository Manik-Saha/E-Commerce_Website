<?php

 $error="";


if (isset($_POST['delete'])) {

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->deleteSeller($conobj,$_SESSION["userName"]);

echo $userQuery;
$connection->CloseCon($conobj);

header('Location: Login.php');

}


?>