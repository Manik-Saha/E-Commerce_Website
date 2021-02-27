<?php
//$bid=$_SESSION["bid"];
include('DataAccess.php');

class BuyerRepo
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function Insert($entity)
    {
        $sql = "INSERT INTO users( userPassword, firstname,lastname,userType,phone,gender,homeAddress,email,blood,birthDate,imageName)
        VALUES
        ('"  . $entity->getPassword() . "','" . $entity->getFname() . "','" . $entity->getLname() . "',
        '" . $entity->gettyof() . "','" . $entity->getPhone() . "','" . $entity->getGender() . "',
        '" . $entity->getAddress() . "','" . $entity->getEmail() . "','" . "" . "',
        '" . $entity->getDob() . "','" . $entity->getImage() . "')";

        $result = $this->db->executeQuery($sql);
        if ($result > 0) {
            header("Location:../view/BuyerHome.php");
        } else {
            echo "userId or email exists.";
            return $result;
        }
    }

    function InsertStatement($entity)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "e_commerce";
        $conn = new mysqli($servername, $username, $password, $dbname);
        
        //$new=$this->db;
        $stmt =$conn->prepare("INSERT INTO users (userPassword, firstname,lastname,userType,phone,gender,
        homeAddress,email,blood,birthDate,imageName)  VALUES (?, ?, ?,?,?,?,?,?,?,?,?)");

        $stmt->bind_param("sssssssssss", $userPassword,$firstname, $lastname, $userType,$phone,
        $gender,$homeAddress,$email,$blood,$birthDate,$imageName);

        
        $userPassword=$entity->getPassword();
        $firstname=$entity->getFname();
        $lastname=$entity->getLname();
        $userType=$entity->gettyof();
        $phone= $entity->getPhone();
        $gender=$entity->getGender();
        $homeAddress=$entity->getAddress();
        $email=$entity->getEmail();
        $blood="";
        $birthDate=$entity->getDob();
        $imageName=$entity->getImage();

        $stmt->execute();
        echo "register done";
        $conn->close();

    }

    function GetAllBuyer()
    {
    }
    function GetBuyer($entity)
    {
        $sql="SELECT * FROM users WHERE email='". $entity->getEmail()."' AND userPassword='". $entity->getPassword()."'";
        $result = $this->db->ReaderQuery($sql);

        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc()) 
            {
                //$entity->setUserId($row["id"]);
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
    function UpdateBuyer($entity)
    {
        $id=$entity->getId();
        $email=$entity->getEmail();
        $address=$entity->getAddress();
        $phone=$entity->getPhone();
        $lname=$entity->getLname();
        $fname=$entity->getFname();
        $dob=$entity->getDob();


        $sql ="UPDATE `users` SET `phone` = '$phone', `homeAddress` = '$address', `email` = '$email'
        , `firstname` = '$fname', `lastname` = '$lname', `birthDate` = '$dob'
         WHERE `users`.`id` = $id";

        $result = $this->db->executeQuery($sql);
        return $result;
    }


    function UpdateBuyerPass($id,$pass)
    {

        $sql ="UPDATE `users` SET `userPassword` = '$pass' WHERE `users`.`id` = $id";
        $result = $this->db->executeQuery($sql);
        return $result;
    }

    function DeleteBuyer($id)
    {
        $sql ="DELETE FROM `users` WHERE `users`.`id` = $id";
        $result = $this->db->executeQuery($sql);
        return $result;
    }
}

?>