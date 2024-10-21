<?php
require_once dirname(__DIR__, 2) . '/config/db.php';
require_once dirname(__DIR__, 1) . '/models/support.php';

class ProductService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function getInfo($id) {
        $sql = "SELECT * FROM san_pham WHERE ID_SP = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không có sản phẩm'];
        }
        $product = mysqli_fetch_assoc($result);
        $review = $this->average_star($id);
        return [
            'ten' => $product['TenSP'],
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
            ],
            'gia_san_pham' => $product['Gia'],
            'ty_le_giam_gia' => $product['TyLeGiamGia'],
            'so_luong_ton_kho' => $product['SoLuongKho'],
            'mo_ta' => $product['MoTa'],
            'danh_sach_danh_gia' => $review['danh_sach_danh_gia'],
            'danh_sach_binh_luan' => $this->getComment($id)
        ];
    }

    public function getList() {
        $sql = "SELECT * FROM san_pham";
        $result_sql = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result_sql) === 0) {
            return ['success' => false, 'message' => 'Không có sản phẩm'];
        }
        $products = [];
        while ($row = mysqli_fetch_assoc($result_sql)) {
            $products[] = $row;
        }
        $latest = array_slice($products, -10);
        $result = [];
        foreach ($latest as $entry) {
            $id = $entry['ID_SP'];
            $trang_thai = $this->thich($id);
            switch ($trang_thai) {
                case -1:
                    $result[] = [
                        'id' => $id,
                        'ten' => $entry['TenSP'],
                        'gia' => $entry['Gia'],
                        'so_sao_trung_binh' => $this->average_star($id)['so_sao_trung_bình']
                    ];
                    break;
                case 0:
                    $result[] = [
                        'id' => $id,
                        'ten' => $entry['TenSP'],
                        'gia' => $entry['Gia'],
                        'so_sao_trung_binh' => $this->average_star($id)['so_sao_trung_bình'],
                        'thich' => false
                    ];
                    break;
                case 1:
                    $result[] = [
                        'id' => $id,
                        'ten' => $entry['TenSP'],
                        'gia' => $entry['Gia'],
                        'so_sao_trung_binh' => $this->average_star($id)['so_sao_trung_bình'],
                        'thich' => true
                    ];
                    break;
                default:
                    break;
            }
        }
        return $result;
    }

    private function getComment($id) {
        $sql = "SELECT * FROM binh_luan WHERE ID_SP = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không có bình luận'];
        }
        $comments = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comments[] = [
                'id' => $row['MaBinhLuan'],
                'ngay_binh_luan' => $row['NgayBinhLuan'],
                'noi_dung' => $row['NoiDung']
            ];
        }
        return $comments;
    }

    private function getReview($id) {
        $sql = "SELECT * FROM danh_gia WHERE ID_SP = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không có đánh giá'];
        }
        $reviews = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $reviews[] = [
                'id' => $row['MaDanhGia'],
                'ngay_danh_gia' => $row['NgayDanhGia'],
                'so_sao' => $row['SoSao'],
                'noi_dung' => $row['NoiDung'],
            ];
        }
        return $reviews;
    }

    private function average_star($id) {
        $review = $this->getReview($id);
        $sum_star = 0;
        $count_star = 0;
        foreach ($review as $entry) {
            $sum_star += $entry['so_sao'];
            $count_star++;
        }
        return [
            'so_sao_trung_bình' => round($sum_star / $count_star),
            'danh_sach_danh_gia' => $review
        ];
    }

    private function countProduct($id) {
        $sql = "SELECT * FROM gom WHERE ID_SP = '$id'";
        $result = mysqli_query($this->conn, $sql);
        $count = 0;
        if (mysqli_num_rows($result) != 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $count += $row['SoLuong'];
            }
        }
        return $count;
    }

    private function thich($id) {
        if (isset($_SESSION["uid"])) {
            $uid = $_SESSION["uid"];
            $sql = "SELECT * FROM thich WHERE ID_SP = '$id' AND `UID` = '$uid'";
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) === 0) return 0;
            return 1;
        }
        return -1;
    }

    public function productType($type) {
        $sql = "SELECT 
                SAN_PHAM.ID_SP, 
                SAN_PHAM.TenSP, 
                SAN_PHAM.Gia, 
                ROUND(AVG(DANH_GIA.SoSao), 0) AS SoSao 
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
        $query = $this->conn->prepare($sql);
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