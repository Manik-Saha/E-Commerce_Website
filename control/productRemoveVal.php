<?php 
include('DB/DBconnection.php');
session_start(); 

$pid = "";
$pidError= "";





if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $pid = test_input($_POST["pid"]);
 
  if(empty($pid)||(!preg_match("/^[0-9 ]*$/",$pid))){
      echo "Please Enter product ID  ";
       }
  

else {
    
$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->removeProduct($conobj,"product",$_POST['pid']);

echo $userQuery;
$connection->CloseCon($conobj);
   

   /* $qry="Insert into product (price,descripname,brand,p,sid,pimage) values('$pname','$brand','$price','$description','$sid','$pimage')";
    $row = mysqli_query($con,$qry);
    if($row){
        echo "Record inserted succesfully!!";
    }*/
    /*$product->setSellerId($sid);
    $_SESSION["sid"]=$sid;

    $product->setPname($pname);
    $_SESSION["pname"]=$pname;

    $product->setBrand($brand);
    $_SESSION["brand"]=$brand;

    $product->setPrice($price);
    $_SESSION["price"]=$price;

    $product->setDescription($description);
    $_SESSION["description"]=$description;

 
  

        $p_rep=new ProductRepo();
        $p_rep->Insert($product);*/
   
}




}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>