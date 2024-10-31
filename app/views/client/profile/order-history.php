<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Lịch sử mua hàng | BKSTORE</title>
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 min-h-screen mx-auto pt-16 pb-20 px-1 lg:px-0">
                <div class="flex gap-4 pt-6">
                    <div class="w-1/4 bg-white hidden lg:block flex flex-col text-gray-800 p-4 shadow-md rounded-lg min-h-screen">
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

                    <div class="w-full lg:w-3/4 rounded-lg space-y-6">
                        <div class="flex items-center space-x-6">
                            <img src="/public/image/facebook.png" alt="Avatar" class="w-16 h-16 rounded-full">
                            
                            <div>
                                <h2 class="text-2xl font-bold text-blue-600">Khương Gia Túc</h2>
                                <p class="text-gray-600">tuc.khuongbk@hcmut.edu.vn</p>
                            </div>
                        </div>
                        
                        <div class="flex flex-col md:flex-row gap-2">
                            <div class="flex-1 bg-white p-10 shadow-md rounded-lg">
                                <h3 class="text-xl text-center font-bold my-2">4</h3>
                                <p class="text-sm text-center text-gray-600 mb-2">Đơn hàng</p>
                            </div>
                            <div class="flex-1 bg-white p-10 shadow-md rounded-lg">
                                <h3 class="text-xl text-center font-bold my-2">14M</h3>
                                <p class="text-sm text-center text-gray-600 mb-2">Tổng tiền mua hàng</p>
                            </div>
                            <div class="flex-1 bg-white p-10 shadow-md rounded-lg">
                                <h3 class="text-xl text-center font-bold my-2">Thành viên</h3>
                                <p class="text-sm text-center text-gray-600 mb-2">Cấp bậc</p>
                            </div>
                        </div>

                        <p class="bg-gray-200 text-blue-500 text-sm block px-2 py-2 rounder-lg">
                            Cập nhật thông tin cá nhân và địa chỉ 
                            để có trải nghiệm đặt hàng nhanh và thuận tiện hơn.
                            <a href="#" class="underline text-blue-800">Cập nhập?</a>
                        </p>
                        
                        <?php for ($i = 0; $i < 5; $i++) { ?>
                            <div class="flex bg-white border rounded-lg h-36 p-4">
                                <div class="flex-1">
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
                                                            <p class="text-gray-600">Ngày đặt: <span class="font-medium text-gray-700">10/10/2024</span></p>
                                                            <p class="text-gray-700 font-semibold justify-end">200,000₫</p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col justify-between">
                                                        <p class="text-sm px-3 py-1 bg-green-100 text-green-700 font-medium rounded-full">Đã giao hàng</p>
                                                        <a href="#" class="text-blue-500 hover:underline font-medium">Xem chi tiết>></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </main>
        </div>
        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>