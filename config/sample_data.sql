USE bkstore;

INSERT INTO LOGIN (Email, Password, Role, Ten, Avatar)
VALUES
('user1@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User One', NULL),
('user2@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User Two', NULL),
('user3@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User Three', NULL),
('admin1@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Admin', 'Admin One', NULL),
('admin2@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Admin', 'Admin Two', NULL),
('user4@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User Four', NULL),
('user5@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User Five', NULL),
('admin3@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Admin', 'Admin Three', NULL),
('user6@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User Six', NULL),
('user7@example.com', '$2y$10$O5iit7HS7r3xemxSFW2gBuDPnQcgnVShE6BLjcIyn4DCBPE.48ejy', 'Customer', 'User Seven', NULL);

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
(1, 'Male', '0123456789', '123 Main St', 'Đang hoạt động'),
(2, 'Female', '0987654321', '456 Oak Ave', 'Đang hoạt động'),
(3, 'Male', '0123456789', '789 Pine Rd', 'Đang hoạt động'),
(6, 'Female', '0987654321', '101 Birch Ln', 'Đang hoạt động'),
(7, 'Male', '0123456789', '202 Cedar St', 'Đang hoạt động'),
(9, 'Female', '0987654321', '303 Maple Ave', 'Đang hoạt động'),
(10, 'Male', '0123456789', '404 Elm St', 'Đang hoạt động');

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

INSERT INTO SAN_PHAM_DE_XUAT (TenSP, NoiDung, TrangThai, GhiChu, UID, NgayYeuCau)
VALUES
('Sản phẩm đề xuất 1', 'Đề xuất sản phẩm mới 1', "Đang chờ duyệt", 'Đang chờ duyệt', 1, '12/11/2024'),
('Sản phẩm đề xuất 2', 'Đề xuất sản phẩm mới 2', "Đã duyệt", 'Đã được duyệt', 2, '12/11/2024'),
('Sản phẩm đề xuất 3', 'Đề xuất sản phẩm mới 3', "Đã từ chối", 'Không được duyệt', 3, '12/11/2024'),
('Sản phẩm đề xuất 4', 'Đề xuất sản phẩm mới 4', "Đang chờ duyệt", 'Đang chờ duyệt', 6, '12/11/2024'),
('Sản phẩm đề xuất 5', 'Đề xuất sản phẩm mới 5', "Đã duyệt", 'Đã được duyệt', 7, '12/11/2024');

INSERT INTO DANH_GIA (ID_SP, UID, NgayDanhGia, SoSao, NoiDung, TrangThai, PhanHoi)
VALUES
(1, 1, '20-10-2023', 5, 'Sản phẩm tuyệt vời!', 'Đang hiện', ''),
(2, 2, '21-10-2023', 4, 'Rất hài lòng với sản phẩm này', 'Đang hiện', ''),
(3, 3, '19-10-2023', 3, 'Sản phẩm tạm được, còn vài khuyết điểm', 'Đang hiện', ''),
(4, 6, '18-10-2023', 2, 'Không tốt như mong đợi', 'Đang hiện', ''),
(5, 7, '17-10-2023', 1, 'Sản phẩm rất tệ, không khuyến khích mua', 'Đang hiện', '');

INSERT INTO BINH_LUAN (ID_SP, UID, NgayBinhLuan, NoiDung, PhanHoi, TrangThai)
VALUES
(1, 1, '21-10-2023', 'Sản phẩm rất tốt, tôi rất hài lòng.', '', 'Đang hiện'),
(2, 2, '21-10-2023', 'Chất lượng ổn, giao hàng nhanh.', '', 'Đang hiện'),
(3, 3, '20-10-2023', 'Giá hơi cao nhưng sản phẩm chất lượng.', '', 'Đang hiện'),
(4, 6, '19-10-2023', 'Không như mong đợi, cần cải thiện.', '', 'Đang hiện'),
(5, 7, '18-10-2023', 'Sản phẩm quá tệ, không đáng tiền.', '', 'Đang hiện');

INSERT INTO MA_GIAM_GIA (Ma, TienGiam, DieuKien, SoLuong, TrangThai)
VALUES
('GIAM10K', 10000.00, 'Female', 50, 'Kích hoạt'),
('GIAM50K', 50000.00, '> 200000', 50, 'Kích hoạt'),
('GIAM30%', 30.00, 'Chẵn', 50, 'Hết hạn'),
('GIAM50%', 50.00, '< 500000', 50, 'Kích hoạt'),
('GIAMCOD', 25000.00, 'COD', 50, 'Hết hạn'),
('FREESHIP', 0.00, 'Tất cả', 50, 'Kích hoạt');

