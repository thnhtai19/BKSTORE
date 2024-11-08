<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/OrderService.php';

$db = new Database();
$model = new OrderService($db->conn);
header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'POST') {
    if (!isset($_SESSION["uid"])) {
        echo json_encode(['success' => false, 'message' => 'Người dùng chưa đăng nhập']);
        return;
    }
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    if (isset($data['PhuongThucThanhToan'])) $PhuongThucThanhToan = $data['PhuongThucThanhToan'];
    else $PhuongThucThanhToan = '';
    if (isset($data['MaGiamGia'])) $MaGiamGia = $data['MaGiamGia'];
    else $MaGiamGia = '';
    if (isset($data['SDT'])) $SDT = $data['SDT'];
    else $SDT = '';
    if (isset($data['DiaChi'])) $DiaChi = $data['DiaChi'];
    else $DiaChi = '';
    echo json_encode($model->order($_SESSION["uid"], $PhuongThucThanhToan, $MaGiamGia, $SDT, $DiaChi));
}
else {
    $response = ['error' => 'Sai phương thức yêu cầu'];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>