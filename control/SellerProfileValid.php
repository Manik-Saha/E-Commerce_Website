<?php
include('entity/Seller.php');
include('repository/SellerRepo.php');
    session_start(); 
    $email=$_SESSION["userName"];
    $password=$_SESSION["password"];
    $entity=new Seller();
    $entity->setEmail($email);
    $entity->setPassword($password);
    $temp=new SellerRepo();
    $entity=$temp->GetSeller($entity);
   
?>