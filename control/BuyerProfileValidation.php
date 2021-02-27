<?php
include('entity/Buyer.php');
include('repository/BuyerRepo.php');
    session_start(); 
    $email=$_SESSION["email"];
    $password=$_SESSION["password"];
    //echo $email;
    //echo $password;
    $entity=new Buyer();
    $entity->setEmail($email);
    $entity->setPassword($password);
    $temp=new BuyerRepo();
    $entity=$temp->GetBuyer($entity);
   
?>