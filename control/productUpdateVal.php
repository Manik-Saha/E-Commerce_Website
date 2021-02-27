<?php
include('DB/DBconnection.php');
$id=$_GET["id"];
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->SearchProduct($conobj,"product",$id);
if ($MyQuery->num_rows > 0) {
    while($row = $MyQuery->fetch_assoc()) {
        $pid=$row["pid"];
        $pname=$row["pname"];
        $brand=$row["brand"];
        $price=$row["price"];
        $descrip=$row["descrip"];
      
    }
}

?>