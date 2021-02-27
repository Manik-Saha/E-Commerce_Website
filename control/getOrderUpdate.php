<?php
include('DB/DBconnection.php');
$oid = $_POST['oid'];
$pid = $_POST['pid'];
$bid = $_POST['bid'];
$quantity = $_POST['quantity'];
$discount = $_POST['discount'];
$totalprice = $_POST['totalprice'];


$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->updateOrder($conobj,"orders",$oid,$quantity,$discount,$totalprice);

if($MyQuery)
{
    echo "Information Updated";
}
else
{
    echo "error occured";
}

?>