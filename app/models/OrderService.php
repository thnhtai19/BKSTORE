<?php
require_once dirname(__DIR__, 2) . '/config/db.php';
require_once dirname(__DIR__, 1) . '/models/support.php';

class OrderService {
    private $conn;
    private $support;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->support = new support();
    }

    public function sale($tienHang, $MaGiamGia, $phiVanChuyen, $PhuongThucThanhToan) {
        $sql1 = "SELECT * FROM `ma_giam_gia` WHERE `Ma` = '$MaGiamGia'";
        $result1 = mysqli_query($this->conn, $sql1);
        if (mysqli_num_rows($result1) == 0) {
            return ['success' => false, 'message' => 'Mã giảm giá không tồn tại'];
        }
        $row = mysqli_fetch_assoc($result1);
        if ($row['TrangThai'] == 'Expired') {
            return ['success'=> false,'message'=> 'Mã giảm giá đã hết hạn'];
        }
        $id = $_SESSION["uid"];
        $sql2 = "SELECT GioiTinh FROM `khach_hang` WHERE `UID` = '$id'";
        $result2 = mysqli_query($this->conn, $sql2);
        $sex = mysqli_fetch_assoc($result2);
        $money = $this->support->handle_charge($MaGiamGia, $row['TienGiam'], $row['DieuKien'], $tienHang, $phiVanChuyen, $PhuongThucThanhToan, $sex);
        return $money;
    }
}
?>