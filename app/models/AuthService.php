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
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Tài khoản không tồn tại'];
        }
        $user = mysqli_fetch_assoc($result);
        if (!password_verify($password, $user['password'])) {
            return ['success' => false, 'message' => 'Sai mật khẩu'];
        }
        if ($user['trang_thai'] == 0) {
            return ['success' => false, 'message' => 'Người dùng đã bị cấm'];
        }      
        $ip = $this->getIPAddress();
        $thoi_gian = $this->support->startTime();
        $nhat_ky = "INSERT INTO nhat_ky ([uid], thoi_gian, noi_dung) VALUES ('$user[uid]', '$thoi_gian', 'Đã đăng nhập tài khoản IP: $ip')";
        mysqli_query($this->conn, $nhat_ky);
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $password;
        $_SESSION["uid"] = $user['uid'];
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
        $start = $this->support->startTime();
        $sql = "INSERT INTO users ([name], email, [password], [start], trang_thai, [role], phone, sex, [address]) 
                VALUES ('$name', '$email', '$password', '$start', '1', 'khach_hang', '', '', '')";
        mysqli_query($this->conn, $sql);
        return [
            'success' => true,
            'message' => 'Signup successful',
            'user' => [
                'email' => $email,
                'password' => $password
            ]
        ];
    }

    public function forgotPassword($email) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        $user = mysqli_fetch_assoc($result);
        if ($user) {
            $newPassword = $this->generateRandomPassword();
            $this->sendPasswordResetEmail($email, $newPassword);
            $this->updatePassword($email, $newPassword);
            return ["password" => $newPassword];
        } else {
            return false;
        }
    }

    public function changePassword($email, $current_password, $new_password) {
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            if ($user['password'] === $current_password) {
                $this->updatePassword($email, $new_password);
                return ["email" => $email, "password" => $new_password];
            } else {
                return ['success' => false, 'message' => 'Current password is incorrect'];
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

    private function sendPasswordResetEmail($email, $newPassword) {
        $url = 'https://ttdev.id.vn/send.php';
        $data = [
            'to' => $email,
            'subject' => 'Password Reset',
            'message' => "Your new password is: $newPassword"
        ];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

    private function updatePassword($email, $newPassword) {
        $sql = "UPDATE users SET password = '$newPassword' WHERE email = '$email'";
        mysqli_query($this->conn, $sql);
    }

    private function getIPAddress() {
        $ip = $_SERVER['REMOTE_ADDR'];
        return $ip;
    }
}
?>
