<?php
session_start();
class comments{
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
    public function addComment($data){
        $user_id = $this->getId($data->token);
        $query = "insert into comments (user_id , text) values ( '$user_id' , '$data->comments')";
        $this->conn->query($query);
    }
    public function output($data){
        if ($data===false){
            $array = [ 'message' => 'success',
                'status' => 201, ];
            $sql = "SELECT * FROM book ";
            $dataBook = $this->conn->query($sql);
            foreach ($dataBook as $item){
                array_push($array, [
                    'id' => $item['id'],
                    'titel' => $item['titel'],
                    'author' => $item['author'],
                    'annotation' => $item['annotation'],
                    'cover' => $item['cover'],
                    'genre' => $item['genre'],
                    'price' => $item['price']
                ]);
            }
            return $array;
        }

    }
    public function deleteComment($data){
        $query = "delete from comments where user_id = '$data->userID' and text = '$data->text'";
        $this->conn->query($query);
    }
}
