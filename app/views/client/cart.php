<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Giỏ hàng | BKSTORE</title>
</head>

<body class="bg-gray-100">
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
                            Giỏ hàng của bạn
                        </div>
                    </div>
                    <hr>
                    <div class="pt-2 items-center flex gap-2">
                        <input type="checkbox" id="selectAll" class="w-4 h-4 cursor-pointer">
                        <label for="selectAll">Chọn tất cả</label>
                    </div>
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                        <div class="pt-4">
                            <div class="flex bg-white border rounded-lg h-36 p-4">
                                <div>
                                    <input type="checkbox" class="product-checkbox w-4 h-4 cursor-pointer">
                                </div>
                                <div class="flex-1">
                                    <div class="flex">
                                        <div class="w-28">
                                            <img class="h-full" src="/public/image/book1.webp" alt="product">
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex flex-col justify-between h-full w-full">
                                                <div class="flex items-start gap-1 justify-between">
                                                    <div>Dế Mèn Phiêu Lưu Ký - Tái Bản 2020</div>
                                                    <button class="remove-btn">
                                                        <img class="w-6 object-contain" src="/public/image/trash.png" alt="trash">
                                                    </button>
                                                </div>
                                                <div class="flex justify-between items-center">
                                                    <div class="flex gap-2 text-sm">
                                                        <div class="text-custom-blue font-bold price">43.500đ</div>
                                                        <div class="text-gray-600 items-center">
                                                            <del>50.000đ</del>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center space-x-2">
                                                        <button class="bg-custom-background rounded-lg w-6 h-6 flex items-center justify-center text-white font-bold transition-transform duration-200 ease-in-out transform hover:scale-105 active:scale-95 decrease-btn">
                                                            -
                                                        </button>
                                                        <input type="number" value="1" min="1" class="quantity-input text-center w-10 border border-gray-300 rounded-lg" readonly>
                                                        <button class="bg-custom-background rounded-lg w-6 h-6 flex items-center justify-center text-white font-bold transition-transform duration-200 ease-in-out transform hover:scale-105 active:scale-95 increase-btn">
                                                            +
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
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
                    <button class="bg-custom-background text-white font-bold rounded-lg p-2">Mua ngay</button>
                </div>
            </div>
        </div>

    </div>
    <script src="/public/js/client.js"></script>
    <script src="/public/js/cart.js"></script>
</body>

</html>
