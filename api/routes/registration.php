<?php
include('../class/user.php');
include('../class/Database.php');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

$data = json_decode(file_get_contents('php://input'));

//echo json_encode($data);

$db = new Database();
$conn = $db->getConnection();
$user = new user($conn);

$result = $user->registration($data);

echo json_encode($result);

if($result === "success") {
    http_response_code(200);
} else if ($result === "errorReg") {
    http_response_code(400);
}