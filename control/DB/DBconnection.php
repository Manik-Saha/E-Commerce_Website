<?php
class db{
    
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "e_commerce";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 function SelectQuery($conn,$sql)
 {
  $result = $conn->query($sql);
 return $result;
 }
 function CheckUsers($conn,$table,$userName,$password)
 {
  $result = $conn->query("SELECT * FROM ". $table." WHERE email='". $userName."' AND userPassword='". $password."'");
 return $result;
 }

 function insertUsers($conobj,$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$blood,$birth,$image)
 {
   $res=$conobj->prepare("INSERT INTO users(userPassword,firstname,lastname,userType,phone,gender,homeAddress,email,blood,birthDate,imageName) VALUES (?,?,?,?,?,?,?,?,?,?,?)");
   $res->bind_param("sssssssssss",$password,$fname, $lname,$type,$phone,$gender,$homeAddress,$email,$blood,$birth,$image);
   if($res->execute())
   {
      $res->close();
      return TRUE;
   }
   else
   {
      return FALSE;
   }
 }

 function showSearchEmployee($conn,$table,$user)
 {
   $result = $conn->query("SELECT * FROM ". $table."  WHERE id='". $user."'");
   return $result;
 }

 function showSearchProduct($conn,$table,$user)
 {
   $result = $conn->query("SELECT * FROM ". $table."  WHERE pid='". $user."'");
   return $result;
 }

 function showSearchOrder($conn,$table1,$table2,$user)
 {
   $result = $conn->query("SELECT * FROM ". $table1." t1, ". $table2." t2 where t1.pid = t2.pId and t2.oId='". $user."'");
   return $result;
 }

 function deleteEmp($con,$id)
 {
    $sql="DELETE from users WHERE id ='$id'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function deleteSeller($con,$userName)
 {
    $sql="DELETE from users WHERE email ='$userName'";
    if($con->query($sql) === TRUE)
    {
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function UpdateSeller($conn,$table,$uname,$fname,$lname,$address,$phone,$gender)
 {
   $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$address' WHERE email ='$uname'";
   if ($conn->query($sql) === TRUE) {
      $result="Record Updated successfully";
   } 
   else {
   $result="Error!";
   }
   return $result;
 }


 function updateUsers($con,$table,$fname,$lname,$phone,$gender,$homeAddress,$email,$blood,$birth,$type)
 {
   if($type != " ")
   {
      $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',userType='$type',homeAddress='$homeAddress',blood='$blood',birthDate='$birth' WHERE email ='$email'";
   }
   else if($type ==" ")
   {
      $sql="UPDATE $table SET firstname='$fname',lastname='$lname', gender='$gender',phone='$phone',homeAddress='$homeAddress',blood='$blood',birthDate='$birth' WHERE email ='$email'";
   }
    if($con->query($sql) === TRUE)
    {
        $con->close();
        return TRUE;
    }
    else 
    {
       return FALSE;
    }
 }

 function showMyProfile($conn,$table,$email)
 {
    $result = $conn->query("SELECT * FROM ". $table."  WHERE email='". $email."'");
    return $result;
 }

 
 function SearchProduct($conn,$table, $id)
 {
    $result = $conn->query("SELECT * FROM  $table WHERE pid='$id'");
    return $result;
 }
 
 function UpdateProduct($conn,$table,$pid,$pname,$brand,$price,$descrip)
 {
     $sql = "UPDATE $table SET pname ='$pname', brand ='$brand' , price='$price', descrip='$descrip' WHERE pid='$pid'";
    if ($conn->query($sql) === TRUE) {
       $result=true;
    } 
    else {
    $result=false;
    }
    return $result;
 }
 function removeProduct($conn,$table,$pid){
   $sql = "DELETE FROM $table WHERE pid='$pid'";
   if ($conn->query($sql) === TRUE) {
      $result="Record delete successfully";
   } 
   else {
   $result="Not Exist!";
   }
   return $result;

 }

 function SearchOrder($conn,$table, $id)
 {
    $result = $conn->query("SELECT * FROM  $table WHERE oId='$id'");
    return $result;
 }
 
 function updateOrder($conn,$table,$oid,$quantity,$discount,$totalprice)
 {
     $sql = "UPDATE $table SET quantity ='$quantity', discount ='$discount' , totalPrice='$totalprice' WHERE oId='$oid'";
    if ($conn->query($sql) === TRUE) {
       $result=true;
    } 
    else {
    $result=false;
    }
    return $result;
 }


 function showAllEmployee($conn,$table,$role)
 {
    if($role != "")
    {
      $result = $conn->query("SELECT * FROM ". $table."  WHERE userType='". $role."'");
      return $result;
    }
    else
    {
      $result = $conn->query("SELECT * FROM ". $table."");
      return $result;
    }

 }
 


 function showProduct($conn,$table,$sid)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE sid= '". $sid ."' ");
    return $result;
 }

 function showAllProduct($conn,$table)
 {
    $result = $conn->query("SELECT * FROM ". $table."");
    return $result;
 }

 function GetProductByname($conn,$table, $spname)
 {
$result = $conn->query(" SELECT * FROM  $table WHERE pname = '$spname' ");
 return $result;
 }

 function showAllOrder($conn,$table1,$table2)
 {
    $result = $conn->query("SELECT * FROM ". $table1." t1, ". $table2." t2 where t1.pid = t2.pId");
    return $result;
 }

 function changePassword($con,$table,$password,$email)
 {
   $sql="UPDATE $table SET userPassword='$password' WHERE email ='$email'";
   if($con->query($sql) === TRUE)
   {
       return TRUE;
   }
   else 
   {
      return FALSE;
   }
 }

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>