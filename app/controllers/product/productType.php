<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/ProductService.php';

$db = new Database();
$model = new ProductService($db->conn);
header('Content-Type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
if ($method === 'GET') {
    $json = file_get_contents('php://input');
    $data = json_decode($json, true);
    $type = $data['PhanLoai'];
    $response = $model->productType($type);
    if (!isLoggedIn()) {
        echo json_encode(["DanhSachSanPham" => $response,'LoginStatus' => true]);
    }
    else echo json_encode($response);
}
else {
    $response = ['error' => 'Invalid request method'];
    header('Content-Type: application/json');
    echo json_encode($response);
}

function isLoggedIn() {
    return isset($_SESSION["email"]);
}
?>