<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/SystemService.php';

$db = new Database();
$model = new SystemService($db->conn);
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);

    $response = $model->getInfoList();
    echo json_encode(['success' => 'true', 'danh_sach_tin_tuc' => $response]);
}
else {
    $response = ['error' => 'Sai phương thức yêu cầu'];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>