<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/client.css">
    <link rel="stylesheet" href="/public/css/notyf.min.css">
    <title>Tin tức | BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen pt-16 pb-20 lg:pb-10 px-1 lg:px-0">
                <div class="flex gap-2 pt-4">
                    <div class="w-1/5 bg-white hidden lg:block flex flex-col rounded-xl shadow-lg p-2 pt-3 text-sm">
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/home.png" alt="trangchu" class="w-6 h-6 mr-2">
                                <div>
                                    Trang chủ
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/intro.png" alt="intro" class="w-6 h-6 mr-2">
                                <div>
                                    Giới thiệu
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/product.png" alt="product" class="w-6 h-6 mr-2">
                                <div>
                                    Danh mục sản phẩm
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/sale.png" alt="sale" class="w-6 h-6 mr-2">
                                <div>
                                    Khuyến mãi
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/news.png" alt="news" class="w-6 h-6 mr-2">
                                <div>
                                    Tin tức
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/phone.png" alt="phone" class="w-6 h-6 mr-2">
                                <div>
                                    Liên hệ
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="flex justify-between items-center hover:bg-gray-100 cursor-pointer p-1 rounded-sm mb-1">
                            <div class="flex justify-between items-center">
                                <img src="/public/image/comment.png" alt="protect" class="w-6 h-6 mr-2">
                                <div>
                                    Góp ý bán sách
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/5 rounded-lg">
                        <div class="swiper-container rounded-lg">
                            <div class="swiper-wrapper">
                                <div
                                    class="swiper-slide bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/1.webp" alt="1">
                                </div>
                                <div
                                    class="swiper-slide bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/2.webp" alt="2">
                                </div>
                                <div
                                    class="swiper-slide bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/3.webp" alt="3">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="w-1/5 hidden lg:block ">
                        <div class="rounded-lg overflow-hidden mb-4">
                            <img src="/public/image/1.webp" alt="sale1">
                        </div>
                        <div class="rounded-lg overflow-hidden">
                            <img src="/public/image/2.webp" alt="sale2">
                        </div>
                    </div>
                </div>
                <div class="flex gap-6 w-full mt-4 rounded-lg p-4">
                    <div class="w-full lg:w-4/5 rounded-lg">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tin tức nổi bật</h2>
            
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/1.webp" alt="1">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-xl mb-2 text-blue-900">Chương trình giảm giá sách mới</h3>
                                    <p class="text-gray-600 text-sm">Nhận ưu đãi giảm giá lớn khi mua sách trong tháng 11 này.</p>
                                    <a href="#" class="text-blue-500 hover:text-blue-800 mt-2 block">Đọc thêm &rarr;</a>
                                </div>
                            </div>
                            
                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/2.webp" alt="2">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-xl mb-2 text-blue-900">Sách mới cập bến</h3>
                                    <p class="text-gray-600 text-sm">Nhận ưu đãi giảm giá lớn khi mua sách trong tháng 11 này.</p>
                                    <a href="#" class="text-blue-500 hover:text-blue-800 mt-2 block">Đọc thêm &rarr;</a>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                                <div class="bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/3.webp" alt="3">
                                </div>
                                <div class="p-4">
                                    <h3 class="font-bold text-xl mb-2 text-blue-900">Tháng doanh nhân, tăng kiến thức</h3>
                                    <p class="text-gray-600 text-sm">Nhận ưu đãi giảm giá lớn khi mua sách trong tháng 11 này.</p>
                                    <a href="#" class="text-blue-500 hover:text-blue-800 mt-2 block">Đọc thêm &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 hidden lg:block ">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-6">Tin tức mới nhất</h2>
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="/public/image/2.webp" alt="Tin tức 1" class="w-full h-24 object-cover">
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="font-bold text-sm text-blue-900">Chương trình giảm giá sách mới</h3>
                                    <a href="#" class="text-blue-500 hover:text-blue-800 text-xs mt-1">Đọc thêm &rarr;</a>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="/public/image/1.webp" alt="Tin tức 1" class="w-full h-24 object-cover">
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="font-bold text-sm text-blue-900">Sách mới cập bến</h3>
                                    <a href="#" class="text-blue-500 hover:text-blue-800 text-xs mt-1">Đọc thêm &rarr;</a>
                                </div>
                            </div>

                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="/public/image/3.webp" alt="Tin tức 1" class="w-full h-24 object-cover">
                                <div class="p-3 flex flex-col justify-center">
                                    <h3 class="font-bold text-sm text-blue-900">Tháng doanh nhân, tăng kiến thức</h3>
                                    <a href="#" class="text-blue-500 hover:text-blue-800 text-xs mt-1">Đọc thêm &rarr;</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
        </div>
        <?php $page = 1;
        include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/notyf.min.js"></script>
    <script src="/public/js/heart.js"></script>
    <script src="/public/js/swiper-bundle.min.js"></script>
    <script src="/public/js/client.js"></script>
</body>

</html>