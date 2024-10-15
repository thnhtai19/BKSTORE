<?php
require_once '.../config/db.php';
require_once './support.php';

class AuthService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function info($id) {
        $sql = "SELECT * FROM users WHERE [uid] = '$id'";
        $result = mysqli_query($this->conn, $sql);
        $user = mysqli_fetch_assoc($result);
        return {
            'success' => true,
            'message' => 'Thông tin khách hàng',
            'info' => [
                'name' => $user['name'],
                'role' => $user['role'],
                'phone' => $user['phone'],
                'sex' => $user['sex'],
                'address' => $user['address'],
            ]
        }
    }

    public function diary($id) {
        $sql = "SELECT * FROM nhat_ky WHERE [uid] = '$id'";
        $result = mysqli_query($this->conn, $sql);
        $diary = mysqli_fetch_assoc($result);
        return {
            'success' => true,
            'message' => 'Nhật ký',
            'info' => [
                'id' => $diary['id'],
                'thoi_gian' => $diary['thoi_gian'],
                'noi_dung' => $diary['noi_dung'],
            ]
        }
    }
}
?>
