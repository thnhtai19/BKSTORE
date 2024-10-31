<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Chi tiết đơn hàng | BKSTORE</title>
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 min-h-screen mx-auto pt-16 pb-20 px-1 lg:px-0">
                <div class="flex gap-4 pt-6">
                    <div class="w-1/4 bg-white hidden lg:block flex flex-col text-gray-800 p-4 shadow-md rounded-lg">
                        <nav>
                            <ul>
                                <li class="mb-4">
                                    <a href="/app/views/client/profile/profile.php" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Trang chủ
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="/app/views/client/profile/my-account.php" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Tài khoản của bạn
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 bg-blue-300 text-white rounded shadow-lg">
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Hồ sơ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-red-500 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Thoát tài khoản
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="w-full lg:w-3/4 rounded-lg space-y-5">
                        <div class="relative flex justify-center items-center">
                            <button class="absolute left-0 material-icons" onclick="goBack()">
                                <img src="/public/image/arrow.png" alt="arrow" class="w-8 h-8">
                            </button>
                            <div class="font-bold text-lg pb-2">
                                Chi tiết đơn hàng
                            </div>
                        </div>
                        <hr>
                        <div>
                            <p class="text-gray-500 mt-1">Mã đơn hàng: <span class="font-medium text-gray-700">#123456</span></p>
                            <p class="text-gray-500 mt-1">Ngày đặt: <span class="font-medium text-gray-700">10/18/2024</span></p>
                        </div>
                        <div>
                            <div class="flex bg-white border rounded-lg h-36 p-4">
                                <div class="flex-1 pb-2">
                                    <div class="flex">
                                        <div class="w-28">
                                            <img class="h-full" src="/public/image/book1.webp" alt="product">
                                        </div>
                                        <div class="flex-1">
                                            <div class="h-full w-full">
                                                <div class="flex justify-between mb-4 h-full">
                                                    <div class="flex">
                                                        <div>
                                                            <p class="text-gray-700 font-medium">Dế Mèn Phiêu Lưu Ký - Tái Bản 2020</p>
                                                            <p class="text-gray-500">Số lượng: 1</p>
                                                            <p class="text-gray-700 font-semibold justify-end">200,000₫</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col justify-between">
                                                        <p class="text-sm px-3 py-1 bg-green-100 text-green-700 font-medium rounded-full">Đã giao hàng</p>
                                                        <div class="flex justify-end items-center">
                                                            <div class="flex items-center space-x-2">
                                                                <button
                                                                    class="flex justify-center py-2 px-4 border text-sm font-medium rounded-md text-black hover:text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    Đánh giá
                                                                </button>
                                                                <button
                                                                    class="flex justify-center py-2 px-4 border text-sm font-medium rounded-md text-black hover:text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                                    Mua lại
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pb-2 pt-6 font-bold text-custom-blue">THÔNG TIN THANH TOÁN</div>
                            <div class="bg-white rounded-lg border w-full p-4 pl-6 pr-6">
                                <div class="flex justify-between text-gray-500 pt-6">
                                    <div>Số lượng sản phẩm</div>
                                    <div class="text-black">1</div>
                                </div>
                                <div class="flex justify-between text-gray-500 pt-4">
                                    <div>Tiền hàng (Tạm tính)</div>
                                    <div class="text-black">100.000đ</div>
                                </div>
                                <div class="flex justify-between text-gray-500 pt-4">
                                    <div>Giảm giá</div>
                                    <div class="text-black">0đ</div>
                                </div>
                                <div class="flex justify-between text-gray-500 pt-4 pb-4">
                                    <div>Phí vận chuyển</div>
                                    <div class="text-black">Miễn phí</div>
                                </div>
                                <hr>
                                <div class="flex justify-between pt-4">
                                    <div class="font-bold">Tổng tiền</div>
                                    <div class="text-black">100.000đ</div>
                                </div>
                            </div>
                            <div class="pb-2 pt-6 font-bold text-custom-blue">THÔNG TIN KHÁCH HÀNG</div>
                            <div class="bg-white rounded-lg border h-18 w-full p-4 pl-6 pr-6">
                                <div class="flex gap-4">
                                    <div class="w-1/2">
                                        <div class="text-gray-600 mb-2">
                                            Tên khách hàng
                                        </div>
                                        <input type="text" class="border rounded-lg w-full p-2" value="Trần Thành Tài">
                                    </div>
                                    <div class="w-1/2">
                                        <div class="text-gray-600 mb-2">
                                            Số điện thoại
                                        </div>
                                        <input type="text" class="border rounded-lg w-full p-2" value="0800000000">
                                    </div>
                                </div>
                                <div class="text-gray-600 mb-2 mt-2">
                                    Địa chỉ nhận hàng
                                </div>
                                <input type="text" class="border rounded-lg w-full p-2" value="Trường đại học Bách Khoa TP HCM">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>