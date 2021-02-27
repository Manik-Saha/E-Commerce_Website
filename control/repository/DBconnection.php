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
 function CheckUsers($conn,$table,$userName,$password)
 {
  $result = $conn->query("SELECT * FROM ". $table." WHERE email='". $userName."' AND userPassword='". $password."'");
 
  return $result;
 }
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>