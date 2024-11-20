<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/admin.css">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <title>Quản đơn hàng | ADMIN BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div id="editOrderModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-40">
        <div class="bg-white p-6 rounded-lg w-11/12 lg:w-2/4 z-50 overflow-y-auto" style="max-height: 700px">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-bold mb-4">Cập nhật đơn hàng</h2>
                <button onclick="closeModalOrder()">✕</button>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Mã đơn hàng:</label>
                    <input type="text" id="idOrder" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tên người mua:</label>
                    <input type="text" id="nameUser" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số điện thoại:</label>
                    <input id="phone" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Địa chỉ giao hàng:</label>
                    <input id="diachigiaohang" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Ngày đặt hàng:</label>
                    <input id="ngaydat" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số lượng sản phẩm:</label>
                    <input id="soluongsanpham" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tổng tiền:</label>
                    <input id="tongtien" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Mã giảm giá:</label>
                    <input id="magiamgia" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Trạng thái thanh toán:</label>
                    <select id="trangthaithanhtoan" class="mt-2 mb-4 w-full p-2 border rounded">
                        <option value="Chưa thanh toán">Chưa thanh toán</option>
                        <option value="Đã thanh toán">Đã thanh toán</option>
                        <option value="Huỷ thanh toán">Huỷ thanh toán</option>
                    </select>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Trạng thái thanh toán:</label>
                    <select id="trangthaidonhang" class="mt-2 mb-4 w-full p-2 border rounded">
                        <option value="Chờ xác nhận">Chờ xác nhận</option>
                        <option value="Đã xác nhận">Đã xác nhận</option>
                        <option value="Đang vận chuyển">Đang vận chuyển</option>
                        <option value="Đã giao hàng">Đã giao hàng</option>
                    </select>
                </div>
            </div>

            <div class="w-full pb-6">
                <label for="hinhanh" class="block text-sm font-medium text-gray-700">Danh sách sản phẩm:</label>
                <div class="flex flex-wrap gap-4 mt-2">
                    <div class="w-full border border-gray-300 p-2 rounded-md flex gap-5">
                        <img src="/public/image/book1.webp" alt="Hình ảnh 1" class="w-16 h-16 object-cover rounded">
                        <div class="flex-1">
                            <div class="">
                                <div class="text-gray-600 font-bold">Dế mèn phiêu lưu ký</div>
                                <div class="flex justify-between pt-2">
                                    <div class="text-custom-blue font-bold text-sm">50.000đ</div>
                                    <div class="text-gray-600">x1</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <button onclick="updateOrder()" class="bg-green-500 text-white px-4 py-2 rounded">Cập nhật</button>
                <button onclick="closeModalOrder()" class="bg-gray-500 text-white px-4 py-2 rounded">Thoát</button>
            </div>
        </div>
    </div>


    <div class="h-screen block md:flex">
        <?php $page = 4; include './partials/sidebar.php'; ?>
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-20 hidden"></div>
        <div class="flex-1 overflow-x-hidden">
            <div class="flex flex-col">
                <div class="bg-white fixed top-0 left-0 right-0 z-10">
                    <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/admin/partials/header.php'; ?>
                </div>
                <div class="overflow-y-auto overflow-x-hidden pt-16">
                    <main class="container mx-auto min-h-screen px-4 py-4">
                        <nav class="flex gap-2 text pb-4 text-sm text-gray-700">
                            <a href="/" class="cursor-pointer hover:text-blue-500 focus:outline-none">BkStore.Vn</a>
                            <div>&rsaquo;</div>
                            <a href="/admin" class="cursor-pointer hover:text-blue-500 focus:outline-none">Admin</a>
                            <div>&rsaquo;</div>
                            <div class="text-gray-500">Quản lý đơn hàng</div>
                        </nav>

                        <script>
                            const columnTitles = {
                                id: 'ID',
                                name: 'Tên khách hàng',
                                ngaydat: 'Ngày đặt hàng',
                                tongtien: "Tổng tiền",
                                trangthaithanhtoan: 'Trạng thái thanh toán',
                                trangthai: 'Trạng thái đơn hàng',
                                action: "Hành động"
                            };

                            const data = [
                                {
                                    id: '2210',
                                    name: 'Trần Thành Tài',
                                    ngaydat: '04/10/2024',
                                    tongtien: "100000",
                                    trangthaithanhtoan: 'Chưa thanh toán',
                                    trangthai: 'Chờ xác nhận',
                                    phone: '08000008',
                                    diachigiaohang: "Đại học Bách Khoa",
                                    soluongsanpham: '1',
                                    magiamgia: "NAPCARD20K",
                                    action: [
                                        { label: 'Cập nhật', class: 'bg-green-500 text-white', onclick: 'editOrder' },
                                    ]
                                },
                                
                            ];

                            function editOrder(item) {
                                document.getElementById("editOrderModal").classList.remove("hidden");
                                const parseItem= JSON.parse(decodeURIComponent(item));
                                
                                document.getElementById("idOrder").value = parseItem.id;
                                document.getElementById("nameUser").value = parseItem.name;
                                document.getElementById("trangthaithanhtoan").value = parseItem.trangthaithanhtoan;
                                document.getElementById("trangthaidonhang").value = parseItem.trangthai;
                                document.getElementById("phone").value = parseItem.phone;
                                document.getElementById("diachigiaohang").value = parseItem.diachigiaohang;
                                document.getElementById("soluongsanpham").value = parseItem.soluongsanpham;
                                document.getElementById("magiamgia").value = parseItem.magiamgia;
                                document.getElementById("tongtien").value = parseItem.tongtien;
                                document.getElementById("ngaydat").value = parseItem.ngaydat;
             

                            }

                            function closeModalOrder() {
                                document.getElementById("editOrderModal").classList.add("hidden");
                            }

                        </script>
                        <?php
                            $title = "Quản lý đơn hàng";
                            include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/table.php';
                        ?>
                    </main>
                </div>
                <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/admin/partials/footer.php'; ?>
            </div>
        </div>
    </div>
    <script src="/public/js/sidebar.js"></script>
</body>

</html>