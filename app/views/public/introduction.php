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
    <title>Giới thiệu | BKSTORE</title>
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
                        <div class="swiper-container rounded-lg bg-white ">
                            <div class="title p-2">
                                <h1 class="text-2xl font-bold text-black-700">Về chúng tôi</h1>
                                <time class="text-sm text-gray-500">29/10/2024</time>
                            </div>
                            <hr>
                            <div class="content space-y-4">
                                <div class="flex flex-col justify-center items-center text-center">
                                    <h3 class="text-xl font-semibold text-blue-600">BKSTORE - HÀNH TRÌNH ĐƯA TRI THỨC ĐẾN VỚI BẠN</h3>
                                    <p class="text-gray-600">Nhiều tri thức hơn, Nhiều thành công hơn</p>
                                </div>
                                <div class="ml-2 space-y-4">
                                    <p class="text-gray-700">BKSTORE là một thương hiệu trẻ trong lĩnh vực kinh doanh. Với nhiều dòng sách như sách thiếu nhi,
                                        sách giáo khoa, sách về khoa học, hay những cuốn sách quản trị kinh doanh, pháp triển kỹ năng,
                                        tài chính,... là những dòng sách trải rộng mọi lứa tuổi, để đem đến tri thức phù hợp với chất lượng
                                        tốt nhất đến tay bạn đọc
                                    </p>
                                    <p class="text-gray-700">
                                    Ngoài ra, BKSTORE cũng là một nơi dành cho những người yêu sách, nơi bạn có thể khám phá và 
                                    mua sắm những cuốn sách đa dạng thuộc nhiều thể loại khác nhau. 
                                    Giao lưu cũng với những người bạn cùng sở thích hay tìm kiếm những cuốn sách yêu thích nổi tiếng,...
                                    </p>

                                    <p class="text-gray-700">
                                        Xuyến suốt hành trình từ lúc thành lập đến nay BKSTORE đã đặt được nhiều thành tựu tốt đẹp, đưa nhưng cuốn sách
                                        đến tay những bạn đọc vùng sâu vùng xa.
                                    </p>
                                    <img src="/public/image/nhungthanhtuu.jpg" alt="thanhtuu">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/5 hidden lg:block ">
                        <h2 class="text-2xl font-semibold text-gray-800 mb-4">Tin tức mới nhất</h2>
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