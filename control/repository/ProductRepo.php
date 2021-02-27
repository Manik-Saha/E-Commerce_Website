<?php
//include('../entity/Product.php');
include ('DataAccess.php');

class ProductRepo
{
    private $db;
    function __construct()
    {
        $this->db=new DataAccess();
    }

    function GetAllProduct()
    {
        $sql="SELECT * FROM product ";
        $result = $this->db->ReaderQuery($sql);
        //$temp=new Product();
        $arr=array();
        if ($result->num_rows > 0)
        {
            //while ($row = $result->fetch_assoc()) 
            //{
               // $temp->setProductId($row["pid"]);
               // $temp->setPname($row["pname"]);
               // $temp->setBrand($row["brand"]);
               // $temp->setPrice($row["price"]);
               // $temp->setDiscription($row["discrip"]);
               // $temp->setSellerId($row["sid"]);
               // $temp->setPimage($row["pimage"]);
             //  array_push($arr,$row);
           // }
            return $result;
            
        }
        else
        {
            echo "0 result found ";
        }
    }
    function GetProductByName($name)
    {
        $sql="SELECT * FROM product WHERE pname='$name'";
        $result = $this->db->ReaderQuery($sql);

        if ($result->num_rows > 0)
        {
        return $result;    
        }
        else
        {
        return $result;
        }
    }


    function GetProduct($entity)
    {
        $sql="SELECT * FROM product WHERE pid='$entity'";
        $result = $this->db->ReaderQuery($sql);

        if ($result->num_rows > 0)
        {
        return $result;    
        }
        else
        {
            echo "0 result found ";
        }
    }

    
}
?>