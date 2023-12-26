<?php
include('../class/user.php');
include('../class/Database.php');

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
header("Content-Type: application/json");

$data = json_decode(file_get_contents('php://input'));
//$data = (object) [
//    'email' => 'ferd3@vhxd.sve',
//    'password' => '123',
//];

$db = new Database();
$conn = $db->getConnection();
$user = new user($conn);


$result = $user->authorization($data);


if($result['response'] === 'success') {
    http_response_code(200);
    echo json_encode([
        'message' => 'Success Login',
        'token' => $result['token'],
        'name' => $result['name'],
        'email' => $result['email'],
        'phone' => $result['phone'],
        'password' => $result['password']
    ]);
}
else if($result['response'] === 'Unauthorized'){
    http_response_code(401);
    echo json_encode([
        'message' => 'Unauthorized',
        'errors' => 'email or password incorrect'
    ]);
}