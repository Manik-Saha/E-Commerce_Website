<?php
class DataAccess
{
    public $conn;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "e_commerce");
    }

    function executeQuery($query)
    {
        $result = $this->conn->query($query);
        return $result;
    }

    function ReaderQuery($query)
    {
        $result = $this->conn->query($query);
        return $result;
    }

    function __destruct()
    {
        $this->conn->close();
    }
}