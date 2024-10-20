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

    public function changePassword() {
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'POST') {
            if (!$this->isLoggedIn()) {
                return ['success' => false, 'message' => 'Người dùng chưa đăng nhập'];
            }
            $current_password = $_POST["current_password"];
            $new_password = $_POST["new_password"];
            $email = $_SESSION["email"];
            $response = $this->model->changePassword($email, $current_password, $new_password);
            if ($response) {
                return [
                    'success' => true,
                    'message' => 'Password changed successfully',
                    'user' => [
                        'email' => $email,
                        'password' => $response['password']
                    ]
                ];
            } else {
                return ['success' => false, 'message' => 'Current password is incorrect'];
            }
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
