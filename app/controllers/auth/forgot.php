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

    public function forgotPassword() {
        $email = $_POST["email"];
        $response = $this->model->forgotPassword($email);
        if ($response) {
            return [
                'success' => true,
                'message' => 'Reset password email sent',
                'user' => [
                    'email' => $email,
                    'password' => $response['password']
                ]
            ];
        } else {
            return ['success' => false, 'message' => 'No user found with this email'];
        }
    }
}
?>
