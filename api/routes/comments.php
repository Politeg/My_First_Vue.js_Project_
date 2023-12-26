<?php
include('../class/comments.php');
include('../class/Database.php');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();

$commentsCreate = new comments($conn);
$commentsCreate->addComment($data);

http_response_code(200);
echo json_encode("OK");