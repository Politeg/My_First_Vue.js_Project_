<?php
include('../class/comments.php');
include('../class/Database.php');

$data = json_decode(file_get_contents('php://input'));

$db = new Database();

$conn = $db->getConnection();

$comments = new comments($conn);

$result = $comments -> output();

http_response_code(200);
echo json_encode("output");