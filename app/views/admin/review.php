<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/admin.css">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <title>Quản lý đánh giá | ADMIN BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div id="editReviewModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-40">
        <div class="bg-white p-6 rounded-lg w-11/12 lg:w-2/4 z-50 overflow-y-auto" style="max-height: 700px">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-bold mb-4">Cập nhật đánh giá</h2>
                <button onclick="closeModalReview()">✕</button>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Mã đánh giá:</label>
                    <input type="text" id="idReview" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tên khách hàng:</label>
                    <input type="text" id="nameUser" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tên sản phẩm:</label>
                    <input id="nameProduct" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Ngày đánh giá:</label>
                    <input id="ngaydanhgia" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số sao:</label>
                    <input id="sosao" class="mt-2 mb-4 w-full p-2 border rounded h-10" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Trạng thái:</label>
                    <select id="trangthai" class="mt-2 mb-4 w-full p-2 border rounded h-10">
                        <option value="Đang hiện">Đang hiện</option>
                        <option value="Đang ẩn">Đang ẩn</option>
                    </select>
                </div>
            </div>
            <div class="w-full">
                <label for="danhgia" class="block text-sm font-medium text-gray-700">Nội dung đánh giá:</label>
                <textarea id="danhgia" class="mt-2 mb-4 w-full p-2 border rounded" rows="3" disabled></textarea>
            </div>

            <div class="w-full">
                <label for="phanhoi" class="block text-sm font-medium text-gray-700">Phản hồi:</label>
                <textarea id="phanhoi" class="mt-2 mb-4 w-full p-2 border rounded" rows="3"></textarea>
            </div>


            <div class="flex justify-end space-x-4 pt-6">
                <button onclick="updateReview()" class="bg-green-500 text-white px-4 py-2 rounded">Cập nhật</button>
                <button class="bg-red-500 text-white px-8 py-2 rounded">Xoá</button>
                <button onclick="closeModalReview()" class="bg-gray-500 text-white px-4 py-2 rounded">Thoát</button>
            </div>
        </div>
    </div>


    <div class="h-screen block md:flex">
        <?php $page = 5; include './partials/sidebar.php'; ?>
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
                            <div class="text-gray-500">Quản lý đánh giá</div>
                        </nav>

                        <script>
                            const columnTitles = {
                                id: 'ID',
                                name: 'Tên khách hàng',
                                product: 'Tên sản phẩm',
                                ngaydanhgia: 'Ngày đánh giá',
                                sosao: 'Số sao',
                                trangthai: "Trạng thái",
                                action: "Hành động"
                            };

                            const data = [
                                {
                                    id: '2210',
                                    name: 'Trần Thành Tài',
                                    product: 'Dế mèn phiêu lưu ký',
                                    ngaydanhgia: '04/10/2024',
                                    sosao: "5",
                                    danhgia: "Sản phẩm tốt",
                                    trangthai: "Đang hiện",
                                    action: [
                                        { label: 'Cập nhật', class: 'bg-green-500 text-white', onclick: 'editReview' },
                                    ]
                                },
                                
                            ];

                            function editReview(item) {
                                document.getElementById("editReviewModal").classList.remove("hidden");
                                const parseItem= JSON.parse(decodeURIComponent(item));
                                
                                document.getElementById("idReview").value = parseItem.id;
                                document.getElementById("nameUser").value = parseItem.name;
                                document.getElementById("nameProduct").value = parseItem.product;
                                document.getElementById("ngaydanhgia").value = parseItem.ngaydanhgia;
                                document.getElementById("sosao").value = parseItem.sosao;
                                document.getElementById("danhgia").value = parseItem.danhgia;
                                document.getElementById("trangthai").value = parseItem.trangthai;
             

                            }

                            function closeModalReview() {
                                document.getElementById("editReviewModal").classList.add("hidden");
                            }

                        </script>
                        <?php
                            $title = "Quản lý đánh giá";
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