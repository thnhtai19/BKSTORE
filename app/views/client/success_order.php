<?php
session_start();
if(!isset($_SESSION["email"])){
    header("Location: /auth/login");
    exit();
}

$ID_DonHang = $_GET['id'];
$method = $_GET['method'];
if($ID_DonHang == '' || $method == ''){
    header('Location: /404');
    exit;
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
    <title>Đặt hàng thành công | BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen pt-16 pb-20 px-2 lg:px-0">
                <div class="flex flex-col items-center pt-14">
                    <div class="font-bold text-xl text-custom-blue">Đặt hàng thành công</div>
                    <div class="pt-8">
                        <img src="/public/image/success.png" alt="success" class="w-20 h-20">
                    </div>
                    <div class="pt-6 text-gray-700">Đơn hàng của bạn đã được đặt thành công.</div>
                    <div class="text-gray-700">Chúng tôi sẽ sớm liên hệ bạn!</div>
                    <div class="flex justify-center gap-4 pt-6">
                        <a href="/my/order/detail?id=<?=$ID_DonHang?>"
                            class="px-4 bg-custom-background text-white py-2 rounded-lg hover:bg-blue-800 transition duration-300 cursor-pointer">
                            Xem chi tiết đơn
                        </a>
                        <a href="/"
                            class="px-4 bg-gray-200 text-gray-700 py-2 rounded-lg hover:bg-gray-300 transition duration-300 cursor-pointer">
                            Tiếp tục mua sắm
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>