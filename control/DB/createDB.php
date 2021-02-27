<?php
$servername ="localhost";
$username ="root";
$password ="";
// Create connection
$conn=new mysqli($servername , $username, $password);// MySQLi connection object
// Che//ck connection
if ($conn->connect_error){
die("Connection failed: ". $conn->connect_error);
}
// Create database
$sql="CREATE DATABASE e_commerce"; //query string
if ($conn->query($sql)){
echo "Database created successfully";
}
else{
echo "Error creating database: ". $conn->error;
}
$conn->close();// close MySQLi connection object
?>