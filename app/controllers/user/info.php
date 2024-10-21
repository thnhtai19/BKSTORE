<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/UserService.php';

$db = new Database();
$model = new UserService($db->conn);
header('Content-Type: application/json');

$id = $_SESSION["uid"];
if (!isset($id)) echo json_encode(['success' => false, 'message' => 'Người dùng chưa đăng nhập']);
echo json_encode([
    'thong_tin' => $model->info($id),
    'nhat_ky' => $model->diary($id)
]);
?>
