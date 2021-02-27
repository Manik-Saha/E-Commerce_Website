<?php 
  include('entity/Product.php');
  include('repository/ProductRepo.php');
session_start(); 

$product=new Product();
$pname = $brand = $price = $description = $sid = $pimage = "";
$pnameError = $brandError = $priceError = $desError= $sidError = "";





if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $pname = test_input($_POST["pname"]);
  $brand = test_input($_POST["brand"]);
  $description = test_input($_POST["description"]);
  $price = test_input($_POST["price"]);
  $sid = test_input($_POST["sid"]);
  $pimage= basename($_FILES["pimage"]["name"]);
  if(empty($pname)||(!preg_match("/^[a-zA-z ]*$/",$pname))){
      echo "Please Enter All the Information!!  ";
       }
  elseif(empty($brand)){
    echo "Please Enter The Brand Name!!  ";
      }
  elseif(empty($price)||(!preg_match("/^[0-9 ]*$/",$price))){
    echo "Please Enter The Product Price!!  ";
   }

  elseif(empty($description)){
    echo "Please Enter Product Description!!  ";
    }

    elseif(empty($sid)){
      echo "Please Enter Seller ID!!  ";
      }

else {

    $product->setSellerId($sid);
    $_SESSION["sid"]=$sid;

    $product->setPname($pname);
    $_SESSION["pname"]=$pname;

    $product->setBrand($brand);
    $_SESSION["brand"]=$brand;

    $product->setPrice($price);
    $_SESSION["price"]=$price;

    $product->setDescription($description);
    $_SESSION["description"]=$description;

    $target_dir = "../files/";
$target_file =$target_dir . basename($_FILES["pimage"]["name"]);
if (move_uploaded_file($_FILES["pimage"]["tmp_name"], $target_file)) {

  echo "The file" . basename($_FILES["pimage"]["name"]) . "has been uploaded.";
  $product->setPimage($target_file);
  $_SESSION["pimage"]=$target_file;

}
 else {
  echo "Error no file uploaded";
}
  

        $p_rep=new ProductRepo();
        $p_rep->Insert($product);
   
}




}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}



?>