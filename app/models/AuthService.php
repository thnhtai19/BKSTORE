<?php
require_once dirname(__DIR__, 2) . '/config/db.php';
require_once dirname(__DIR__, 1) . '/models/support.php';

class AuthService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function login($email, $password) {
        $sql = "SELECT * FROM `login` WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Tài khoản không tồn tại'];
        }
        $user = mysqli_fetch_assoc($result);
        if ($password != $user['Password']) {
            return ['success' => false, 'message' => 'Sai mật khẩu'];
        }
        $ip = $this->getIPAddress();
        $thoi_gian = $this->support->startTime();
        $uid = $user['UID'];
        $nhat_ky = "INSERT INTO lich_su_dang_nhap (`UID`, ThoiGian, NoiDung) VALUES ('$uid', '$thoi_gian', 'Đã đăng nhập tài khoản IP: $ip')";
        mysqli_query($this->conn, $nhat_ky);
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["uid"] = $user['UID'];
        $_SESSION["Ten"] = $user['Ten'];
        $_SESSION["Role"] = $user['Role'];
        $_SESSION["Avatar"] = $user['Avatar'];
        return [
            'success' => true,
            'message' => 'Đăng nhập thành công',
            'user' => [
                'email' => $email,
                'password' => $password
            ]
        ];
    }

    public function signup($name, $email, $password) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return ['success' => false, 'message' => 'Email không hợp lệ'];
        }
        $checkEmailQuery = "SELECT email FROM login WHERE email = '$email'";
        $result = mysqli_query($this->conn, $checkEmailQuery);
        if (mysqli_num_rows($result) > 0) {
            return ['success' => false, 'message' => 'Tài khoản đã được đăng ký'];
        }
        if (empty($password)) {
            return ['success' => false, 'message' => 'Vui lòng nhập mật khẩu'];
        }
        $sql = "INSERT INTO `login` (ten, email, `password`, `role`) 
                VALUES ('$name', '$email', '$password', 'Customer')";
        mysqli_query($this->conn, $sql);
        $sql1 = "SELECT * FROM `login` WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql1);
        $user = mysqli_fetch_assoc($result);
        $uid = $user['UID'];
        $sql2 = "INSERT INTO `khach_hang` (`UID`) VALUES ('$uid')";
        mysqli_query($this->conn, $sql2);
        return [
            'success' => true,
            'message' => 'Đăng ký thành công',
            'user' => [
                'email' => $email,
                'password' => $password
            ]
        ];
    }

    public function forgotPassword($email) {
        $sql = "SELECT * FROM `login` WHERE Email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $newPassword = $this->generateRandomPassword();
            $sent = $this->sendPasswordResetEmail($email, $newPassword);
            // $this->updatePassword($email, $newPassword);
            if ($sent['status']) {
                return ['status' => true, 'password' => $newPassword];
            } else {
                return ['status' => false, 'error' => $sent['message']];
            }
        } else {
            return false;
        }
    }

    public function changePassword($email, $current_password, $new_password) {
        $sql = "SELECT * FROM `login` WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if ($user['Password'] == $current_password) {
                $this->updatePassword($email, $new_password);
                return ['status' => true, 'password' => $new_password];
            } else {
                return ['status' => false, 'error' => 'Sai mật khẩu'];
            }
        }
        return false;
    }

    private function generateRandomPassword() {
        $length = 12;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $password = '';
        for ($i = 0; $i < $length; $i++) {
            $password .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $password;
    }

    function sendPasswordResetEmail($email, $newPassword) {
        $url = 'https://ttdev.id.vn/send.php';
        $data = [
            'email' => $email,
            'mess' => "Your new password is: $newPassword",
        ];
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
        $response = curl_exec($ch);
        curl_close($ch);
        $responseData = json_decode($response, true);
        if ($responseData['status'] === 'success') {
            return [
                'status' => true,
                'email' => $email,
                'password' => $newPassword
            ];
        } else {
            return [
                'status' => false,
                'message' => $responseData
            ];
        }
    }    

    private function updatePassword($email, $newPassword) {
        $sql = "UPDATE `login` SET `Password` = '$newPassword' WHERE Email = '$email'";
        mysqli_query($this->conn, $sql);
    }

    private function getIPAddress() {
        $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }
}
?>
