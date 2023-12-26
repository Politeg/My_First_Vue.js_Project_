<?php
include('../class/subscription.php');
include('../class/Database.php');

$data = json_decode(file_get_contents('php://input'));

$db = new Database();
$conn = $db->getConnection();
$subscription = new subscription($conn);
$result = $subscription -> buySubscription($data);

http_response_code(200);
echo json_encode("subscriptionBuy");