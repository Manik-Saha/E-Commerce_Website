<?php
    include('ProductRepo.php');

    $name=$_POST['name'];
    $db=new ProductRepo();
    $result=$db->GetProductByName($name);

    if ($result->num_rows > 0)
    {
        echo'<table><hr><tr><th>Image<hr></th><th></th><th>Product Id<hr></th> <th>Product Name<hr></th> <th>Brand<hr></th> <th>Price<hr></td> <th>description<hr></th> 
        </td></tr>';
        while($row = $result->fetch_assoc()) {
            echo"<tr><th><img id='img' image src='".$row["pimage"]."'><th>
            <td>".$row["pid"]."<hr></td>"."<td>".$row["pname"]."<hr></td>"."<td>".$row["brand"]."<hr></td>"
            ."<td>".$row["price"]."<hr></td>"."<td>".$row["descrip"]."<hr></td>"." <td>";
            echo'<td><a class="buy it" href="CheckOut.php?id='.$row['pid'].'">Buy it</a></td>
            <td> </td> </tr>';
        }
        echo'</table>';
    }   
    else{
            echo "No products available";
    }

?>