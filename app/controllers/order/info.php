<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/OrderService.php';

$db = new Database();
$model = new OrderService($db->conn);
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    $id = $_SESSION["uid"];
    if (!isset($id)) {
        echo json_encode(['success' => false, 'message' => 'Người dùng chưa đăng nhập']);
        return;
    }
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    if (isset($data['ID_DonHang'])) $ID_DonHang = $data['ID_DonHang'];
    else $ID_DonHang = '';
    $info = $model->getInfo($id, $ID_DonHang);
    if ($info['success'] == false) echo json_encode(['success' => false, 'message' => $info['message']]);
    else echo json_encode(['success' => true, 'info' => $info['info']]);
}
else {
    $response = ['error' => 'Sai phương thức yêu cầu'];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>