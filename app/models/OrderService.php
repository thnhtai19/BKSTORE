<?php
require_once dirname(__DIR__, 1) . '/models/support.php';
require_once dirname(__DIR__, 1) . '/models/ProductService.php';

class OrderService {
    private $conn;
    private $support;
    private $product;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
        $this->product = new ProductService($conn);
    }

    public function sale($tienHang, $MaGiamGia, $phiVanChuyen, $PhuongThucThanhToan) {
        $sql1 = "SELECT * FROM `ma_giam_gia` WHERE `Ma` = ?";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->bind_param("s", $MaGiamGia);
        $stmt1->execute();
        $result1 = $stmt1->get_result();

        if ($result1->num_rows == 0) {
            return ['success' => false, 'message' => 'Mã giảm giá không tồn tại'];
        }

        $row = $result1->fetch_assoc();
        if ($row['TrangThai'] == 'Expired') {
            return ['success'=> false, 'message'=> 'Mã giảm giá đã hết hạn'];
        }

        $id = $_SESSION["uid"];
        $sql2 = "SELECT GioiTinh FROM `khach_hang` WHERE `UID` = ?";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->bind_param("i", $id);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        $sex = $result2->fetch_assoc();

        $money = $this->support->handle_charge($MaGiamGia, $row['TienGiam'], $row['DieuKien'], $tienHang, $phiVanChuyen, $PhuongThucThanhToan, $sex);
        return $money;
    }

    public function getPaid($uid) {
        $sql1 = "SELECT ID_DonHang, NgayDat FROM don_hang WHERE `UID` = ? AND ThanhToan = '1'";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->bind_param("i", $uid);
        $stmt1->execute();
        $result1 = $stmt1->get_result();

        if ($result1->num_rows === 0) {
            return ['success' => false, 'message' => 'Không có đơn hàng đã thanh toán'];
        }

        $order = [];
        while ($row = $result1->fetch_assoc()) {
            $order[] = $row;
        }

        $result = [];
        foreach ($order as $row) {
            $idOrder = $row['ID_DonHang'];
            $sql2 = "SELECT ID_SP, SUM(SoLuong) AS COUNT FROM gom WHERE ID_DonHang = ? GROUP BY ID_SP";
            $stmt2 = $this->conn->prepare($sql2);
            $stmt2->bind_param("i", $idOrder);
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            if ($result2->num_rows === 0) {
                return ['success' => false, 'message' => 'Đơn hàng khộng có sản phẩm'];
            }
            $product = $result2->fetch_assoc();

            if ($product) {
                $id = $product['ID_SP'];
                $image = $this->product->getImage($id);
                $sql3 = "SELECT TenSP, Gia FROM san_pham WHERE ID_SP = ?";
                $stmt3 = $this->conn->prepare($sql3);
                $stmt3->bind_param("i", $id);
                $stmt3->execute();
                $result3 = $stmt3->get_result();
                if ($result3->num_rows === 0) {
                    return ['success' => false, 'message' => 'Không tìm thấy sản phẩm'];
                }    
                $productDetails = $result3->fetch_assoc();

                $result[] = [
                    'id' => $idOrder,
                    'hinh' => $image,
                    'ten_sp' => $productDetails['TenSP'],
                    'gia' => $productDetails['Gia'],
                    'trang_thai' => 'Đã giao hàng',
                    'ngay_dat' => $row['NgayDat'],
                    'so_luong_san_pham' => $product['COUNT']
                ];
            }
        }
        return ['success' => true, 'message' => $this->support->sort($result)];
    }

    public function getInfo($uid, $ID_DonHang) {
        $sql = "SELECT NgayDat, TongTien, PhuongThucThanhToan, ThanhToan FROM don_hang WHERE `UID` = ? AND ID_DonHang = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ii", $uid, $ID_DonHang);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return ['success' => false,'message' => 'Người dùng không có đơn hàng'];
        }

        $order = $result->fetch_assoc();
        $product = $this->getProduct($ID_DonHang);
        if ($product['success'] === false) return ['success' => false, 'message' => $product['message']];
        
        $money = $this->getPayment($ID_DonHang);
        if ($money['status'] === false) return ['success' => false, 'message' => $money['message']];

        $user = $this->getUser($uid);
        if ($user['success'] === false) return ['success' => false, 'message' => $user['message']];

        return [
            'success' => true,
            'info' => [
                'id' => $ID_DonHang,
                'ngay_dat' => $order['NgayDat'],
                'trang_thai' => '',
                'danh_sach_san_pham' => $product['san_pham'],
                'thong_tin_thanh_toan' => $money['thanh_toan'],
                'thong_tin_nguoi_mua' => $user['nguoi_dung']
            ]
        ];
    }

    private function getProduct($orderId) {
        $sql = "SELECT ID_SP, SoLuong FROM gom WHERE ID_DonHang = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $orderId);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 0) {
            return ["success" => false, "message" => "Không tìm thấy đơn hàng"];
        }
    
        $order = [];
        while ($row = $result->fetch_assoc()) {
            $order[] = $row;
        }
    
        $resultList = [];
        foreach ($order as $products) {
            $product = $this->getProductById($products['ID_SP']);
            if ($product['success'] === false) {
                return ['success' => false, 'message' => $product['message']];
            }
    
            $resultList[] = [
                'id' => $product['ID_SP'],
                'anh' => $this->product->getImage($product['ID_SP']),
                'ten' => $product['TenSP'],
                'so_luong' => $products['SoLuong'],
                'gia_san_pham' => $product['Gia'],
                'gia_sau_giam_gia' => $product['Gia'] * (1 - $product['TyLeGiamGia']),
            ];
        }
    
        return [
            "success" => true,
            "san_pham" => $this->support->sort($resultList)
        ];
    }

    private function getPayment($orderId) {
        $sql = "SELECT TongTien, ThanhToan, PhuongThucThanhToan, MaGiamGia FROM don_hang WHERE ID_DonHang = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $orderId);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 0) {
            return ['status' => false, 'message' => 'Không tìm thấy thông tin thanh toán cho đơn hàng'];
        }
    
        $order = $result->fetch_assoc();
        $money = $this->sale($order['TongTien'], $order['MaGiamGia'], 0, $order['PhuongThucThanhToan']);
        
        if ($money['success'] === true) {
            return [
                'status' => true,
                'thanh_toan' => [
                    'tong_tien' => $order['TongTien'],
                    'so_tien_da_giam' => $money['so_tien_da_giam'],
                    'tong_tien_phai_tra' => $money['tong_tien_phai_tra'],
                    'trang_thai' => $order['ThanhToan'],
                    'phuong_thuc' => $order['PhuongThucThanhToan']
                ]
            ];
        }
        
        return ['status' => false, 'message' => $money['message']];
    }    

    private function getUser($uid) {
        $sql1 = "SELECT SDT, DiaChi FROM khach_hang WHERE `UID` = ?";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->bind_param("i", $uid);
        $stmt1->execute();
        $result1 = $stmt1->get_result();
    
        if ($result1->num_rows === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy thông tin người dùng'];
        }
    
        $user1 = $result1->fetch_assoc();
    
        $sql2 = "SELECT Ten FROM `login` WHERE `UID` = ?";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->bind_param("i", $uid);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
    
        if ($result2->num_rows === 0) {
            return ['success' => false, 'message' => 'Không tìm thấy thông tin đăng nhập'];
        }
    
        $user2 = $result2->fetch_assoc();
        return [
            'success' => true,
            'nguoi_dung' => [
                'ten' => $user2['Ten'],
                'SĐT' => $user1['SDT'],
                'dia_chi' => $user1['DiaChi']
            ]
        ];
    }    

    private function getProductById($id) {
        $sql = "SELECT * FROM san_pham WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Không có sản phẩm'];
        }
    
        $product = $result->fetch_assoc();
        $product['success'] = true;
        return $product;
    }
}
?>