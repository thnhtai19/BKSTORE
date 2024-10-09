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
                <div class="flex gap-2 pt-1">
                    <div class="w-1/5 bg-blue-300 hidden lg:block">
                    </div>
                    <div class="w-full lg:w-3/5 bg-white px-1 lg:px-0">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide bg-white flex items-center justify-center text-white">
                                    <img src="/public/image/tess.webp" alt="1">
                                </div>
                                <div class="swiper-slide bg-white flex items-center justify-center text-white">
                                    <img src="/public/image/tess2.webp" alt="2">
                                </div>
                                <div class="swiper-slide bg-white flex items-center justify-center text-white">
                                    <img src="/public/image/tess3.webp" alt="3">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="w-1/5 bg-red-300 hidden lg:block">
                    </div>
                </div>
            </main>
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/views/client/partials/footer.php'; ?>
        </div>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/public/js/swiper.js"></script>
</body>
</html>
