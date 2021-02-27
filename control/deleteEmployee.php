<?php
function deleteEmp()
{
    include('DB/DBconnection.php');
    
    $connection = new db();
    $conobj=$connection->OpenCon();
    
    $flag=$connection->deleteEmp($conobj,$id);
    if($flag)
    {
         $connection->CloseCon($conobj);
         echo "Deleted Successfully";
    }
    else
    {
      echo "Error ouucued.";
    }
} 

?>