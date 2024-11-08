INSERT INTO LOGIN (Email, Password, Role, Ten, Avatar)
VALUES
('user1@example.com', 'password1', 'Customer', 'User One', NULL),
('user2@example.com', 'password2', 'Customer', 'User Two', NULL),
('user3@example.com', 'password3', 'Customer', 'User Three', NULL),
('admin1@example.com', 'adminpass1', 'Admin', 'Admin One', NULL),
('admin2@example.com', 'adminpass2', 'Admin', 'Admin Two', NULL),
('user4@example.com', 'password4', 'Customer', 'User Four', NULL),
('user5@example.com', 'password5', 'Customer', 'User Five', NULL),
('admin3@example.com', 'adminpass3', 'Admin', 'Admin Three', NULL),
('user6@example.com', 'password6', 'Customer', 'User Six', NULL),
('user7@example.com', 'password7', 'Customer', 'User Seven', NULL);

INSERT INTO ADMIN (UID)
VALUES
(4),  -- Corresponds to 'admin1@example.com'
(5),  -- Corresponds to 'admin2@example.com'
(8);  -- Corresponds to 'admin3@example.com'

INSERT INTO LICH_SU_DANG_NHAP (UID, ThoiGian, NoiDung)
VALUES
(1, '10:00:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.1'),
(2, '10:05:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.2'),
(3, '10:10:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.3'),
(4, '10:15:00 21-10-2023', 'Đăng nhập thất bại từ IP 192.168.1.4'),
(5, '10:20:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.5'),
(6, '10:25:00 21-10-2023', 'Đăng nhập thất bại từ IP 192.168.1.6'),
(7, '10:30:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.7'),
(8, '10:35:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.8'),
(9, '10:40:00 21-10-2023', 'Đăng nhập thất bại từ IP 192.168.1.9'),
(10, '10:45:00 21-10-2023', 'Đăng nhập thành công từ IP 192.168.1.10');

INSERT INTO KHACH_HANG (UID, GioiTinh, SDT, DiaChi, TrangThai)
VALUES
(1, 'Male', '0123456789', '123 Main St', 1),
(2, 'Female', '0987654321', '456 Oak Ave', 1),
(3, 'Male', '0123456789', '789 Pine Rd', 1),
(6, 'Female', '0987654321', '101 Birch Ln', 1),
(7, 'Male', '0123456789', '202 Cedar St', 1),
(9, 'Female', '0987654321', '303 Maple Ave', 1),
(10, 'Male', '0123456789', '404 Elm St', 1);

INSERT INTO SAN_PHAM (TenSP, MoTa, Gia, TyLeGiamGia, SoLuongKho, NXB, KichThuoc, SoTrang, PhanLoai, TuKhoa, HinhThuc, TacGia, NgonNgu, NamXB)
VALUES
('Sản phẩm 1', 'Mô tả sản phẩm 1', 100000, 0.1, 50, 'NXB Kim Đồng', '13x19 cm', 200, 'Sách Thiếu Nhi', 'Thiếu nhi, giáo dục', 'Bìa mềm', 'Tác giả A', 'Tiếng Việt', 2022),
('Sản phẩm 2', 'Mô tả sản phẩm 2', 200000, 0.15, 30, 'NXB Trẻ', '15x21 cm', 300, 'Sách Văn Học', 'Văn học, lãng mạn', 'Bìa cứng', 'Tác giả B', 'Tiếng Anh', 2021),
('Sản phẩm 3', 'Mô tả sản phẩm 3', 150000, 0.05, 25, 'NXB Giáo Dục', '16x24 cm', 150, 'Sách Giáo Khoa', 'Giáo dục, khoa học', 'Bìa mềm', 'Tác giả C', 'Tiếng Pháp', 2020),
('Sản phẩm 4', 'Mô tả sản phẩm 4', 250000, 0.2, 40, 'NXB Văn Hóa', '18x25 cm', 400, 'Sách Lịch Sử', 'Lịch sử, văn hóa', 'Bìa cứng', 'Tác giả D', 'Tiếng Nhật', 2019),
('Sản phẩm 5', 'Mô tả sản phẩm 5', 300000, 0.25, 20, 'NXB Thanh Niên', '19x26 cm', 500, 'Sách Khoa Học', 'Khoa học, vũ trụ', 'Bìa mềm', 'Tác giả E', 'Tiếng Đức', 2018);

INSERT INTO HINH_ANH (Anh, ID_SP)
VALUES
('image1.jpg', 1),
('image2.jpg', 1),
('image3.jpg', 2),
('image4.jpg', 3),
('image5.jpg', 4),
('image6.jpg', 5);

