<?php
include('../class/book.php');
include('../class/Database.php');

$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();
$del_book = new book($conn);
$result = $del_book -> deleteBook($data);

http_response_code(200);
echo json_encode("delete");