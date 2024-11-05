<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/admin.css">
    <title>Quản lý người dùng | ADMIN BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div id="editUserModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-40">
        <div class="bg-white p-6 rounded-lg w-11/12 lg:w-2/4 z-50">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-bold mb-4">Cập nhật người dùng</h2>
                <button onclick="closeModal()">✕</button>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Mã người dùng:</label>
                    <input type="text" id="idUser" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tên người dùng:</label>
                    <input type="text" id="nameUser" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>

            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Địa chỉ email:</label>
                    <input type="text" id="email" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số điện thoại</label>
                    <input type="text" id="phone" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>

            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Giới tính:</label>
                    <input type="text" id="sex" class="mt-2 mb-4 w-full p-2 border rounded h-10">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Trạng thái:</label>
                    <select id="trangthai" class="mt-2 mb-4 w-full p-2 border rounded h-10">
                        <option value="Đang hoạt động">Đang hoạt động</option>
                        <option value="Bị cấm">Bị cấm</option>
                    </select>
                </div>
            </div>
            
            <div class="w-full">
                <label class="block text-sm font-medium text-gray-700">Địa chỉ:</label>
                <input type="text" id="address" class="mt-2 mb-4 w-full p-2 border rounded">
            </div>

            <div class="flex justify-end space-x-4 pt-6">
                <button onclick="updateUser()" class="bg-green-500 text-white px-4 py-2 rounded">Cập nhật</button>
                <button onclick="closeModal()" class="bg-gray-500 text-white px-4 py-2 rounded">Thoát</button>
            </div>
        </div>
    </div>
    <div class="h-screen block md:flex">
        <?php $page = 2; include './partials/sidebar.php'; ?>
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
                            <div class="text-gray-500">Quản lý người dùng</div>
                        </nav>
                        <script>
                            const columnTitles = {
                                id: 'ID',
                                name: 'Họ và tên',
                                email: 'Email',
                                phone: "Số điện thoại",
                                status: "Trạng thái",
                                action: "Hành động"
                            };

                            const data = [
                                {
                                    id: "2210",
                                    name: 'Trần Thành Tài',
                                    email: 'tai.tranthanh@hcmut.edu.vn',
                                    phone: '08000008',
                                    address: 'Trường đại học Bách Khoa',
                                    status: "Đang hoạt động",
                                    sex: 'Nam',
                                    action: [
                                        { label: 'Cập nhật', class: 'bg-green-500 text-white', onclick: 'editUser' },
                                    ]
                                },
                                {
                                    id: "2211",
                                    name: 'Nguyễn Hữu Nhân',
                                    email: 'nhan.nguyenhuucse@hcmut.edu.vn',
                                    phone: '08000009',
                                    address: 'Trường đại học Bách Khoa',
                                    status: "Đang hoạt động",
                                    sex: 'Nam',
                                    action: [   
                                        { label: 'Cập nhật', class: 'bg-green-500 text-white', onclick: 'editUser' },
                                    ]
                                },
                                {
                                    id: "2212",
                                    name: 'Nguyễn Trường Thịnh',
                                    email: 'thinh.nguyentruong@hcmut.edu.vn',
                                    phone: '08000009',
                                    address: 'Trường đại học Bách Khoa',
                                    status: "Đang hoạt động",
                                    sex: 'Nam',
                                    action: [
                                        { label: 'Cập nhật', class: 'bg-green-500 text-white', onclick: 'editUser' },
                                    ]
                                },
                            ];
                            function editUser(item) {
                                document.getElementById("editUserModal").classList.remove("hidden");
                                const parseItem = JSON.parse(decodeURIComponent(item));
                                
                                document.getElementById("idUser").value = parseItem.id;
                                document.getElementById("nameUser").value = parseItem.name;
                                document.getElementById("email").value = parseItem.email;
                                document.getElementById("phone").value = parseItem.phone;
                                document.getElementById("address").value = parseItem.address;
                                document.getElementById("trangthai").value = parseItem.status;
                                document.getElementById("sex").value = parseItem.sex;
                            }

                            function updateUser() {
                                const status = document.getElementById("userStatus").value;
                                alert(`User status updated to: ${status}`);
                                closeModal();
                            }

                            function closeModal() {
                                document.getElementById("editUserModal").classList.add("hidden");
                            }
                        </script>
                        <?php
                            $title = "Quản lý người dùng";
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