INSERT INTO SAN_PHAM_DE_XUAT (TenSP, NoiDung, TrangThai, GhiChu, UID)
VALUES
('Sản phẩm đề xuất 1', 'Đề xuất sản phẩm mới 1', 'Pending', 'Đang chờ duyệt', 1),
('Sản phẩm đề xuất 2', 'Đề xuất sản phẩm mới 2', 'Approved', 'Đã được duyệt', 2),
('Sản phẩm đề xuất 3', 'Đề xuất sản phẩm mới 3', 'Rejected', 'Không được duyệt', 3),
('Sản phẩm đề xuất 4', 'Đề xuất sản phẩm mới 4', 'Pending', 'Đang chờ duyệt', 6),
('Sản phẩm đề xuất 5', 'Đề xuất sản phẩm mới 5', 'Approved', 'Đã được duyệt', 7);

INSERT INTO DANH_GIA (ID_SP, UID, NgayDanhGia, SoSao, NoiDung)
VALUES
(1, 1, '20-10-2023', 5, 'Sản phẩm tuyệt vời!'),
(2, 2, '21-10-2023', 4, 'Rất hài lòng với sản phẩm này'),
(3, 3, '19-10-2023', 3, 'Sản phẩm tạm được, còn vài khuyết điểm'),
(4, 6, '18-10-2023', 2, 'Không tốt như mong đợi'),
(5, 7, '17-10-2023', 1, 'Sản phẩm rất tệ, không khuyến khích mua');

INSERT INTO BINH_LUAN (ID_SP, UID, NgayBinhLuan, NoiDung)
VALUES
(1, 1, '21-10-2023', 'Sản phẩm rất tốt, tôi rất hài lòng.'),
(2, 2, '21-10-2023', 'Chất lượng ổn, giao hàng nhanh.'),
(3, 3, '20-10-2023', 'Giá hơi cao nhưng sản phẩm chất lượng.'),
(4, 6, '19-10-2023', 'Không như mong đợi, cần cải thiện.'),
(5, 7, '18-10-2023', 'Sản phẩm quá tệ, không đáng tiền.');

INSERT INTO MA_GIAM_GIA (Ma, TienGiam, DieuKien, TrangThai)
VALUES
('GIAM10K', 10000.00, 'Female', 'Active'),
('GIAM50K', 50000.00, '> 200000', 'Active'),
('GIAM30%', 30.00, 'Chẵn', 'Expired'),
('GIAM50%', 50.00, '< 500000', 'Active'),
('GIAMCOD', 25000.00, 'COD', 'Expired'),
('FREESHIP', 0.00, 'Tất cả', 'Active');

INSERT INTO DON_HANG (UID, NgayDat, TongTien, MaGiamGia, ThanhToan, PhuongThucThanhToan, TrangThai, SDT, DiaChi)
VALUES
(1, '20-10-2023', 300000.00, 'GIAM50K', TRUE, 'Bank', "Chờ xác nhận", 0123456789, 'TP.HCM'),
(2, '19-10-2023', 150000.00, NULL, FALSE, 'COD', "Chờ lấy hàng", 0123456789, 'TP.HCM'),
(3, '18-10-2023', 250000.00, 'GIAM10K', TRUE, 'Bank', "Đang vận chuyển", 0123456789, 'TP.HCM'),
(6, '17-10-2023', 100000.00, NULL, FALSE, 'COD', "Đã giao hàng", 0123456789, 'TP.HCM'),
(7, '16-10-2023', 200000.00, 'GIAMCOD', TRUE, 'Bank', "Đã hủy", 0123456789, 'TP.HCM');

INSERT INTO GOM (ID_DonHang, ID_SP, SoLuong)
VALUES
(1, 1, 2),  -- Đơn hàng 1 mua 2 sản phẩm 1
(1, 2, 1),  -- Đơn hàng 1 mua 1 sản phẩm 2
(2, 3, 3),  -- Đơn hàng 2 mua 3 sản phẩm 3
(3, 4, 1),  -- Đơn hàng 3 mua 1 sản phẩm 4
(4, 5, 2),  -- Đơn hàng 4 mua 2 sản phẩm 5
(5, 1, 1);  -- Đơn hàng 5 mua 1 sản phẩm 1

