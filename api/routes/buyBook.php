<?php
include('../class/book.php');
include('../class/Database.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();
$buy_book = new book($conn);
$result = $buy_book -> addToProfile($data);

if (!empty($result)){
    http_response_code(200);
    echo json_encode($result);
}else{
    http_response_code(422);
    echo json_encode("Ошибка");
}