<?php
include('DB/DBconnection.php');
$user=$seller=$delivery=$id="";
$radio1=$radio2=$Aplus=$Aminus=$Bplus=$Bminus=$Oplus=$Ominus=$ABplus=$ABminus="";
?>

<!DOCTYPE HTML>
<html lang="en">
    <head>
    </head>
    <body>
<link rel="stylesheet" type="text/css" href ="../CSS/mystyle.css">

 <?php

$connection = new db();
$conobj=$connection->OpenCon();

$user = $_POST['id'];

$userQuery = $connection->showSearchEmployee($conobj,"users",$user);

if ($userQuery->num_rows > 0)
{
        echo "<table style='width:100%' border='1'>";
        echo "<tr><th>Employee ID</th><th>firstname</th><th>lastname</th><th>userType</th><th>phone</th><th>gender</th><th>homeAddress</th><th>email</th><th>blood</th><th>birthDate</th></tr>";
       while($row = mysqli_fetch_array($userQuery))
       {
        echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["userType"]."</td><td>".$row["phone"]."</td><td>".$row["gender"]."</td><td>".$row["homeAddress"]."</td><td>".$row["email"]."</td><td>".$row["blood"]."</td><td>".$row["birthDate"]."</td></tr>";
       }
       echo "</table>";
       echo "<br>";

    }
    else
    {
    echo "0 results found.<br>";
    }
    $connection->CloseCon($conobj);    

?>
      <br><a class="update" href="../view/updateEmp.php?id=<?php echo $user ?>">Update Or delete</a>

    </body>
</html>