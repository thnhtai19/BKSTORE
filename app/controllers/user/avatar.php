<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/UserService.php';

$db = new Database();
$model = new UserService($db->conn);
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
    if (isset($data['avatar'])) $avatar = $data['avatar'];
    else $avatar = '';
    echo json_encode($model->setAvatar($id, $avatar));
}
else {
    $response = ['error' => 'Sai phương thức yêu cầu'];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>