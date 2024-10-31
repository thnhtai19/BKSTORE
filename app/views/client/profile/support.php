<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Hỗ trợ | BKSTORE</title>
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
                                    <a href="/app/views/client/profile/order-history.php" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 bg-blue-300 text-white rounded shadow-lg">
                                        Hỗ trợ
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
                        <div class="flex flex-col md:flex-row gap-10">
                            <div class="flex-1 bg-white p-5 shadow-md rounded-xl">
                                <div class="w-20 h-20 float-left mr-2">
                                    <img src="/public/image/consultation.jpg" alt="consultation">
                                </div>
                                <h5 class="font-bold mt-3">Tư vấn mua hàng (8h00 - 22h20)</h5>
                                <p class="text-lg text-yellow-500">1800.2097</p>
                            </div>

                            <div class="flex-1 bg-white p-5 shadow-md rounded-xl">
                                <div class="w-20 h-20 float-left mr-2">
                                    <img src="/public/image/warranty.jfif" alt="warranty">
                                </div>
                                <h5 class="font-bold mt-3">Tư vấn đổi sách (8h00 - 21h00)</h5>
                                <p class="text-lg text-yellow-500">1800.2088</p>
                            </div>
                        </div>

                        <div class="flex flex-col md:flex-row gap-10">
                            <div class="flex-1 bg-white p-5 shadow-md rounded-xl">
                                <div class="w-20 h-20 float-left mr-2">
                                    <img src="/public/image/complaint.jfif" alt="complaint">
                                </div>
                                <h5 class="font-bold mt-3">Khiếu nại (8h00 - 21h30)</h5>
                                <p class="text-lg text-yellow-500">1800.2088</p>
                            </div>
                            <div class="flex-1 bg-white p-5 shadow-md rounded-xl">
                                <div class="w-20 h-20 float-left mr-2">
                                    <img src="/public/image/email.png" alt="email">
                                </div>
                                <h5 class="font-bold mt-3">Email</h5>
                                <p class="text-lg text-yellow-500">htkh@bkstore.com.vn</p>
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