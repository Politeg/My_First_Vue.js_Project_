<?php
class subscription{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getId($token){
        $query = "select * from user where token = '$token'";
        $result = $this->conn->query($query);
        foreach ($result as $item){
            $this->userId = $item['id'];
        }
    }

    public function buySubscription($data){
            $sql = "UPDATE user SET subscription_id ='$data->subscriptionID' WHERE id='$data->user_id'";
            $this->conn->query($sql);
    }
    public function showSubscription ($data){
        $query = "select subscription_id from user where id = '$data->userID'";
        $result = $this->conn->query($query);

        foreach ($result as $arr){

            foreach ($arr as $arrs){
                $id_sub = $arrs;
                $query = "select * from subscription where id = '$id_sub'";
                $sub = $this->conn->query($query);
                foreach ($sub as $subscription){
                    $name = $subscription['name'];
                    $discount = $subscription['discount'];
                    $_SESSION['discount'] = $discount;

                }}
        }
    }
}
