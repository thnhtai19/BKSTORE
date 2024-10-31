<?php
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
        $sql1 = "SELECT * FROM khach_hang WHERE `UID` = ?";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->bind_param("i", $id);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
        $user1 = $result1->fetch_assoc();
        
        $sql2 = "SELECT * FROM `login` WHERE `UID` = ?";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $user2 = $result2->fetch_assoc();

        if (!$user1 || !$user2) {
            return ['success' => false, 'message' => 'Không tìm thấy người dùng'];
        }

        return [
            'name' => $user2['Ten'],
            'role' => $user2['Role'],
            'phone' => $user1['SDT'],
            'sex' => $user1['GioiTinh'],
            'address' => $user1['DiaChi'],
            'avatar' => $user2['Avatar'],
        ];
    }

    public function diary($id) {
        $sql = "SELECT * FROM lich_su_dang_nhap WHERE `UID` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $diary = [];
        while ($row = $result->fetch_assoc()) {
            $diary[] = [
                'ThoiGian' => $row['ThoiGian'],
                'NoiDung' => $row['NoiDung']
            ];
        }
        return $diary;
    }

    public function getBanner() {
        $sql = "SELECT * FROM banner";
        $result = $this->conn->query($sql);

        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy banner'];
        }
        
        $banner = [];
        while ($row = $result->fetch_assoc()) {
            $banner[] = $row;
        }
        return $banner;
    }

    public function getProduct() {
        $allProducts = $this->product->get();
        return $this->product->getList(array_slice($allProducts, -10));
    }

    public function getProductList() {
        $types = $this->product->getType();
        return $this->product->getProductList($types);
    }

    public function setAvatar($id, $avatar) {
        $sql = "SELECT * FROM `login` WHERE `UID` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Tài khoản không tồn tại'];
        }

        $avatar_sql = "UPDATE `login` SET `Avatar` = ? WHERE `UID` = ?";
        $stmt_avatar = $this->conn->prepare($avatar_sql);
        $stmt_avatar->bind_param("si", $avatar, $id);
        $stmt_avatar->execute();

        return ['success' => true, 'message' => 'Thay đổi ảnh đại diện thành công'];
    }
}
?>