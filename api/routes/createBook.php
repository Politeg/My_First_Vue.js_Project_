<?php
include('../class/book.php');
include('../class/Database.php');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");


$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();
$create_book = new book($conn);

$result = $create_book->addBook($data);

echo json_encode($result);
http_response_code(200);
