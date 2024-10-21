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
        $sql = "SELECT * FROM san_pham WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không có sản phẩm'];
        }
        $product = mysqli_fetch_assoc($result);
        return [
            
            'gia_san_pham' => $product['gia'],
            'ty_le_giam_gia' => $product['ty_le_giam_gia'],
            'so_luong_ton_kho' => $product['so_luong_kho'],
            'mo_ta' => $product['mo_ta']
        ];
    }

    public function getComment($id) {
        $sql = "SELECT * FROM binh_luan WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không có bình luận'];
        }
        $comments = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $comments[] = $row;
        }
        return $comments;
    }

    public function getReview($id) {
        $sql = "SELECT * FROM danh_gia WHERE id = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if (mysqli_num_rows($result) === 0) {
            return ['success' => false, 'message' => 'Không có đánh giá'];
        }
        $reviews = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $reviews[] = $row;
        }
        return $reviews;
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