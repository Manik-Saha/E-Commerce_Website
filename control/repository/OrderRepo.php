<?php
include('DataAccess.php');

class OrderRepo
{
    private $db;
    function __construct()
    {
        $this->db = new DataAccess();
    }

    function InsertOrder($entity)
    {
        $sql = "INSERT INTO orders( pId, bId,sId,quantity,discount,totalPrice,status)
        VALUES
        ('" . $entity->getProductId() . "','" . $entity->getBuyerId() . "','" . $entity->getSellerId() . "',
        '" . $entity->getQuantity() . "','" . $entity->getDiscount() . "','" . $entity->getTotalPrice() . "',
        '" . $entity->getStatus()."')";

        $result = $this->db->executeQuery($sql);
        if ($result > 0) {
            return $result;
        } else {
            //echo $entity->getOrderId();
            //echo "INSERT ERROR";
            return $result;
        }
    }

    function GetAllOrderById($entity)
    {
        $sql="SELECT * FROM orders WHERE bid='$entity'";
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
    function GetOrder()
    {

    }
    function UpdateOrder()
    {
    }
    function DeleteOrder()
    {
    }
}

?>