<?php
include('../class/book.php');
include('../class/Database.php');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();
$catalog = new book($conn);
$result = $catalog -> allBooksIndex($data);

if ($result['message'] === 'success') {
    http_response_code($result['status']);
    echo json_encode($result);
} else {
    echo json_encode($result);
}