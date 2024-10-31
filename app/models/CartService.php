<?php
require_once dirname(__DIR__, 2) . '/config/db.php';
require_once dirname(__DIR__, 1) . '/models/support.php';

class CartService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function get($uid) {
        $sql = "SELECT * FROM trong_gio_hang WHERE `UID` = $uid";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Chưa thêm sản phẩm vào giỏ hàng'];
        }
        $products = [];
        while ($row = mysqli_fetch_assoc($result)) {
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
        $product = "SELECT * FROM san_pham WHERE ID_SP = $product_id";
        $result = mysqli_query($this->conn, $product);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy sản phẩm'];
        }
        $row = mysqli_fetch_assoc($result);
        if ($row['SoLuongKho'] < $quantity) {
            return ['success'=> false, 'message' => 'Trong kho không đủ sản phẩm'];
        }
        $cart = "INSERT INTO trong_gio_hang (`UID`, ID_SP, SoLuong) VALUES ($id, $product_id, $quantity)";
        mysqli_query($this->conn, $cart);
        return ['success' => true, 'message' => 'Thêm sản phẩm vào giỏ hàng thành công'];
    }

    private function getInfo($id) {
        $sql1 = "SELECT * FROM san_pham WHERE ID_SP = $id";
        $result1 = mysqli_query($this->conn, $sql1);
        if (mysqli_num_rows($result1) === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy sản phẩm'];
        }
        $product = mysqli_fetch_assoc($result1);   
        return [
            'ten' => $product['TenSP'],
            'gia_goc' => intval($product['Gia']),
            'gia_khuyen_mai' => $product['Gia'] - $product['Gia'] * $product['TyLeGiamGia'],
        ];  
    }

    private function getImage($id) {
        $sql = "SELECT * FROM hinh_anh WHERE ID_SP = $id";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) != 0) {
            $anh = mysqli_fetch_assoc($result);
            return $anh['Anh'];
        }
        return '';
    }
}
?>