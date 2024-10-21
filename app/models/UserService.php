<?php
require_once dirname(__DIR__, 2) . '/config/db.php';
require_once dirname(__DIR__, 1) . '/models/support.php';

class UserService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function info($id) {
        $sql1 = "SELECT * FROM khach_hang WHERE `UID` = '$id'";
        $result1 = mysqli_query($this->conn, $sql1);
        $user1 = mysqli_fetch_assoc($result1);
        $sql2 = "SELECT * FROM `login` WHERE `UID` = '$id'";
        $result2 = mysqli_query($this->conn, $sql2);
        $user2 = mysqli_fetch_assoc($result2);
        return [
            'name' => $user2['Ten'],
            'role' => $user2['Role'],
            'phone' => $user1['SDT'],
            'sex' => $user1['GioiTinh'],
            'address' => $user1['DiaChi'],
        ];
    }

    public function diary($id) {
        $sql = "SELECT * FROM lich_su_dang_nhap WHERE `UID` = '$id'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $diary[] = [
                'ThoiGian' => $row['ThoiGian'],
                'NoiDung' => $row['NoiDung']
            ];
        }
        return $diary;
    }
}
?>
