<?php
require_once dirname(__DIR__, 4) . '/config/db.php';
require_once dirname(__DIR__, 3) . '/models/UserService.php';
if(!isset($_SESSION["email"])){
    header("Location: /auth/login");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Thông tin đặt hàng | BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div id="loading" class="fixed inset-0 flex items-center justify-center bg-white z-50">
        <div class="relative w-14 h-14">
            <img src="/public/image/logo.png" alt="Loading" class="absolute inset-0 w-8 h-8 mx-auto my-auto">
            <div class="loader border-8 rounded-full animate-spin"></div>
        </div>
    </div>
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-2xl mx-auto min-h-screen pt-16 pb-24 px-2 lg:px-0">
                <div class="pt-6">
                    <div class="relative flex justify-center items-center">
                        <button class="absolute left-0 material-icons" onclick="goBack()">
                            <img src="/public/image/arrow.png" alt="arrow" class="w-8 h-8">
                        </button>
                        <div class="font-bold text-lg pb-2">
                            Thông tin
                        </div>
                    </div>
                    <hr>
                    <div class="flex gap-5 pt-2 pb-2 font-bold text-gray-400">
                        <div class="w-1/2 text-center border-b-4 p-2 cursor-pointer" style="border-color: #0887B3;">
                            1. THÔNG TIN
                        </div>
                        <div class="w-1/2 text-center border-b-4 border-gray-200 p-2 cursor-pointer" onclick="goPayment()">
                            2. THANH TOÁN
                        </div>
                    </div>
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <div class="pt-4">
                            <div class="flex bg-white border rounded-lg h-36 p-4">
                                <div class="flex-1">
                                    <div class="flex">
                                        <div class="w-28">
                                            <img class="h-full" src="/public/image/book1.webp" alt="product">
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex flex-col justify-between h-full">
                                                <div class="flex justify-between items-start gap-4">
                                                    <div>Dế Mèn Phiêu Lưu Ký - Tái Bản 2020</div>
                                                </div>
                                                <div class="flex justify-between items-start gap-4">
                                                    <div class="flex gap-2">
                                                        <div class="text-custom-blue font-bold price">43.500đ</div>
                                                        <div class="text-gray-600 items-center">
                                                            <del>50.000đ</del>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-2 text-gray-500">
                                                        Số lượng: 1
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
            </main>
        </div>
        <div class="flex items-center justify-center">
            <div class="max-w-2xl w-full fixed bottom-0">
                <div class="flex items-center justify-between bg-white border w-full p-4 rounded-lg shadow-lg h-18">
                    <div>
                        <div class="font-bold text-custom-blue" id="totalAmount">Tạm tính: 0đ</div>
                        <div class="text-xs">Chưa bao gồm mã giảm giá</div>
                    </div>
                    <button class="bg-custom-background text-white font-bold rounded-lg p-2">Tiếp tục</button>
                </div>
            </div>
        </div>

    </div>
    <script src="/public/js/paymentinfo.js"></script>
    <script src="/public/js/client.js"></script>
</body>

</html>