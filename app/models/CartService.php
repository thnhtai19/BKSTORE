<?php
require_once dirname(__DIR__, 1) . '/models/support.php';

class CartService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function get($uid) {
        $sql = "SELECT * FROM trong_gio_hang WHERE `UID` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $uid);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Chưa thêm sản phẩm vào giỏ hàng'];
        }
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        $res = [];
        foreach ($products as $product) {
            $info = $this->getInfo($product['ID_SP']);
            $image = $this->getImage($product['ID_SP']);
            $res[] = [
                'id' => $product['ID_SP'],
                'hinh_anh' => $image,
                'ten' => $info['ten'],
                'gia_goc' => $info['gia_goc'],
                'gia_khuyen_mai' => $info['gia_khuyen_mai'],
                'so_luong' => $product['SoLuong']
            ];
        }
        $res = $this->support->sort($res); 
        return ['success' => true, 'danh_sach_san_pham' => $res];
    }

    public function set($id, $product_id, $quantity) {
        $sql = "SELECT * FROM san_pham WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $product_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy sản phẩm'];
        }
        $row = $result->fetch_assoc();
        if ($row['SoLuongKho'] < $quantity) {
            return ['success'=> false, 'message' => 'Trong kho không đủ sản phẩm'];
        }
        $cart = "INSERT INTO trong_gio_hang (`UID`, ID_SP, SoLuong) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($cart);
        $stmt->bind_param("iii", $id, $product_id, $quantity);
        $stmt->execute();
        return ['success' => true, 'message' => 'Thêm sản phẩm vào giỏ hàng thành công'];
    }

    private function getInfo($id) {
        $sql = "SELECT * FROM san_pham WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy sản phẩm'];
        }
        $product = $result->fetch_assoc();  
        return [
            'ten' => $product['TenSP'],
            'gia_goc' => intval($product['Gia']),
            'gia_khuyen_mai' => $product['Gia'] - $product['Gia'] * $product['TyLeGiamGia'],
        ];  
    }

    private function getImage($id) {
        $sql = "SELECT * FROM hinh_anh WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows !== 0) {
            $anh = $result->fetch_assoc();
            return $anh['Anh'];
        }
        return '';
    }
}
?>