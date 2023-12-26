<?php
session_start();
$_SESSION['discount']=0;
include('user.php');
class book
{
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
    public function addBook($data){

        $pathToStore = "../../data/src/assets/img/";
        $uploadfile = $pathToStore . basename($_FILES['cover']['name']);
        move_uploaded_file($_FILES['cover']['tmp_name'], $uploadfile);

        $path = "/src/assets/img/" . basename($_FILES['cover']['name']);


        $sql = "INSERT INTO book (titel,annotation,cover,author,genre_id,price) VALUES 
                  ('$_POST[titel]','$_POST[annotation]','$path','$_POST[author]','$_POST[genre]','$_POST[price]')";

        $result = $this->conn->query($sql);
        if ($this->conn->error){
            return [
                'response' => 'internalServerError',
                'error' => $this->conn->error
            ];
        }
        else{
            return [
                'response' => 'success'
            ];
        }

    }

    //купить книгу
    public function addToProfile($data){
        $userID  = self::getId($data->userId);
         $query = "insert into basket (user_id, book_id) values ('$userID', '$data->bookId')";
         $this->conn->query($query);
         return "success";

    }
    //каталог
    public function allBooksIndex($data){
        //$sql = "select * from book where id='$_GET[id]' and titel like '%$search->search%' or author like '%$search->search%' ";
        //$data = $this->conn->query($sql)->fetch_assoc();
        //return ['message' => 'success',
        //    'status' => 201,
        //    'data' => $data];

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
    public function bookPage($data){
        if ($data===false){
            $array = [ 'message' => 'success',
                'status' => 201, ];
            $sql = "SELECT * FROM book where id='$_GET[id]'";
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
// удалить книгу
    public function deleteBook($data){
        $query = "delete from book where id = $data->bookID";
        $this->conn->query($query);
        return "success";
    }

}
