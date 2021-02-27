<?php
//$bid=$_SESSION["bid"];
include('DataAccess.php');

class SellerRepo
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }



    function GetAllSeller()
    {
    }
    function GetSeller($entity)
    {
        $sql="SELECT * FROM users WHERE email='". $entity->getEmail()."' AND userPassword='". $entity->getPassword()."'";
        $result = $this->db->ReaderQuery($sql);

        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc()) 
            {
                $entity->setId($row["id"]);
                $entity->setPassword($row["userPassword"]);
                $entity->setFname($row["firstname"]);
                $entity->setLname($row["lastname"]);
                $entity->setTyof($row["userType"]);
                $entity->setPhone($row["phone"]);
                $entity->setGender($row["gender"]);
                $entity->setAddress($row["homeAddress"]);
                $entity->setDob($row["birthDate"]);
                $entity->setImage($row["imageName"]);
                return $entity;
            }
            
        }
        else
        {
            echo "0 result found ";
        }
        
        
    }
    /* function UpdateProduct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "e_commerce";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){die("Connection faile:".$conn->connect_error);}
        $sql="UPDATE users SET WHERE ";
        if($conn->query($sql)===TRUE){
            echo "Record updated successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    $conn->close();
  
    }
    function DeleteProduct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "e_commerce";
        $conn = new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error){die("Connection faile:".$conn->connect_error);}
        $sql="DELETE FROM users WHERE ";
        if($conn->query($sql)==TRUE){
            echo "Record deleted successfully";
        } else {
            echo "Error: " . $conn->error;
        }
    $conn->close();
    }*/
}

?>