<?php
require_once '.../config/db.php';
require_once '../models/AuthService.php';

class AuthController {
    private $model;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->model = new AuthService($conn);
    }

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: index.php");
        return ['success' => true, 'message' => 'Logout successful'];
    }
}
?>