INSERT INTO DON_HANG (UID, NgayDat, TongTien, MaGiamGia, TrangThai, SDT, DiaChi, TenNguoiNhan, ThanhToan, PhuongThucThanhToan)
VALUES
(1, '20-10-2023', 300000.00, 'GIAM50K','Chờ xác nhận', 0123456789, 'TP.HCM', 'Trần Thành Tài','Chưa thanh toán', 'Bank'),
(2, '19-10-2023', 150000.00, NULL,'Chờ xác nhận', 0123456789, 'TP.HCM', 'Trần Thành Tài','Chưa thanh toán', 'COD'),
(3, '18-10-2023', 250000.00, 'GIAM10K','Chờ xác nhận', 0123456789, 'TP.HCM', 'Trần Thành Tài','Chưa thanh toán', 'Bank'),
(6, '17-10-2023', 100000.00, NULL,'Chờ xác nhận', 0123456789, 'TP.HCM', 'Trần Thành Tài','Chưa thanh toán', 'COD'),
(7, '16-10-2023', 200000.00, 'GIAMCOD','Chờ xác nhận', 0123456789, 'TP.HCM', 'Trần Thành Tài','Chưa thanh toán', 'Bank');

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

INSERT INTO TIN_TUC (TieuDe, ThoiGianTao, NoiDung, TuKhoa, TrangThai)
VALUES
('Tin tức 1', '10:00:00 21-10-2023', 'Nội dung tin tức 1', 'sách, giảm giá, khuyến mãi', 'Đang ẩn'),
('Tin tức 2', '09:30:00 20-10-2023', 'Nội dung tin tức 2', 'sách mới, tác giả nổi tiếng', 'Đang ẩn'),
('Tin tức 3', '08:45:00 19-10-2023', 'Nội dung tin tức 3', 'sự kiện, hội sách, giảm giá', 'Đang ẩn'),
('Tin tức 4', '07:15:00 18-10-2023', 'Nội dung tin tức 4', 'tác phẩm văn học, ra mắt', 'Đang ẩn'),
('Tin tức 5', '06:00:00 17-10-2023', 'Nội dung tin tức 5', 'ưu đãi thành viên, khách hàng VIP', 'Đang ẩn');

INSERT INTO ANH_MINH_HOA (MoTa, LinkAnh, MaTinTuc)
VALUES
('Ảnh minh họa cho tin tức 1', 'link_anh_1.jpg', 1),
('Ảnh minh họa cho tin tức 2', 'link_anh_2.jpg', 2),
('Ảnh minh họa cho tin tức 3', 'link_anh_3.jpg', 3),
('Ảnh minh họa cho tin tức 4', 'link_anh_4.jpg', 4),
('Ảnh minh họa cho tin tức 5', 'link_anh_5.jpg', 5);

INSERT INTO BANNER (Image, IdSP, MoTa, TrangThai)
VALUES
('banner_1.jpg', 1, '', 'Đang hiện'),
('banner_2.jpg', 2, '', 'Đang hiện'),
('banner_3.jpg', 3, '', 'Đang hiện'),
('banner_4.jpg', 4, '', 'Đang hiện'),
('banner_5.jpg', 5, '', 'Đang hiện');

INSERT INTO DOI_TAC (Ten, HinhAnh, LienKet)
VALUES
('Đối tác A', 'doi_tac_a.jpg', 'www.google.com'),
('Đối tác B', 'doi_tac_b.jpg', 'www.google.com'),
('Đối tác C', 'doi_tac_c.jpg', 'www.google.com'),
('Đối tác D', 'doi_tac_d.jpg', 'www.google.com'),
('Đối tác E', 'doi_tac_e.jpg', 'www.google.com');

INSERT INTO HE_THONG (MaHeThong, TrangThaiBaoTri, TuKhoa, ClientID, APIKey, Checksum)
VALUES
(1, FALSE, '', '', '', '');  -- Hệ thống không bảo trì

INSERT INTO THONG_TIN_LIEN_HE (Loai, ThongTin, HinhAnh, TrangThai)
VALUES
('Email', 'contact@website.com', 'image_1.png', 'Đang hiện'),
('Hotline', '+84 123 456 789', 'image_1.png', 'Đang hiện'),
('Địa chỉ', '123 Đường ABC, Quận 1, TP.HCM', 'image_1.png', 'Đang hiện'),
('Fanpage', 'facebook.com/website', 'image_1.png', 'Đang hiện'),
('Zalo', 'Zalo: +84 987 654 321', 'image_1.png', 'Đang hiện');

INSERT INTO MANG_XA_HOI (HinhAnh, LienKet, TrangThai)
VALUES
('facebook_icon.jpg', 'https://www.facebook.com/website', 'Đang hiện'),
('instagram_icon.jpg', 'https://www.instagram.com/website', 'Đang hiện'),
('twitter_icon.jpg', 'https://www.twitter.com/website', 'Đang hiện'),
('linkedin_icon.jpg', 'https://www.linkedin.com/company/website', 'Đang hiện'),
('youtube_icon.jpg', 'https://www.youtube.com/website', 'Đang hiện');
