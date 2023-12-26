<?php
session_start();
class basket{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function outputBasket($data){
        $sql = "select * from basket where user_id = '$data->userID'";
        $this->conn->query($sql);
    }
}