<?php
require_once dirname(__DIR__, 2) . '/config/db.php';
require_once dirname(__DIR__, 1) . '/models/support.php';
require_once dirname(__DIR__, 1) . '/models/ProductService.php';

class UserService {
    private $conn;
    private $support;
    private $product;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
        $this->product = new ProductService($conn);
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

    public function getBanner() {
        $sql = "SELECT * FROM banner";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy banner'];
        }
        $banner = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $banner[] = $row;
        }
        return $banner;
    }

    public function getProduct() {
        return $this->product->getList();
    }
}
?>
