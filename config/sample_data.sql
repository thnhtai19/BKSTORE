USE bkstore;

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

INSERT INTO `SAN_PHAM` (`ID_SP`, `TenSP`, `MoTa`, `Gia`, `TyLeGiamGia`, `SoLuongKho`, `NXB`, `KichThuoc`, `SoTrang`, `PhanLoai`, `TuKhoa`, `HinhThuc`, `TacGia`, `NgonNgu`, `NamXB`) VALUES
(1, 'Văn Học Tuổi Hoa - Nhà', '\"Nhà\" là sự chắp nối những mảnh kí ức bé nhỏ, rời rạc của cô bé tên Liên đi tìm chính mình trong thời niên thiếu. Sống ở một thị trấn nhỏ, giữa bao biến chuyển, giao thoa cũ – mới ồ ạt những năm 90, Liên tò mò, choáng ngợp, hoài nghi về khát khao và vai trò của một người phụ nữ, để rồi tách mình khỏi những thứ cô bé cho là không đặc biệt. Cũng từ đây, Liên định nghĩa lại ước mong của mình và thử đón nhận tình yêu thương tưởng chừng luôn thiếu vắng.\n\n“Trong cơn mơ ngủ, có lẽ tôi đã đơn giản thiếp đi giữa lòng mẹ. Có lẽ tất cả cuộc đối thoại này chỉ là ảo giác sinh ra từ tâm trí mệt mỏi của tôi. Một hình bóng trong mơ, một sự tồn tại trong tiềm thức của tôi đã nhẹ nhàng đến thế chỗ bà… Như thể, điều tôi tìm kiếm mãi mãi, từ lúc ra đời, chỉ đơn giản là quay trở lại trạng thái này. Rằng bao lâu, tôi đã khao khát, chờ đợi, tìm kiếm chính điều này đây.”\n\n', 65000, 0.13, 50, 'NXB Kim Đồng', '19 x 13 x 1.4 cm', 280, 'Sách Văn Học', 'Thiếu nhi, giáo dục', 'Bìa mềm', '	\nNguyễn Dương Quỳnh', 'Tiếng Việt', 2024),
(2, 'Văn Học Tuổi Hoa - Nhặt', 'Cậu bé Tính có vẻ như “chẳng ra ngô khoai, hồn vía gì”, nhưng tình cảm lại vô vùng sâu sắc.\n\nCậu NHẶT khoảnh khắc vụng về bố cắt mái tóc “bum bê” tròn ủng cho bà với những câu nói đùa đầy yêu thương, NHẶT chuyện vụn vặt nấu bát canh hoa thiên lí, om nồi ốc chuối đậu… ăm ắp không khí gia đình đầm ấm, NHẶT sự vụng về “cười đến đau cả mép” của chị Thương “ư ơ ngờ ương”… NHẶT mọi thứ, để làm hành trang.\n\nMỗi thứ cậu NHẶT, dù thích hay ghét cũng đong đầy những yêu thương và kỉ niệm, những lo toan và chăm chút khiến ta thấy trân trọng hơn cuộc sống và tình cảm của người thân.', 35000, 0.25, 30, 'NXB Kim Đồng', '19 x 13 x 0.6 cm', 132, 'Sách Văn Học', 'Văn học, lãng mạn', 'Bìa Mềm', 'Nguyễn Mỹ Nữ', 'Tiếng Việt', 2023),
(3, 'Văn Học Thiếu Nhi - Kho Báu Trong Thành Phố', 'Sau JONI MẶT TỊT VÀ ĐỒNG BỌN TINH NGHỊCH kể về chú mèo bông xù rất được lòng bạn đọc trẻ, KHO BÁU TRONG THÀNH PHỐ tiếp tục là một truyện dài đầy yêu thương và gợi nhớ của tác giả Nguyễn Khắc Cường, diễn ra trong lòng Sài Gòn - Thành phố Hồ Chí Minh. Theo chân cuộc đua đi tìm kho báu của cha con bé Kiến, những hồi ức về Thành phố ở thập niên 80 hiện ra sống động, với những khung cảnh vừa quen vừa lạ. Truyện còn là một \"bộ sưu tầm\" những trò chơi dân gian đã từng làm mê mệt trẻ em cách đây mấy mươi năm: chọi dế, thả thuyền, bắn bi, búng thun… được tác giả mô tả hài hước, chân thực.\n\nVì lẽ đó, tác phẩm này không chỉ dành cho trẻ em, mà người lớn cũng có thể đọc say mê và mỉm cười với một bầu trời tuổi thơ cũ đang trở lại.\n\n--\n\n\"Hình như lúc còn nhỏ ai cũng mong mình lớn nhanh để khỏi bị bắt ngủ trưa, để được đi chơi tự do, muốn ăn bao nhiêu bánh kẹo tùy thích... Chừng lớn lên, nhiều người lại mơ được nhỏ lại, được tung tăng chạy nhảy vô tư.\n\nDĩ nhiên ước mơ nhỏ lại đâu thể nào thành hiện thực, nên tôi viết cuốn truyện này để được quay về tuổi thơ, sa đà vô các trò chơi búng thun, tạt lon, bắn bi, chọi cầu, đá cá, bắt dế, tắm mưa, lò cò, chơi u, chơi keng, đánh trỏng, banh lỗ... Những trò chơi khiến trẻ con 40 năm trước mê mệt, quên ăn quên ngủ, giờ không thấy ai chơi nữa, buồn quá chừng!\n\nKhông mơ nhỏ lại được thì tôi ước những trò chơi bị ngủ quên đó mau thức dậy, làm bạn với trẻ em bây giờ. Khi cùng nhau chạy nhảy, la hét, rượt đuổi... các em sẽ trở nên lanh tay lẹ mắt, hoạt bát, nhanh nhẹn, ít nguy cơ bị cận thị, béo phì hơn là suốt ngày ngồi một chỗ dán mắt vô màn hình máy tính, điện thoại.\"', 105000, 0.16, 25, 'NXB Trẻ', '20 x 13 x 1.2 cm', 252, 'Sách Văn Học', 'Giáo dục, khoa học', 'Bìa mềm', '	\nNguyễn Khắc Cường', 'Tiếng Việt', 2023),
(4, 'Danh Tác Văn Học Việt Nam - Ngày Mới', '*Trích đoạn:\n\n\"Trường khẽ thở dài. Trong cái vui của lòng chàng, Trường muốn cho anh chị cũng được sung sướng. Chàng hiểu những nỗi đau đớn mà Dung đã phải chịu vì thái độ lãnh đạm của Xuân. Tuy vậy, giờ nghĩ đến anh, Trường không thấy bực tức như trước nữa. Sự thay đổi của Xuân gần đây, chàng đã đoán biết những duyên cớ. Có lẽ Xuân cũng đã có những hành vi và ý nghĩ của mình. Xuân, không có can đảm trở về với cuộc đời chàng có, với những vui và những buồn của sự sống hằng ngày.\"', 85000, 0.23, 40, 'NXB Văn Học', '20.5 x 15 x 1.2 cm', 400, 'Sách Văn Học', 'Lịch sử, văn hóa', 'Bìa mềm', 'Thạch Lam', 'Tiếng Việt', 2023),
(5, 'Con Đường Văn Sĩ', 'Cùng với những độc giả yêu văn chương, muốn tìm hiểu thêm về nhà văn Nguyễn Huy Tưởng, cuốn sách đặc biệt nhắm đến các bạn đọc trẻ tuổi: Những người đang háo hức và băn khoăn, quả quyết và khắc khoải bước vào đời với khát khao lập thân lập nghiệp giống như bậc tiền nhân của mình…\n\n---\n\nNhà văn NGUYỄN HUY TƯỞNG sinh ngày 6.5.1912 trong một gia đình Nho giáo ở làng Dục Tú, Từ Sơn, Bắc Ninh (nay thuộc xã Dục Tú, huyện Đông Anh, Hà Nội). Những năm tháng tuổi trẻ, ông tham gia các phong trào yêu nước của thanh niên, học sinh ở Hải Phòng; hoạt động Truyền bá quốc ngữ, Hướng đạo sinh. Năm 1943 ông gia nhập nhóm Văn hóa cứu quốc bí mật. Tháng 8.1945, Nguyễn Huy Tưởng được cử tham dự Đại hội quốc dân ở Tân Trào. Cách mạng tháng Tám thành công, ông trở thành người lãnh đạo chủ chốt của hội Văn hóa cứu quốc và là đại biểu Quốc hội khóa 1 năm 1946. Sau 1954, ông là thành viên sáng lập Hội Nhà văn Việt Nam, Uỷ viên Ban chấp hành. Nguyễn Huy Tưởng là một trong những người sáng lập và là giám đốc đầu tiên của Nhà xuất bản Kim Đồng. Do mắc bệnh hiểm nghèo, ông mất ngày 25.7.1960 tại Hà Nội.\n\nTrong cuộc đời sáng tác văn chương, nhà văn Nguyễn Huy Tưởng đã đoạt nhiều giải thưởng, trong đó có Giải thưởng Hồ Chí Minh về Văn học Nghệ thuật, đợt I, năm 1996.', 180000, 0.13, 20, 'NXB Kim Đồng', '22.5 x 14 x 0.5 cm', 584, 'Sách Văn Học', 'Lịch sử, văn hóa', 'Bìa mềm', 'Nguyễn Huy Tưởng', 'Tiếng Việt', 2024),
(6, 'Học Cách Chiến Thắng Sự Tự Ti', 'Mỗi lần trẻ có tâm trạng lo lắng, rụt rè khi tham gia một hoạt động nào đó, chắc hẳn rất nhiều bố mẹ thường cổ vũ, động viên: “Hãy tự tin, mạnh mẽ lên con nhé!”\r\n\r\nNhưng làm thế nào để trẻ trở nên tự tin, mạnh mẽ? Làm thế nào để trẻ không nhút nhát, rụt rè, biết yêu thương bản thân và mọi người xung quanh? Làm thế nào để trẻ dũng cảm đối diện với những việc không như ý muốn bằng thái độ bình tĩnh, không cáu gắt? Làm thế nào để trẻ tích cực phát huy ưu điểm, ngày càng hoàn thiện bản thân?\r\n\r\nCác bố mẹ hãy cùng con đọc bộ sách Bồi dưỡng tính cách tự tin và mạnh mẽ cho trẻ để đi tìm lời giải cho những băn khoăn kể trên nhé. Thông qua tám câu chuyện nhỏ thú vị cùng hình minh họa ngộ nghĩnh về các bạn động vật đáng yêu, tin rằng các bé sẽ học được nhiều điều bổ ích lắm đấy', 32000, 0.18, 20, 'NXB Thanh Niên', '20.5 x 19.6 x 0.2 cm', 20, 'Sách Thiếu Nhi', 'Thiếu nhi', 'Bìa mềm', 'Sách Thiếu Nhi Tiểu Kỳ Lân', 'Tiếng Việt', 2023);

