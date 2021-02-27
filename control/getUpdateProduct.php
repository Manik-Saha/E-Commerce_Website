

<?php
include('DB/DBconnection.php');
$id = $_POST['id'];

if(!$id=="")
{
$connection = new db();
$conobj=$connection->OpenCon();
$MyQuery=$connection->SearchProduct($conobj,"product",$id);



if ($MyQuery->num_rows > 0) {
    echo '<form action="" method="post"><table id="addpro">';
    // output data of each row
    while($row = $MyQuery->fetch_assoc()) {
     
 echo 
 "<tr><td>ID:</td></tr><tr><td><input type='text' id='name' name='name' disabled  value='".$row["pid"]."' disable></td></tr>".
 "<tr><td>Name:</td></tr><tr><td><input type='text' id='address' name='address' disabled value='".$row["pname"]."'></td></tr>".
 "<tr><td>Brand:</td></tr><tr><td><input type='text' name='email'id='email' disabled value='".$row["brand"]."'></td></tr>".
 "<tr><td>Price:</td></tr><tr><td><input type='text' name='password'disabled id='password' value='".$row["price"]."'></td></tr>".
 "<tr><td>Description:</td></tr><tr><td><input type='text' name='telephone' disabled id='telephone' value='".$row["descrip"]."'></td></tr>";



 echo '<tr><th><br>Do you want to <a class="update" href="updateProduct.php?id='.$row['pid'].'">Update</a> Information?</th></tr>';
 

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