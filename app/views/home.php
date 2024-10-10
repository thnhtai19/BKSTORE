<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Trang chủ</title>
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen">
                <div class="flex gap-2 pt-2">
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
                                <img src="/public/image/user.png" alt="user" class="w-6 h-6 mr-2">
                                <div>
                                    Trang cá nhân
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
                                <img src="/public/image/protect.png" alt="protect" class="w-6 h-6 mr-2">
                                <div>
                                    Tra cứu bảo hành
                                </div>
                            </div>
                            <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <path
                                    d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full lg:w-3/5 px-1 lg:px-0 shadow-lg">
                        <div class="swiper-container rounded-lg">
                            <div class="swiper-wrapper">
                                <div
                                    class="swiper-slide bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/tess.webp" alt="1">
                                </div>
                                <div
                                    class="swiper-slide bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/tess2.webp" alt="2">
                                </div>
                                <div
                                    class="swiper-slide bg-white flex items-center justify-center text-white rounded-lg overflow-hidden">
                                    <img src="/public/image/tess3.webp" alt="3">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="w-1/5 hidden lg:block ">
                        <div class="rounded-lg overflow-hidden mb-4">
                            <img src="/public/image/sale1.webp" alt="sale1">
                        </div>
                        <div class="rounded-lg overflow-hidden">
                            <img src="/public/image/tess.webp" alt="sale2">
                        </div>
                    </div>
                </div>
            </main>
            <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/public/js/swiper.js"></script>
</body>
</html>