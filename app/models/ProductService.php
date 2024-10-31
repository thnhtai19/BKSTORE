<?php
require_once dirname(__DIR__, 1) . '/models/support.php';

class ProductService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function getInfo($id) {
        $product = $this->getProductById($id);
        if (!$product) {
            return ['success' => false, 'message' => 'Không tìm thấy sản phẩm'];
        }
        $review = $this->average_star($id);
        return [
            'ten' => $product['TenSP'],
            'hinh' => $this->getImage($id),
            'so_sao_trung_binh' => $review['so_sao_trung_bình'],
            'so_luong_da_ban' => $this->countProduct($id),
            'thong_tin_chi_tiet' => [
                'the_loai' => $product['PhanLoai'],
                'tac_gia' => $product['TacGia'],
                'nha_xuat_ban' => $product['NXB'],
                'hinh_thuc' => $product['HinhThuc'],
                'nam_xuat_ban' => $product['NamXB'],
                'ngon_ngu' => $product['NgonNgu'],
                'kich_thuoc' => $product['KichThuoc'],
                'so_trang' => $product['SoTrang']
            ],
            'gia_san_pham' => $product['Gia'],
            'gia_sau_giam_gia' => $product['Gia'] * (1 - $product['TyLeGiamGia']),
            'so_luong_ton_kho' => $product['SoLuongKho'],
            'mo_ta' => $product['MoTa'],
            'danh_sach_danh_gia' => $review['danh_sach_danh_gia'],
            'danh_sach_binh_luan' => $this->getComment($id)
        ];
    }

    public function getList($latest) {
        $result = [];
        foreach ($latest as $entry) {
            $id = $entry['ID_SP'];
            $trang_thai = $this->thich($id);
            $base_data = [
                'id' => $id,
                'ten' => $entry['TenSP'],
                'hinh' => $this->getImage($id),
                'gia_goc' => $entry['Gia'],
                'gia_sau_giam_gia' => $entry['Gia'] * (1 - $entry['TyLeGiamGia']),
                'so_sao_trung_binh' => $this->average_star($id)['so_sao_trung_bình']
            ];
            switch ($trang_thai) {
                case -1:
                    $result[] = $base_data;
                    break;
                case 0:
                    $result[] = array_merge($base_data, ['thich' => false]);
                    break;
                case 1:
                    $result[] = array_merge($base_data, ['thich' => true]);
                    break;
                default:
                    break;
            }
        }
        return $result;
    }

    public function getProductList($typeList) {
        $result = [];
        foreach ($typeList as $type) {
            $sql = "SELECT * FROM san_pham WHERE PhanLoai = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $type);
            $stmt->execute();
            $result_type = $stmt->get_result();
            
            $product = [];
            while ($row = $result_type->fetch_assoc()) {
                $product[] = $row;
            }
            $result[] = [
                'the_loai' => $type,
                'san_pham' => $this->getList($product)
            ];
        }
        return $result;
    }

    public function get() {
        $sql = "SELECT * FROM san_pham";
        $result = $this->conn->query($sql);
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row;
        }
        return $products;
    }

    public function getType() {
        $sql = "SELECT DISTINCT PhanLoai FROM san_pham";
        $result = $this->conn->query($sql);
        $products = [];
        while ($row = $result->fetch_assoc()) {
            $products[] = $row['PhanLoai'];
        }
        return $products;
    }

    public function getImage($id) {
        $sql = "SELECT Anh FROM hinh_anh WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            return null;
        }
        
        $images = [];
        while ($row = $result->fetch_assoc()) {
            $images[] = 'http://localhost/assets/image/' . $row['Anh'];
        }
        return $images;
    }

    private function getProductById($id) {
        $sql = "SELECT * FROM san_pham WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        return $result->fetch_assoc();
    }

    private function getComment($id) {
        $sql = "
            SELECT binh_luan.MaBinhLuan, binh_luan.NgayBinhLuan, binh_luan.NoiDung, login.Ten, login.Avatar
            FROM binh_luan
            JOIN login ON binh_luan.UID = login.UID
            WHERE binh_luan.ID_SP = ?";
        
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Không có bình luận'];
        }
        
        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = [
                'id' => $row['MaBinhLuan'],
                'ngay_binh_luan' => $row['NgayBinhLuan'],
                'noi_dung' => $row['NoiDung'],
                'avatar' => $row['Avatar'],
                'ten' => $row['Ten']
            ];
        }
        return $comments;
    }

    private function getReview($id) {
        $sql = "
            SELECT danh_gia.MaDanhGia, danh_gia.NgayDanhGia, danh_gia.SoSao, danh_gia.NoiDung, login.Ten, login.Avatar 
            FROM danh_gia 
            JOIN login ON danh_gia.UID = login.UID
            WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            return ['success' => false, 'message' => 'Không có đánh giá'];
        }
        
        $reviews = [];
        while ($row = $result->fetch_assoc()) {
            $reviews[] = [
                'id' => $row['MaDanhGia'],
                'ngay_danh_gia' => $row['NgayDanhGia'],
                'so_sao' => $row['SoSao'],
                'noi_dung' => $row['NoiDung'],
                'avatar' => $row['Avatar'],
                'ten' => $row['Ten']
            ];
        }
        return $reviews;
    }

    private function average_star($id) {
        $review = $this->getReview($id);
        if (isset($review['success']) && !$review['success']) {
            return $review;
        }

        $sum_star = array_sum(array_column($review, 'so_sao'));
        $count_star = count($review);
        return [
            'so_sao_trung_bình' => $count_star ? round($sum_star / $count_star, 1) : 0,
            'danh_sach_danh_gia' => $review
        ];
    }

    private function countProduct($id) {
        $sql = "SELECT SUM(SoLuong) as total FROM gom WHERE ID_SP = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $data = $result->fetch_assoc();

        return $data['total'] ?? 0;
    }

    private function thich($id) {
        if (isset($_SESSION["uid"])) {
            $uid = $_SESSION["uid"];
            $sql = "SELECT 1 FROM thich WHERE ID_SP = ? AND `UID` = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ii", $id, $uid);
            $stmt->execute();
            $result = $stmt->get_result();
            
            return $result->num_rows ? 1 : 0;
        }
        return -1;
    }

    public function productType($type, $login, $uid) {
        $sql1 = "SELECT 
                    SAN_PHAM.ID_SP, 
                    SAN_PHAM.TenSP, 
                    SAN_PHAM.Gia, 
                    ROUND(AVG(DANH_GIA.SoSao), 0) AS SoSao,
                    SAN_PHAM.HinhThuc,
                    false AS YeuThich
                FROM 
                    SAN_PHAM 
                LEFT JOIN 
                    DANH_GIA 
                ON 
                    SAN_PHAM.ID_SP = DANH_GIA.ID_SP 
                WHERE 
                    SAN_PHAM.PhanLoai = ?
                GROUP BY 
                    SAN_PHAM.ID_SP, SAN_PHAM.TenSP, SAN_PHAM.Gia;";
        $sql2 = "SELECT 
                    SAN_PHAM.ID_SP, 
                    SAN_PHAM.TenSP, 
                    SAN_PHAM.Gia, 
                    ROUND(AVG(DANH_GIA.SoSao), 0) AS SoSao,
                    SAN_PHAM.HinhThuc,
                    CASE 
                        WHEN SAN_PHAM.ID_SP IN (SELECT ID_SP FROM THICH WHERE UID = $uid) 
                        THEN 1 
                        ELSE 0 
                    END AS YeuThich
                FROM 
                    SAN_PHAM 
                LEFT JOIN 
                    DANH_GIA 
                ON 
                    SAN_PHAM.ID_SP = DANH_GIA.ID_SP 
                WHERE 
                    SAN_PHAM.PhanLoai = ?
                GROUP BY 
                    SAN_PHAM.ID_SP, SAN_PHAM.TenSP, SAN_PHAM.Gia, SAN_PHAM.HinhThuc;";
        if($login) $query = $this->conn->prepare($sql2);
        else $query = $this->conn->prepare($sql1);
        if (!$query) {
            throw new Exception("Error preparing query: " . $this->conn->error);
        }
        $query->bind_param("s", $type);
        $query->execute();
        $result = $query->get_result();
    
        // Fetch all results as an associative array
        $data = $result->fetch_all(MYSQLI_ASSOC);
    
        return $data;
    }
}
?>