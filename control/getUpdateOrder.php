<?php
include('DB/DBconnection.php');
$id = $_POST['id'];

if(!$id=="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->SearchOrder($conobj,"orders",$id);



if ($MyQuery->num_rows > 0) {
    echo '<form action="" method="post"><table id="addpro">';
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
     
 echo 
 "<tr><td>Order ID:</td></tr><tr><td><input type='text' id='name' name='name' disabled  value='".$row["oId"]."' disable></td></tr>".
 "<tr><td>Product ID:</td></tr><tr><td><input type='text' id='address' name='address' disabled value='".$row["pId"]."'></td></tr>".
 "<tr><td>Buyer ID:</td></tr><tr><td><input type='text' name='email'id='email' disabled value='".$row["bId"]."'></td></tr>".
 "<tr><td>Quantity:</td></tr><tr><td><input type='text' name='password'disabled id='password' value='".$row["quantity"]."'></td></tr>".
 "<tr><td>Discount:</td></tr><tr><td><input type='text' name='password'disabled id='password' value='".$row["discount"]."'></td></tr>".
 "<tr><td>Total Price:</td></tr><tr><td><input type='text' name='telephone' disabled id='telephone' value='".$row["totalPrice"]."'></td></tr>";



 echo '<tr><th><br>Do you want to <a class="update" href="orderUpdate.php?id='.$row['oId'].'">Update</a> Information?</th></tr>';

    }
  
    echo "</table></form> 
    </body>
    </html>";
    
  }
   else {
    echo "0 results found";
  }
}
else 
{
   echo"";
}

?>