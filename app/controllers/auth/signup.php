<?php
require_once dirname(__DIR__, 3) . '/config/db.php';
require_once dirname(__DIR__, 2) . '/models/AuthService.php';

function signup() {
    $model = new AuthService($conn);
    header('Content-Type: application/json');
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method === 'POST') {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $response = $model->signup($name, $email, $password);
        if ($response) {
            echo json_encode($response);
        } else {
            return ['success' => false, 'message' => 'Error: ' . mysqli_error($conn)];
        }
    }
    else {
        $response = ['error' => 'Invalid request method'];
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
?>