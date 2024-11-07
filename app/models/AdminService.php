<?php
require_once dirname(__DIR__, 1) . '/models/support.php';
require_once dirname(__DIR__, 1) . '/models/UserService.php';
require_once dirname(__DIR__, 1) . '/models/ProductService.php';


class AdminService {
    private $conn;
    private $support;
    private $user;
    private $product;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
        $this->user = new UserService($conn);
        $this->product = new ProductService($conn);
    }

    public function getUsers() {
        $sql = "SELECT `UID` FROM khach_hang";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = [];
        while ($row = $result->fetch_assoc()) {
            $user = $this->user->getUserInfo($row["UID"]);
            if ($user['success'] === false) {
                return ['success' => false, 'message' => $user['message']];
            }
            
            $login = $this->user->getLoginInfo($row["UID"]);
            if ($login['success'] === false) {
                return ['success' => false, 'message' => $login['message']];
            }

            if (!$user || !$login) {
                return ['success' => false, 'message' => 'Không tìm thấy người dùng'];
            }

            $users[] = [
                'uid' => $row['UID'],
                'name' => $login['name'],
                'role' => $login['role'],
                'email'=> $login['email'],
                'password' => $login['password'],
                'phone' => $user['phone'],
                'sex' => $user['sex'],
                'address' => $user['address'],
                'avatar' => $login['avatar']
            ];
        }
        return ['success' => true, 'user-list' => $users];
    }

    public function banUser($uid) {
        
    }

    public function product() {
        return ['success' => true, 'product_list' => $this->productInfo(), 'product_category' => $this->product->getType()];
    }

    public function addProductInfo($TenSp, $MoTa, $Gia, $TyLeGiamGia, $SoLuongKho, $NXB, $KichThuoc, $SoTrang, $PhanLoai, $TuKhoa, $HinhThuc, $TacGia, $NgonNgu, $NamXB) {
        $sql = "SELECT ID_SP FROM san_pham WHERE TenSp = ? AND NXB = ? AND NamXB = ? AND TacGia = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssis", $TenSp, $NXB, $NamXB, $TacGia);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            return ["success" => false, "message" => "Sản phẩm đã có trong kho"];
        }
        $sql = "INSERT INTO san_pham (TenSp, MoTa, Gia, TyLeGiamGia, SoLuongKho, NXB, KichThuoc, SoTrang, PhanLoai, TuKhoa, HinhThuc, TacGia, NgonNgu, NamXB) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssidississsssi",$TenSp, $MoTa, $Gia, $TyLeGiamGia, $SoLuongKho, $NXB, $KichThuoc, $SoTrang, $PhanLoai, $TuKhoa, $HinhThuc, $TacGia, $NgonNgu, $NamXB);
        $stmt->execute();
        $sql = "SELECT ID_SP FROM san_pham WHERE TenSp = ? AND NXB = ? AND NamXB = ? AND TacGia = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssis", $TenSp, $NXB, $NamXB, $TacGia);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        return ["success" => true, "product_id" => $product['ID_SP']];
    }

    public function addProductImage ($Anh, $ID_SP) {
        $relativeAvatarPath = "public/image/$ID_SP/" . basename($Anh);
        $sql = "INSERT INTO hinh_anh (Anh, ID_SP) VALUES (?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $relativeAvatarPath, $ID_SP);
        $stmt->execute();
        return ['success' => true, 'message' => 'Thêm sản phẩm thành công!'];
    }

    private function productInfo() {
        $product_list = $this->product->get();
        $product_info = [];
        foreach ($product_list as $product) {
            $product_info[] = $this->product->getProductInfo($product['ID_SP']);
        }
        return $this->support->sort($product_info);
    }
}
?>
