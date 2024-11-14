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

    public function propose() {
        $propose_list = $this->proposeInfo();
        foreach ($propose_list as &$propose) {
            $user = $this->user->getUserInfo($propose["UID"]);
            if ($user['success'] === false) {
                return ['success' => false, 'message' => $user['message']];
            }
            
            $login = $this->user->getLoginInfo($propose["UID"]);
            if ($login['success'] === false) {
                return ['success' => false, 'message' => $login['message']];
            }

            if (!$user || !$login) {
                return ['success' => false, 'message' => 'Không tìm thấy người dùng'];
            }            
            $propose['ten'] = $login['name'];
            $propose['SDT'] = $user['phone'];
            $propose['email'] = $login['email'];
            $propose['gioi_tinh'] = $user['sex'];
        }
        return ['success'=> true, 'message'=> $propose_list];
    }

    public function updatePropose($status, $content, $id) {
        $sql = 'SELECT * FROM san_pham_de_xuat WHERE MaDeXuat = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 0) {
            return ["success"=> false,"message"=> "Không tìm thấy đề xuất"];
        }
        if ($status != 'Đang chờ duyệt' && $status != 'Đã duyệt' && $status != 'Đã từ chối') 
            return ['success'=> false, 'message' => 'Cập nhật thất bại'];
        $sql = "UPDATE san_pham_de_xuat SET TrangThai = ?, GhiChu = ? WHERE MaDeXuat = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssi",$status, $content, $id);
        $stmt->execute();
        return ['success' => true, 'message' => 'Cập nhật thành công'];
    }

    public function deleteComment($id) {
        if (!is_numeric($id)) return ['success' => false, 'message' => 'Không tìm thấy bình luận'];
        $sql = 'DELETE FROM binh_luan WHERE MaBinhLuan = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return ['success'=> true, 'message'=> 'Xóa bình luận thành công'];
    }

    public function hideComment($id, $trang_thai) {
        if (!is_numeric($id)) return ['success' => false, 'message' => 'Không tìm thấy bình luận'];
        $sql = 'SELECT * FROM binh_luan WHERE MaBinhLuan = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 0) return ['success'=> false, 'message'=> 'Không tìm thấy bình luận'];
        $sql = 'UPDATE binh_luan SET TrangThai = ? WHERE MaBinhLuan = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('si', $trang_thai, $id);
        $stmt->execute();
        return ['success'=> true,'message'=> 'Cập nhật trạng thái thành công'];
    }

    public function repComment($id, $content) {
        if (!is_numeric($id)) return ['success' => false, 'message' => 'Không tìm thấy bình luận'];
        $sql = 'UPDATE binh_luan SET PhanHoi = ? WHERE MaBinhLuan = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('si', $content, $id);
        $stmt->execute();
        return ['success'=> true,'message'=> 'Phản hồi thành công'];
    }

    public function deleteReview($id) {
        if (!is_numeric($id)) return ['success' => false, 'message' => 'Không tìm thấy đánh giá'];
        $sql = 'DELETE FROM danh_gia WHERE MaDanhGia = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        return ['success'=> true, 'message'=> 'Xóa đánh giá thành công'];
    }

    public function hideReview($id, $trang_thai) {
        if (!is_numeric($id)) return ['success' => false, 'message' => 'Không tìm thấy đánh giá'];
        $sql = 'SELECT TrangThai FROM danh_gia WHERE MaDanhGia = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows == 0) return ['success'=> false, 'message'=> 'Không tìm thấy đánh giá'];
        $sql = 'UPDATE danh_gia SET TrangThai = ? WHERE MaDanhGia = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('si', $trang_thai, $id);
        $stmt->execute();
        return ['success'=> true,'message'=> 'Cập nhật trạng thái thành công'];
    }

    public function repReview($id, $content) {
        if (!is_numeric($id)) return ['success' => false, 'message' => 'Không tìm thấy đánh giá'];
        $sql = 'UPDATE danh_gia SET PhanHoi = ? WHERE MaDanhGia = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('si', $content, $id);
        $stmt->execute();
        return ['success'=> true,'message'=> 'Phản hồi thành công'];
    }

    private function proposeInfo() {
        $sql = "SELECT * FROM san_pham_de_xuat";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();   
        $stmt = $stmt->get_result();
        $result = [];
        while ($row = $stmt->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
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
