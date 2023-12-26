<?php
session_start();
$_SESSION['admin'] = 0;
class user{

    public $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function registration($data)
    {
        if (self::validate_registration($data) == "success"){
            $sql = "INSERT INTO user (name,email,password,number_phone) VALUES ('$data->name','$data->email','$data->password','$data->phone')";
            $this->conn->query($sql);
            return [
                "response" => $this->conn->error,
            ];
        }
        else{
            return  self::validate_registration($data);
        }
   }

   public function validate_registration($data){
       if ($data == null){
           exit();
       }
       else{
           return "success";}
       }


    public function authorization($data)
    {
        $sql = "SELECT * FROM user WHERE email='$data->email' AND password='$data->password'";
        $user = null;
        echo $this->isAdmin();
        foreach( $this->conn->query($sql) as $row){
            $user = $row;
        }
        if($user) {
            return [
                'response' => 'success',
                'token' => $this->generateToken($user['id']),
                'name' => $user['name'],
                'email' => $user['email'],
                'phone' => $user['number_phone'],
                'password' => $user['password']
            ];
        } else {
            return [
                'response' => 'unauthorized'
            ];
        }

    }
    public function generateToken($id)
    {
        $token = str_shuffle('1234567890QWERTYUIOPASDFGHJKLZXCVBNMmnbvcxzlkjhgfdsapoiuytrewq');
        $this->conn->query("UPDATE user SET token='$token' WHERE id='$id'");
        $_SESSION['token'] = $token;
        return $token;
    }

    public function isAdmin(){
        $token = $_SESSION['token'];
        $queryAdm = "select * from user where is_admin = '1' and token = '$token'";
        $result = $this->conn->query($queryAdm);
        foreach ($result as $arr){
            if ($arr){
                $_SESSION['admin']=1;
            }
        }
    }
    public function exitUser(){
        $token = $_SESSION['token'];
        $query = "update user set token = '' where token = '$token'";
        $this->conn->query($query);
        session_destroy();
        return "exit";
    }

}

