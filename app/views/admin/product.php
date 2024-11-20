<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/public/css/admin.css">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <title>Quản lý sản phẩm | ADMIN BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div id="editProductModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-40">
        <div class="bg-white p-6 rounded-lg w-11/12 lg:w-2/4 z-50 overflow-y-auto" style="max-height: 700px">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-bold mb-4">Cập nhật sản phẩm</h2>
                <button onclick="closeModalProduct()">✕</button>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Mã sản phẩm:</label>
                    <input type="text" id="idProduct" class="mt-2 mb-4 w-full p-2 border rounded" disabled>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tên sản phẩm:</label>
                    <input type="text" id="nameProduct" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Thể loại:</label>
                    <select id="theloai" class="mt-2 mb-4 w-full p-2 border rounded">
                    </select>
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tác giả:</label>
                    <input id="tacgia" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Giá:</label>
                    <input id="gia" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tỷ lệ giảm giá:</label>
                    <input id="tylegiamgia" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Nhà xuất bản:</label>
                    <input id="nxb" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Năm xuất bản:</label>
                    <input id="namxb" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Kích thước:</label>
                    <input id="kichthuoc" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Năm xuất bản:</label>
                    <input id="sotrang" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Hình thức:</label>
                    <input id="hinhthuc" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Ngôn ngữ:</label>
                    <input id="ngonngu" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Từ khoá:</label>
                    <input id="tukhoa" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số lượng kho:</label>
                    <input id="soluongkho" class="mt-2 mb-4 w-full p-2 border rounded">
                </div>
            </div>
            <div class="w-full">
                <label for="mota" class="block text-sm font-medium text-gray-700">Mô tả:</label>
                <textarea id="mota" class="mt-2 mb-4 w-full p-2 border rounded" rows="3"></textarea>
            </div>
            <div class="w-full pb-6">
                <label for="hinhanh" class="block text-sm font-medium text-gray-700">Hình ảnh:</label>
                <div class="flex flex-wrap gap-4 mt-2">
                    <div class="relative border border-gray-300 p-1 rounded-md">
                        <img src="/public/image/book1.webp" alt="Hình ảnh 1" class="w-16 h-16 object-cover rounded">
                        <button class="absolute top-0.5 right-0.5 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 focus:outline-none">
                            ✕
                        </button>
                    </div>
                    <div class="relative border border-gray-300 p-1 rounded-md">
                        <img src="/public/image/book1.webp" alt="Hình ảnh 2" class="w-16 h-16 object-cover rounded">
                        <button class="absolute top-0.5 right-0.5 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 focus:outline-none">
                            ✕
                        </button>
                    </div>
                    
                    <div class="relative border-2 border-dashed border-gray-300 w-20 h-20 rounded-md flex items-center justify-center cursor-pointer hover:bg-gray-100">
                        <input type="file" id="uploadImage" class="opacity-0 absolute inset-0 cursor-pointer" accept="image/*" onchange="handleImageUpload(this)">
                        <span class="text-gray-400">+</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <button onclick="updateProduct()" class="bg-green-500 text-white px-4 py-2 rounded">Cập nhật</button>
                <button class="bg-red-500 text-white px-8 py-2 rounded">Xoá</button>
                <button onclick="closeModalProduct()" class="bg-gray-500 text-white px-4 py-2 rounded">Thoát</button>
            </div>
        </div>
    </div>

    <div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden z-40">
        <div class="bg-white p-6 rounded-lg w-11/12 lg:w-2/4 z-50 overflow-y-auto" style="max-height: 700px">
            <div class="flex justify-between items-start">
                <h2 class="text-xl font-bold mb-4">Thêm sản phẩm</h2>
                <button onclick="closeModalAddProduct()">✕</button>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tên sản phẩm:</label>
                    <input id="themnameProduct" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập tên sản phẩm">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tác giả:</label>
                    <input id="themtacgia" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập tác giả">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Thể loại:</label>
                    <select id="themtheloai" class="h-10 mt-2 mb-4 w-full p-2 border rounded" onchange="toggleCustomInput()">
                        <option value="other">Khác</option>
                    </select>
                    
                    <input type="text" id="customTheloai" class="h-10 mt-2 mb-4 w-full p-2 border rounded hidden" placeholder="Nhập thể loại khác...">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số lượng kho:</label>
                    <input id="themsoluongkho" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập số lượng kho">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Giá:</label>
                    <input id="themgia" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập giá">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Tỷ lệ giảm giá:</label>
                    <input id="themtylegiamgia" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập tỷ lệ giảm giá">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Nhà xuất bản:</label>
                    <input id="themnxb" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập nhà xuất bản">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Năm xuất bản:</label>
                    <input id="themnamxb" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập năm xuất bản">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Kích thước:</label>
                    <input id="themkichthuoc" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập kích thước">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Số trang:</label>
                    <input id="themsotrang" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập số trang">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Hình thức:</label>
                    <input id="themhinhthuc" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập hình thức">
                </div>
                <div class="w-1/2">
                    <label class="block text-sm font-medium text-gray-700">Ngôn ngữ:</label>
                    <input id="themngonngu" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập ngôn ngữ">
                </div>
            </div>
            <div class="flex gap-2">
                <div class="w-full">
                    <label class="block text-sm font-medium text-gray-700">Từ khoá:</label>
                    <input id="themtukhoa" class="mt-2 mb-4 w-full p-2 border rounded" placeholder="Nhập từ khoá">
                </div>
                
            </div>
            <div class="w-full">
                <label for="mota" class="block text-sm font-medium text-gray-700">Mô tả:</label>
                <textarea id="themmota" class="mt-2 mb-4 w-full p-2 border rounded" rows="3" placeholder="Nhập mô tả"></textarea>
            </div>
            <div class="w-full pb-6">
                <label for="hinhanh" class="block text-sm font-medium text-gray-700">Hình ảnh:</label>
                <div class="flex flex-wrap gap-4 mt-2">
                    <div class="relative border border-gray-300 p-1 rounded-md">
                        <img src="/public/image/book1.webp" alt="Hình ảnh 1" class="w-16 h-16 object-cover rounded">
                        <button class="absolute top-0.5 right-0.5 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 focus:outline-none">
                            ✕
                        </button>
                    </div>
                    <div class="relative border border-gray-300 p-1 rounded-md">
                        <img src="/public/image/book1.webp" alt="Hình ảnh 2" class="w-16 h-16 object-cover rounded">
                        <button class="absolute top-0.5 right-0.5 w-6 h-6 bg-red-500 text-white rounded-full flex items-center justify-center hover:bg-red-600 focus:outline-none">
                            ✕
                        </button>
                    </div>
                    
                    <div class="relative border-2 border-dashed border-gray-300 w-20 h-20 rounded-md flex items-center justify-center cursor-pointer hover:bg-gray-100">
                        <input type="file" id="uploadImage" class="opacity-0 absolute inset-0 cursor-pointer" accept="image/*" onchange="handleImageUpload(this)">
                        <span class="text-gray-400">+</span>
                    </div>
                </div>
            </div>
            <div class="flex justify-end space-x-4">
                <button class="bg-green-500 text-white px-4 py-2 rounded">Cập nhật</button>
                <button onclick="closeModalAddProduct()" class="bg-gray-500 text-white px-4 py-2 rounded">Thoát</button>
            </div>
        </div>
    </div>

    <div class="h-screen block md:flex">
        <?php $page = 3; include './partials/sidebar.php'; ?>
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
                            <div class="text-gray-500">Quản lý sản phẩm</div>
                        </nav>
                        <div class="pb-4">
                            <button class="flex items-center bg-custom-background-bl text-white px-4 py-2 rounded focus:outline-none" onclick="addProduct()">
                                <span class="mr-2">+</span> Thêm sản phẩm
                            </button>
                        </div>

                        <script>
                            const columnTitles = {
                                id: 'ID',
                                name: 'Tên sản phẩm',
                                theloai: 'Thể loại',
                                tacgia: "Tác giả",
                                price: 'Giá',
                                tylegiamgia: 'Giảm giá',
                                action: "Hành động"
                            };

                            let data = []
                            let categorys = []

                            function editProduct(item) {
                                document.getElementById("editProductModal").classList.remove("hidden");
                                const parseItem= JSON.parse(decodeURIComponent(item));

                                document.getElementById("idProduct").value = parseItem.id;
                                document.getElementById("nameProduct").value = parseItem.name;
                                document.getElementById("theloai").value = parseItem.theloai; 
                                document.getElementById("tacgia").value = parseItem.tacgia; 
                                document.getElementById("gia").value = parseItem.price; 
                                document.getElementById("tylegiamgia").value = parseItem.tylegiamgia; 
                                document.getElementById("nxb").value = parseItem.nxb; 
                                document.getElementById("namxb").value = parseItem.namxb; 
                                document.getElementById("sotrang").value = parseItem.sotrang; 
                                document.getElementById("hinhthuc").value = parseItem.hinhthuc; 
                                document.getElementById("ngonngu").value = parseItem.ngonngu; 
                                document.getElementById("tukhoa").value = parseItem.tukhoa; 
                                document.getElementById("soluongkho").value = parseItem.soluongkho; 
                                document.getElementById("mota").value = parseItem.mota; 
                                document.getElementById("kichthuoc").value = parseItem.kichthuoc; 
                                
                            }

                            function updateProduct() {
                                const status = document.getElementById("userStatus").value;
                                alert(`User status updated to: ${status}`);
                                closeModal();
                            }

                            function closeModalProduct() {
                                document.getElementById("editProductModal").classList.add("hidden");
                            }

                            function addProduct() {
                                document.getElementById("addProductModal").classList.remove("hidden");
                            }

                            function closeModalAddProduct() {
                                document.getElementById("addProductModal").classList.add("hidden");
                            }

                            function toggleCustomInput() {
                                const select = document.getElementById("themtheloai");
                                const customInput = document.getElementById("customTheloai");
                                
                                if (select.value === "other") {
                                    customInput.classList.remove("hidden"); 
                                    customInput.focus();
                                } else {
                                    customInput.classList.add("hidden");
                                    customInput.value = ""; 
                                }
                            }

                            async function getItems() {
                                const response = await fetch(`/api/admin/product`, {
                                    method: 'GET',
                                    headers: {
                                        'Content-Type': 'application/json'
                                    }
                                });

                                if (response.ok) {
                                    const dataItems = await response.json();
                                    if(!dataItems.success){
                                        if(dataItems.message === "Người dùng chưa đăng nhập"){
                                            window.location.href = '/auth/login'
                                            return
                                        }else if(dataItems.message === "Không có quyền truy cập"){
                                            window.location.href = '/404'
                                            return
                                        }
                                    }

                                    categorys = dataItems['product_category']
                                    const selectElement = document.getElementById("themtheloai");
                                    categorys.forEach((option, index) => {
                                        const optionElement = document.createElement("option");
                                        optionElement.value = option;
                                        optionElement.textContent = option;
                                        if (index === categorys.length - 1) {
                                            optionElement.selected = true;
                                        }
                                        selectElement.prepend(optionElement);
                                    });

                                    const selectElementEdit = document.getElementById("theloai");
                                    categorys.forEach((option, index) => {
                                        const optionElement = document.createElement("option");
                                        optionElement.value = option;
                                        optionElement.textContent = option;
                                        selectElementEdit.prepend(optionElement);
                                    });

                                    dataItems['product_list'].forEach(item => {
                                        data.push({
                                            id: item.id,
                                            name: item.ten,
                                            theloai: item.thong_tin_chi_tiet.the_loai,
                                            tacgia: item.thong_tin_chi_tiet.tac_gia,
                                            price: item.gia_san_pham,
                                            tylegiamgia: parseFloat(item.ty_le_giam_gia) / 100,
                                            nxb: item.thong_tin_chi_tiet.nha_xuat_ban,
                                            namxb: item.thong_tin_chi_tiet.nam_xuat_ban,
                                            sotrang: item.thong_tin_chi_tiet.so_trang,
                                            hinhthuc: item.thong_tin_chi_tiet.hinhthuc,
                                            ngonngu: item.thong_tin_chi_tiet.ngon_ngu,
                                            soluongkho: item.so_luong_ton_kho,
                                            mota: item.mo_ta,
                                            kichthuoc: item.thong_tin_chi_tiet.kich_thuoc,
                                            action: [
                                                { label: 'Cập nhật', class: 'bg-green-500 text-white', onclick: 'editProduct' },
                                            ]
                                        });
                                    });

                                    const event = new CustomEvent('dataReady', { detail: dataItems });
                                    window.dispatchEvent(event);
                                } else {
                                    console.error("Lỗi khi lấy dữ liệu từ API:", response.status);
                                }
                            }

                            window.onload = async function() {
                                await getItems(); 
                            };

                        </script>
                        <?php
                            $title = "Quản lý sản phẩm";
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