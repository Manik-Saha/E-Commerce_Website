<?php
class Product
{   
    private $productId;
    private $pname;
    private $brand;
    private $price;
    private $description;
    private $sellerId;
    private $pImage;
    function __construct()
    {
    
    }


    function setProductId($productId)
    {
        $this->productId = $productId;
    }
    function getProductId()
    {
        return $this->productId;
    }
    function setPname($pname)
    {
        $this->pname = $pname;
    }
    function getPname()
    {
        return $this->pname;
    }

    function setBrand($brand)
    {
        $this->brand = $brand;
    }
    function getBrand()
    {
        return $this->brand;
    }
  
    function setPrice($price)
    {
        $this->price = $price;
    }
    function getPrice()
    {
        return $this->price;
    }


    function setDescription($description)
    {
        $this->description = $description;
    }
    function getDescription()
    {
        return $this->description;
    }
    function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
    }
    function getSellerId()
    {
        return $this->sellerId;
    }
    function setPimage($pImage)
    {
        $this->pImage = $pImage;
    }
    function getPimage()
    {
        return $this->pImage;
    }
    
}