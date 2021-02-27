<?php
include('DB/DBconnection.php');
$pid = $_POST['pid'];
$pname = $_POST['pname'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$descrip = $_POST['descrip'];

$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->removeProduct($conobj,"product",$pid);

if($MyQuery)
{
    echo "Product Removed";
}
else
{
    echo "error occured";
}

?>