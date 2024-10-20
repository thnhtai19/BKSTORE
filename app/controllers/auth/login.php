<?php
require_once '..../config/db.php';
require_once '.../models/AuthService.php';

class AuthController {
    private $model;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->model = new AuthService($conn);
    }

    public function login() {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'POST') {
            if ($this->isLoggedIn()) {
                return ['success' => false, 'message' => 'Người dùng đã đăng nhập'];
            }
            $email = $_POST["email"];
            $password = $_POST["password"];
            return $this->model->login($email, $password);
        }
        else {
            $response = ['error' => 'Invalid request method'];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    private function isLoggedIn() {
        return isset($_SESSION["email"]);
    }
}
?>
