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

    public function info() {
        $id = $_SESSION["uid"];
        if (!isset($id)) return ['success' => false, 'message' => 'Người dùng chưa đăng nhập'];
        return $this->model->info($id);
    }
}
?>
