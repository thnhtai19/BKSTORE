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
    if (isset($data['the_loai'])) $the_loai = $data['the_loai'];
    else $the_loai = '';
    echo json_encode($model->getList($the_loai));
}
else {
    $response = ['error' => 'Invalid request method'];
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>