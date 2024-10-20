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

    public function handleRequest() {
        $uri = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        if ($method === 'POST') {
            if ($uri === '/login') {
                $response = $this->login();
                header('Content-Type: application/json');
                echo json_encode($response);
            }
            if ($uri === '/singup') {
                $response = $this->signup();
                header('Content-Type: application/json');
                echo json_encode($response);
            }
            if ($uri === '/forgotPassword') {
                $response = $this->forgotPassword();
                header('Content-Type: application/json');
                echo json_encode($response);
            }
            if ($uri === '/changePassword') {
                $response = $this->changePassword();
                header('Content-Type: application/json');
                echo json_encode($response);
            }
            if ($uri === '/logout') {
                $response = $this->logout();
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

    public function login() {
        if ($this->isLoggedIn()) {
            return ['success' => false, 'message' => 'Người dùng đã đăng nhập'];
        }
        $email = $_POST["email"];
        $password = $_POST["password"];
        return $this->model->login($email, $password);
    }

    public function signup() {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $response = $this->model->signup($name, $email, $password);
        if ($response) {
            return [
                'success' => true,
                'message' => 'Signup successful',
                'user' => [
                    'email' => $email,
                    'password' => $password
                ]
            ];
        } else {
            return ['success' => false, 'message' => 'Error: ' . mysqli_error($this->conn)];
        }
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

    public function changePassword() {
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

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: index.php");
        return ['success' => true, 'message' => 'Logout successful'];
    }

    private function isLoggedIn() {
        return isset($_SESSION["email"]);
    }
}
?>
