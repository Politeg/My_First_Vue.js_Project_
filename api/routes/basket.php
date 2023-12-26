<?php
include('../class/basket.php');
include('../class/Database.php');

$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();
$basket = new basket($conn);

$result = $basket->outputBasket($data);

http_response_code(200);
echo json_encode("basket");