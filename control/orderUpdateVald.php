<?php
include('DB/DBconnection.php');
$id=$_GET["id"];
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->SearchOrder($conobj,"orders",$id);
if ($MyQuery->num_rows > 0) {
    while($row = $MyQuery->fetch_assoc()) {
        $oid=$row["oId"];
        $pid=$row["pId"];
        $bid=$row["bId"];
        $quantity=$row["quantity"];
        $discount=$row["discount"];
        $totalprice=$row["totalPrice"];
      
    }
}

?>