INSERT INTO `HINH_ANH` (`ID_HinhAnh`, `Anh`, `ID_SP`) VALUES
(1, 'public/image/1/nha_bia.webp', 1),
(2, 'public/image/2/van-hoc-tuoi-hoa_nhat_bia.webp', 2),
(3, 'public/image/3/8934974187493.webp', 3),
(4, 'public/image/4/8935236430852.webp', 4),
(5, 'public/image/5/8935352607985.webp', 5),
(7, 'public/image/2/2023_06_07_10_47_41_1-390x510.webp', 2),
(8, 'public/image/2/2023_06_07_10_47_41_2-390x510.webp', 2),
(9, 'public/image/2/2023_06_07_10_47_41_3-390x510.webp', 2),
(10, 'public/image/1/2024_09_26_16_54_10_1-390x510.webp', 1),
(11, 'public/image/1/2024_09_26_16_54_10_2-390x510.webp', 1),
(12, 'public/image/1/2024_09_26_16_54_10_3-390x510.webp', 1),
(13, 'public/image/3/2023_06_07_16_41_57_2-390x510.webp', 3),
(14, 'public/image/3/2023_06_07_16_41_57_3-390x510.webp', 3),
(15, 'public/image/3/2023_06_07_16_41_57_4-390x510.webp', 3),
(16, 'public/image/4/2023_11_06_16_28_51_2-390x510.webp', 4),
(17, 'public/image/4/2023_11_06_16_28_51_3-390x510.webp', 4),
(18, 'public/image/4/2023_11_06_16_28_51_4-390x510.webp', 4),
(19, 'public/image/6/8935212365857.webp', 6),
(20, 'public/image/6/2023_12_12_15_33_45_1-390x510.webp', 6),
(21, 'public/image/6/2023_12_12_15_33_45_2-390x510.webp', 6);

