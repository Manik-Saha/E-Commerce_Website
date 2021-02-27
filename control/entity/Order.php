<?php
class Order
{
    private $orederId;
    private $productId;
    private $buyerId;
    private $sellerId;
    private $quantity;
    private $discount;
    private $totalPrice;
    private $status;


    function setOrderId($oId)
    {
        $this->OrderId = $orederId;
    }
    function getOrderId()
    {
        return $this->OrderId;
    }
    function setProductId($productId)
    {
        $this->productId = $productId;
    }
    function getProductId()
    {
        return $this->productId;
    }

    function setSellerId($sellerId)
    {
        $this->sellerId = $sellerId;
    }
    function getSellerId()
    {
        return $this->sellerId;
    }

    function setBuyerId($buyerId)
    {
        $this->buyerId = $buyerId;
    }
    function getBuyerId()
    {
        return $this->buyerId;
    }

    function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
    function getQuantity()
    {
        return $this->quantity;
    }
    function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    function getDiscount()
    {
        return $this->discount;
    }
    function setTotalPrice($totalPrice)
    {
        $this->totalPrice = $totalPrice;
    }
    function getTotalPrice()
    {
        return $this->totalPrice;
    }

    function setStatus($status)
    {
        $this->status = $status;
    }
    function getStatus()
    {
        return $this->status;
    }
    
}