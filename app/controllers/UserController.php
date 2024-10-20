<?php
require_once '.../config/db.php';
require_once '../models/UserService.php';

class UserController {
    private $model;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->model = new UserService($conn);
    }

    public function handleRequest() {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'GET') {
            if ($uri === '/info') {
                $response = $this->info();
                header('Content-Type: application/json');
                echo json_encode($response);
            }
            if ($uri === '/diary') {
                $response = $this->diary();
                header('Content-Type: application/json');
                echo json_encode($response);
            }
        }
        else {
            $response = ['error' => 'Invalid request method'];
            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }

    public function info() {
        $id = $_SESSION["uid"];
        if (!isset($id)) return ['success' => false, 'message' => 'Người dùng chưa đăng nhập'];
        return $this->model->info($id);
    }

    public function diary() {
        $id = $_SESSION["uid"];
        if (!isset($id)) return ['success' => false, 'message' => 'Người dùng chưa đăng nhập'];
        return $this->model->diary($id);
    }
}
?>
