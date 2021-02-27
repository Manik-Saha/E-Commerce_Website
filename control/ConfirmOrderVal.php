<?php 
session_start();
include('repository/OrderRepo.php');
include('entity/Order.php');

$pid=$_SESSION["pid"];
$sid=$_SESSION["sid"];
$price=$_SESSION["price"];
$bid=$_SESSION["bid"];

$msg="";

$entity=new Order();
$entity->setProductId($pid);
$entity->setSellerId($sid);
$entity->setBuyerId($bid);
$entity->setTotalPrice($price);
$entity->setQuantity(1);
$entity->setDiscount(0.0);
$entity->setStatus("confirmed");
$temp_r=new OrderRepo();
$res=$temp_r->InsertOrder($entity);
if($res>0)
{   
    
    $msg= "Order Confired.";


}
else{
    echo "Order Not Confirm due to database error";
}
?>