INSERT INTO TRONG_GIO_HANG (UID, ID_SP, SoLuong)
VALUES
(1, 1, 2),  -- Khách hàng 1 có 2 sản phẩm 1 trong giỏ hàng
(2, 2, 1),  -- Khách hàng 2 có 1 sản phẩm 2 trong giỏ hàng
(3, 3, 3),  -- Khách hàng 3 có 3 sản phẩm 3 trong giỏ hàng
(6, 4, 1),  -- Khách hàng 6 có 1 sản phẩm 4 trong giỏ hàng
(7, 5, 2);  -- Khách hàng 7 có 2 sản phẩm 5 trong giỏ hàng

INSERT INTO THICH (UID, ID_SP)
VALUES
(1, 1),  -- Khách hàng 1 thích sản phẩm 1
(1, 2),  -- Khách hàng 1 thích sản phẩm 2
(2, 3),  -- Khách hàng 2 thích sản phẩm 3
(3, 4),  -- Khách hàng 3 thích sản phẩm 4
(6, 5),  -- Khách hàng 6 thích sản phẩm 5
(7, 1);  -- Khách hàng 7 thích sản phẩm 1

INSERT INTO THONG_BAO (UID, NoiDung, TrangThai)
VALUES
(1, 'Đơn hàng của bạn đã được xác nhận.', 'Unread'),
(2, 'Sản phẩm yêu thích của bạn đã có hàng.', 'Read'),
(3, 'Đơn hàng của bạn đang được vận chuyển.', 'Unread'),
(6, 'Bạn đã nhận được một mã giảm giá mới.', 'Read'),
(7, 'Sản phẩm trong giỏ hàng của bạn sắp hết.', 'Unread');

INSERT INTO TIN_TUC (TieuDe, ThoiGianTao, NoiDung, TuKhoa)
VALUES
('Tin tức 1', '10:00:00 21-10-2023', 'Nội dung tin tức 1', 'sách, giảm giá, khuyến mãi'),
('Tin tức 2', '09:30:00 20-10-2023', 'Nội dung tin tức 2', 'sách mới, tác giả nổi tiếng'),
('Tin tức 3', '08:45:00 19-10-2023', 'Nội dung tin tức 3', 'sự kiện, hội sách, giảm giá'),
('Tin tức 4', '07:15:00 18-10-2023', 'Nội dung tin tức 4', 'tác phẩm văn học, ra mắt'),
('Tin tức 5', '06:00:00 17-10-2023', 'Nội dung tin tức 5', 'ưu đãi thành viên, khách hàng VIP');

INSERT INTO ANH_MINH_HOA (MoTa, LinkAnh, MaTinTuc)
VALUES
('Ảnh minh họa cho tin tức 1', 'link_anh_1.jpg', 1),
('Ảnh minh họa cho tin tức 2', 'link_anh_2.jpg', 2),
('Ảnh minh họa cho tin tức 3', 'link_anh_3.jpg', 3),
('Ảnh minh họa cho tin tức 4', 'link_anh_4.jpg', 4),
('Ảnh minh họa cho tin tức 5', 'link_anh_5.jpg', 5);

INSERT INTO BANNER (Image, IdSP)
VALUES
('banner_1.jpg', 1),
('banner_2.jpg', 2),
('banner_3.jpg', 3),
('banner_4.jpg', 4),
('banner_5.jpg', 5);

INSERT INTO DOI_TAC (Ten, HinhAnh)
VALUES
('Đối tác A', 'doi_tac_a.jpg'),
('Đối tác B', 'doi_tac_b.jpg'),
('Đối tác C', 'doi_tac_c.jpg'),
('Đối tác D', 'doi_tac_d.jpg'),
('Đối tác E', 'doi_tac_e.jpg');

INSERT INTO HE_THONG (MaHeThong, TrangThaiBaoTri)
VALUES
(1, FALSE);  -- Hệ thống không bảo trì

INSERT INTO THONG_TIN_LIEN_HE (Loai, ThongTin)
VALUES
('Email', 'contact@website.com'),
('Hotline', '+84 123 456 789'),
('Địa chỉ', '123 Đường ABC, Quận 1, TP.HCM'),
('Fanpage', 'facebook.com/website'),
('Zalo', 'Zalo: +84 987 654 321');

INSERT INTO MANG_XA_HOI (HinhAnh, LienKet)
VALUES
('facebook_icon.jpg', 'https://www.facebook.com/website'),
('instagram_icon.jpg', 'https://www.instagram.com/website'),
('twitter_icon.jpg', 'https://www.twitter.com/website'),
('linkedin_icon.jpg', 'https://www.linkedin.com/company/website'),
('youtube_icon.jpg', 'https://www.youtube.com/website');
