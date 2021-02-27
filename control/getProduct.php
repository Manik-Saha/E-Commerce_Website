
<?php
include "DB/DBconnection.php";
//include('productUpdateCheck.php');

$connection = new db();
$conobj=$connection->OpenCon();

$q="";
if(isset($_GET['q'])){
  $q=intval($_GET['q']);

   $sql="SELECT * FROM product WHERE pid = '".$q."' ";

   $result=$connection->SelectQuery($conobj,$sql);
   if ($result->num_rows > 0) {
   
       while($row = $result->fetch_assoc()) {

      echo "<table><tr><td>Product Id :</td><td> ".$row["pid"]." </td></tr>";
      
      echo "<tr><td>Product Name :</td><td> ".$row["pname"]." </td></tr>";

      echo "<tr><td>Brand :</td><td> ".$row["brand"]." </td></tr>";
   
      echo "<tr><td>Price :</td><td> ".$row["price"]." </td></tr>";
    
      echo "<tr><td><br>Description :</td><td> ".$row["descrip"]." </td></tr></table>";

     
       }
     
       //echo "</table>";
     } else {
       echo "NOT EXIST!!";
     }


  
}
   


  $connection->CloseCon($conobj);
?>
