<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/AuthService.php';

$db = new Database();
$model = new AuthService($db->conn);
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    if (isset($data['name'])) $name = $data['name'];
    else $name = '';
    if (isset($data['email'])) $email = $data['email'];
    else $email = '';
    if (isset($data['password'])) $password = $data['password'];
    else $password = '';
    $response = $model->signup($name, $email, $password);
    if ($response) {
        echo json_encode($response);
    } else {
        return ['success' => false, 'message' => 'Error: ' . mysqli_error($db->conn)];
    }
}
else {
    $response = ['error' => 'Invalid request method'];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>