INSERT INTO SAN_PHAM_DE_XUAT (TenSP, NoiDung, TrangThai, GhiChu, UID)
VALUES
('Sản phẩm đề xuất 1', 'Đề xuất sản phẩm mới 1', "Đang chờ duyệt", 'Đang chờ duyệt', 1),
('Sản phẩm đề xuất 2', 'Đề xuất sản phẩm mới 2', "Đã duyệt", 'Đã được duyệt', 2),
('Sản phẩm đề xuất 3', 'Đề xuất sản phẩm mới 3', "Đã từ chối", 'Không được duyệt', 3),
('Sản phẩm đề xuất 4', 'Đề xuất sản phẩm mới 4', "Đang chờ duyệt", 'Đang chờ duyệt', 6),
('Sản phẩm đề xuất 5', 'Đề xuất sản phẩm mới 5', "Đã duyệt", 'Đã được duyệt', 7);

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

INSERT INTO `TIN_TUC` (`MaTinTuc`, `TieuDe`, `ThoiGianTao`, `NoiDung`, `TuKhoa`, `TrangThai`, `MoTa`) VALUES
(1, 'Tin tức 1', '10:00:00 21-10-2023', 'Nội dung tin tức 1', 'sách, giảm giá, khuyến mãi', 'Đang ẩn', NULL),
(2, 'Tin tức 2', '09:30:00 20-10-2023', 'Nội dung tin tức 2', 'sách mới, tác giả nổi tiếng', 'Đang ẩn', NULL);

INSERT INTO `ANH_MINH_HOA` (`MaAnh`, `MoTa`, `LinkAnh`, `MaTinTuc`) VALUES
(1, 'Ảnh minh họa cho tin tức 1', 'public/image/tin1.jpg', 1),
(2, 'Ảnh minh họa cho tin tức 2', 'public/image/tin2.jpg', 2);

INSERT INTO `BANNER` (`MaBanner`, `Image`, `IdSP`, `MoTa`, `TrangThai`) VALUES
(1, 'public/image/1.webp', 1, '', 'Đang hiện'),
(2, 'public/image/2.webp', 2, '', 'Đang hiện'),
(3, 'public/image/3.webp', 3, '', 'Đang hiện');

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