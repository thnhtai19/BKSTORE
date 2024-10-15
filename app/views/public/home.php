<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Trang chủ | BKSTORE</title>
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen pt-16 pb-20 px-1 lg:px-0">
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
                <div class="w-full bg-blue-300 mt-4 rounded-lg p-4">
                    <?php
                        function renderStars($sao) {
                            $maxStars = 5; 
                            $output = '';
                            for ($i = 1; $i <= $maxStars; $i++) {
                                if ($i <= $sao) {
                                    $output .= '<span class="text-yellow-500 text-xl">★</span>';
                                } else {
                                    $output .= '<span class="text-gray-300 text-xl">☆</span>';
                                }
                            }
                            return $output;
                        }
                    ?>
                    <div class="text-2xl font-bold text-gray-700 mb-4">
                        MỚI THÊM GẦN ĐÂY
                    </div>
                    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
                        <div class="bg-white p-2 rounded-lg shadow-lg">
                            <div class="h-44 flex justify-center">
                                <img src="/public/image/book1.webp" alt="Product Image" class="object-cover h-full rounded-md">
                            </div>
                            <div class="pt-4 pb-4 text-sm">
                                <div class="font-semibold mt-2 h-16 text-black-700">Dế Mèn Phiêu Lưu Ký - Tái Bản 2020</div>
                                <p class="text-custom-blue font-bold text-base">42.500đ</p>
                            </div>
                            <div class="flex justify-between items-center">
                                <div class="flex items-center">
                                    <?php echo renderStars(sao: 4); ?>
                                </div>
                                <button id="heart-button" class="focus:outline-none">
                                    <svg
                                        id="heart-icon"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        class="w-6 h-6 text-red-500 transition duration-300 ease-in-out">
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 21c-4.35-3.2-8-5.7-8-9.5 0-2.5 2-4.5 4.5-4.5 1.74 0 3.41 1 4.5 2.54 1.09-1.54 2.76-2.54 4.5-2.54 2.5 0 4.5 2 4.5 4.5 0 3.8-3.65 6.3-8 9.5z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow-lg">
                            <div class="h-44 flex justify-center">
                                <img src="/public/image/book1.webp" alt="Product Image" class="object-cover h-full rounded-md">
                            </div>
                            <div class="pt-4 pb-4 text-sm">
                                <div class="font-semibold mt-2 h-16 text-black-700">iPhone 15 128GB | Chính hãng VN/A</div>
                                <p class="text-custom-blue font-bold text-base">19.990.000đ</p>
                            </div>
                            <div>
                                <?php
                                    echo renderStars(4);
                                ?>
                            </div>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow-lg">
                            <div class="h-44 flex justify-center">
                                <img src="/public/image/book1.webp" alt="Product Image" class="object-cover h-full rounded-md">
                            </div>
                            <div class="pt-4 pb-4 text-sm">
                                <div class="font-semibold mt-2 h-16 text-black-700">iPhone 15 128GB | Chính hãng VN/A</div>
                                <p class="text-custom-blue font-bold text-base">19.990.000đ</p>
                            </div>
                            <div>
                                <?php
                                    echo renderStars(4);
                                ?>
                            </div>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow-lg">
                            <div class="h-44 flex justify-center">
                                <img src="/public/image/book1.webp" alt="Product Image" class="object-cover h-full rounded-md">
                            </div>
                            <div class="pt-4 pb-4 text-sm">
                                <div class="font-semibold mt-2 h-16 text-black-700">iPhone 15 128GB | Chính hãng VN/A</div>
                                <p class="text-custom-blue font-bold text-base">19.990.000đ</p>
                            </div>
                            <div>
                                <?php
                                    echo renderStars(4);
                                ?>
                            </div>
                        </div>
                        <div class="bg-white p-2 rounded-lg shadow-lg">
                            <div class="h-44 flex justify-center">
                                <img src="/public/image/book1.webp" alt="Product Image" class="object-cover h-full rounded-md">
                            </div>
                            <div class="pt-4 pb-4 text-sm">
                                <div class="font-semibold mt-2 h-16 text-black-700">iPhone 15 128GB | Chính hãng VN/A</div>
                                <p class="text-custom-blue font-bold text-base">19.990.000đ</p>
                            </div>
                            <div>
                                <?php
                                    echo renderStars(5);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/swiper-bundle.min.js"></script>
    <script src="/public/js/client.js"></script>
</body>
</html>