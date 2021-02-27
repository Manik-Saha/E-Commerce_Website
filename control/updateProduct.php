<?php
include('DB/DBconnection.php');
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$descrip = $_POST['descrip'];

$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->updateProduct($conobj,"product",$pid,$pname,$brand,$price,$descrip);

if($MyQuery)
{
    echo "Information Updated";
}
else
{
    echo "error occured";
}

?>