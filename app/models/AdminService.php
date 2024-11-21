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

    public function updateUser($UID, $name, $email, $phone, $sex, $addr, $status) {
        $sql1 = "UPDATE LOGIN SET Ten = ?, Email = ? WHERE UID = ?";
        $stmt1 = $this->conn->prepare($sql1);
        $stmt1->bind_param("ssi", $name, $email, $UID);
        $stmt1->execute();
        
        if ($stmt1->affected_rows === -1) {
            return ["success" => false, "message" => "Error updating LOGIN table"];
        }
        
        $stmt1->close();

        // Second update statement
        $sql2 = "
        UPDATE KHACH_HANG SET
            GioiTinh = ?, SDT = ?, DiaChi = ?, TrangThai = ?
        WHERE UID = ?";
        $stmt2 = $this->conn->prepare($sql2);
        $stmt2->bind_param("ssssi", $sex, $phone, $addr, $status, $UID);
        $stmt2->execute();
        if ($stmt2->affected_rows === -1) {
            return ["success" => false, "message" => "Error updating KHACH_HANG table"];
        }
        return ["success" => true, "message" => "Sửa thông tin thành công"];
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
        $product_list = $this->product->get_admin();
        $product_info = [];
        foreach ($product_list as $product) {
            $product_info[] = $this->product->getProductInfo($product['ID_SP']);
        }
        return $this->support->sort($product_info);
    }
    public function updateProductInfo($ID_SP, $TenSp, $MoTa, $Gia, $TyLeGiamGia, $SoLuongKho, $NXB, $KichThuoc, $SoTrang, $PhanLoai, $TuKhoa, $HinhThuc, $TacGia, $NgonNgu, $NamXB) {
        $sql = "
        UPDATE SAN_PHAM SET
        TenSP = ?,
        MoTa = ?,
        Gia = ?,
        TyLeGiamGia = ?,
        SoLuongKho = ?,
        NXB = ?,
        KichThuoc = ?,
        SoTrang = ?,
        PhanLoai = ?,
        TuKhoa = ?,
        HinhThuc = ?,
        TacGia = ?,
        NgonNgu = ?,
        NamXB = ?
        WHERE ID_SP = ?";

    $stmt = $this->conn->prepare($sql);

    if (!$stmt) {
        // Check for SQL error in prepare statement
        return ["success" => false, "message" => "Database error: " . $this->conn->error];
    }

    $stmt->bind_param("ssidississsssii", $TenSp, $MoTa, $Gia, $TyLeGiamGia, $SoLuongKho, $NXB, $KichThuoc, $SoTrang, $PhanLoai, $TuKhoa, $HinhThuc, $TacGia, $NgonNgu, $NamXB, $ID_SP);
    $stmt->execute();

    $sqlDelete = "DELETE FROM hinh_anh WHERE ID_SP = ?";
    $stmtDelete = $this->conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID_SP);
    $stmtDelete->execute();
    return ["success" => true, "message" => "Cập nhật thông tin sản phẩm thành công"];

    }

    public function updateProductImage ($Anh, $ID_SP) {
        $relativeAvatarPath = "public/image/product/$ID_SP/" . basename($Anh);
        // $sqlDelete = "DELETE FROM hinh_anh WHERE ID_SP = ?";
        // $stmtDelete = $this->conn->prepare($sqlDelete);
        // $stmtDelete->bind_param("i", $ID_SP);
        // $stmtDelete->execute();

        $sqlInsert = "INSERT INTO hinh_anh (Anh, ID_SP) VALUES (?, ?)";
        $stmtInsert = $this->conn->prepare($sqlInsert);
        $stmtInsert->bind_param("si", $relativeAvatarPath, $ID_SP);
        $stmtInsert->execute();
        return ["success" => true, "message" => "Cập nhật thành công"];
    }

    public function deleteProduct($ID_SP) {
        $sql = "UPDATE SAN_PHAM SET TrangThai = 'Đã xóa' WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
    
        if ($stmt === false) {
            error_log("Prepare failed: (" . $this->conn->error . ") " . $this->conn->error);
            return ["success" => false, "message" => "Prepare failed"];
        }
    
        $stmt->bind_param("i", $ID_SP);
        $stmt->execute();
    
        if ($stmt->affected_rows === 0) {
            $stmt->close();
            return ["success" => false, "message" => "Xóa sản phẩm không thành công"];
        }
    
        $stmt->close();
        return ["success" => true, "message" => "Xóa sản phẩm thành công"];
    }
    
}
?>
