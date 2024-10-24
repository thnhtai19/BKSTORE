<?php
function renderStars($sao)
{
    $maxStars = 5;
    $output = '';
    for ($i = 1; $i <= $maxStars; $i++) {
        if ($i <= $sao) {
            $output .= '<span class="text-yellow-500">★</span>';
        } else {
            $output .= '<span class="text-gray-300">☆</span>';
        }
    }
    return $output;
}
?>


<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Chi tiết sản phẩm | BKSTORE</title>
</head>

<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen pt-16 pb-20 lg:pb-10 px-1 lg:px-0">
                <div class="pt-6 pb-2 w-full gap-2 items-center hidden lg:flex">
                    <div class="text-lg text-black font-bold">
                        Dế Mèn Phiêu Lưu Ký - Tái Bản 2020
                    </div>
                    <div class="flex text-base items-center">
                        <?php echo renderStars(sao: 4); ?>
                    </div>
                    <div class="text-sm">
                        195 đánh giá
                    </div>
                </div>
                <hr>
                <div class="block gap-3 w-full pt-4 lg:flex">
                    <div class="w-full h-110 lg:w-2/5">
                        <div
                            class="swiper-container-product-detail h-full bg-white p-2 overflow-hidden relative rounded-t-lg lg:rounded-lg">
                            <div class="swiper-wrapper h-full">
                                <div
                                    class="swiper-slide-product-detail h-full bg-white flex items-center justify-center rounded-lg overflow-hidden">
                                    <img class="h-full object-contain" src="/public/image/book1.webp" alt="1">
                                </div>
                                <div
                                    class="swiper-slide-product-detail h-full bg-white flex items-center justify-center rounded-lg overflow-hidden">
                                    <img class="h-full object-contain" src="/public/image/book1.webp" alt="2">
                                </div>
                                <div
                                    class="swiper-slide-product-detail h-full bg-white flex items-center justify-center rounded-lg overflow-hidden">
                                    <img class="h-full object-contain" src="/public/image/book1.webp" alt="3">
                                </div>
                            </div>
                            <div
                                class="swiper-button-pr-prev absolute top-1/2 left-2 transform -translate-y-1/2 bg-gray-600 text-white p-2 rounded-full hover:bg-gray-700 z-10">
                                &#10094;
                            </div>
                            <div
                                class="swiper-button-pr-next absolute top-1/2 right-2 transform -translate-y-1/2 bg-gray-600 text-white p-2 rounded-full hover:bg-gray-700 z-10">
                                &#10095;
                            </div>
                        </div>
                    </div>
                    <div class="flex-1 h-110">
                        <div
                            class="w-full h-full bg-white p-3 pr-4 pl-4 flex flex-col justify-between rounded-b-lg lg:rounded-lg">
                            <div class="pt-6 pb-2 w-full gap-2 items-center block lg:hidden">
                                <div class="text-lg text-black font-bold">
                                    Dế Mèn Phiêu Lưu Ký - Tái Bản 2020
                                </div>
                                <div class="flex text-base items-center">
                                    <?php echo renderStars(sao: 4); ?>
                                </div>
                                <div class="text-sm">
                                    195 đánh giá
                                </div>
                                <div class="flex gap-2 items-center pt-4 pb-4">
                                    <div class="font-bold text-2xl text-custom-blue items-center">
                                        42.500đ
                                    </div>
                                    <div class="text-gray-600 items-center">
                                        <del>
                                            50.000đ
                                        </del>
                                    </div>
                                    <div class="bg-custom-background text-white text-sm font-bold p-1 rounded-lg">
                                        -15%
                                    </div>
                                </div>
                            </div>
                            <div class="hidden lg:block">
                                <div class="text-base text-black font-bold">
                                    Thông tin chi tiết
                                </div>
                                <div class="pt-2 flex gap-5">
                                    <div class="text-sm w-1/2">
                                        <div class="flex gap-1">
                                            <div>Thể loại:</div>
                                            <div class="font-bold">Văn học</div>
                                        </div>
                                        <div class="flex gap-1 pt-2">
                                            <div>Nhà xuất bản:</div>
                                            <div class="font-bold">NXB Kim Đồng</div>
                                        </div>
                                        <div class="flex gap-1 pt-2">
                                            <div>Năm xuất bản:</div>
                                            <div class="font-bold">2020</div>
                                        </div>
                                        <div class="flex gap-1 pt-2">
                                            <div>Kích thước:</div>
                                            <div class="font-bold">19 x 13 cm</div>
                                        </div>
                                    </div>
                                    <div class="text-sm flex-1">
                                        <div class="flex gap-2">
                                            <div>Tác giả:</div>
                                            <div class="font-bold">Tô Hoài</div>
                                        </div>
                                        <div class="flex gap-1 pt-2">
                                            <div>Hình thức:</div>
                                            <div class="font-bold">Bìa mềm</div>
                                        </div>
                                        <div class="flex gap-1 pt-2">
                                            <div>Ngôn ngữ:</div>
                                            <div class="font-bold">Tiếng việt</div>
                                        </div>
                                        <div class="flex gap-1 pt-2">
                                            <div>Số trang:</div>
                                            <div class="font-bold">200</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-1 pt-1 items-center text-sm">
                                    <div class="flex text-lg items-center">
                                        <?php echo renderStars(sao: 4); ?>
                                    </div>
                                    <div class="flex gap-2">
                                        <div>
                                            195 đánh giá
                                        </div>
                                        <div>|</div>
                                        <div>Đã bán 500</div>
                                    </div>
                                </div>
                                <div class="flex gap-2 items-center pt-4">
                                    <div class="font-bold text-2xl text-custom-blue items-center">
                                        42.500đ
                                    </div>
                                    <div class="text-gray-600 items-center">
                                        <del>
                                            50.000đ
                                        </del>
                                    </div>
                                    <div class="bg-custom-background text-white text-sm font-bold p-1 rounded-lg">
                                        -15%
                                    </div>
                                </div>
                                <div class="text-base text-black font-bold pt-6">
                                    Chương trình ưu đãi
                                </div>
                            </div>
                            <div>
                                <div class="pb-6 gap-2 items-center hidden lg:flex">
                                    <div class="text-base items-center text-gray-600">
                                        Số lượng:
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <button
                                            class="bg-custom-background rounded-lg w-6 h-6 flex items-center justify-center text-white font-bold transition-transform duration-200 ease-in-out transform hover:scale-105 active:scale-95"
                                            id="decreaseBtn">
                                            -
                                        </button>
                                        <input type="number" id="quantity" value="1" min="1"
                                            class="text-center w-16 border border-gray-300 rounded-lg" readonly>
                                        <button
                                            class="bg-custom-background rounded-lg w-6 h-6 flex items-center justify-center text-white font-bold transition-transform duration-200 ease-in-out transform hover:scale-105 active:scale-95"
                                            id="increaseBtn">
                                            +
                                        </button>
                                    </div>
                                </div>
                                <div class="flex gap-2 h-14 items-center">
                                    <div
                                        class="bg-custom-background rounded-lg h-full flex flex-col justify-center w-2/3 items-center font-bold text-white cursor-pointer active:shadow-lg">
                                        Mua ngay
                                    </div>
                                    <div
                                        class="flex-1 border-2 border-custom-blue text-custom-blue h-full flex flex-col lg:flex-row justify-center items-center rounded-lg font-bold lg:gap-2 cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" class="text-custom-blue">
                                            <path d="M6 2H2v2h2l3.6 7.59L7.2 20H20v-2H8.4l1.6-3.2h8.8l1.2-6H6z"></path>
                                            <circle cx="8" cy="20" r="2"></circle>
                                            <circle cx="16" cy="20" r="2"></circle>
                                        </svg>
                                        <div>
                                            Thêm vào giỏ
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4">
                    <hr>
                </div>
                <div class="pt-4">
                    <div class="w-full rounded-lg shadow-lg bg-white p-6">
                        <div class="text-base text-black font-bold">
                            Mô tả sản phẩm
                        </div>
                        <div class="pt-4">
                            <p class="pb-2"><strong>Dế Mèn Phiêu Lưu Ký - Tái Bản 2020</strong></p>
                            <p class="text-justify text-gray-700">
                                Ấn bản minh họa màu đặc biệt của Dế Mèn phiêu lưu ký, với phần tranh ruột được in hai
                                màu xanh - đen ấn tượng, gợi không khí đồng thoại.
                                “Một con dế đã từ tay ông thả ra chu du thế giới tìm những điều tốt đẹp cho loài người.
                                Và con dế ấy đã mang tên tuổi ông đi cùng trên những chặng đường phiêu lưu đến với cộng
                                đồng những con vật trong văn học thế giới, đến với những xứ sở thiên nhiên và văn hóa
                                của các quốc gia khác. Dế Mèn Tô Hoài đã lại sinh ra Tô Hoài Dế Mèn, một nhà văn trẻ mãi
                                không già trong văn chương...” - Nhà phê bình Phạm Xuân Nguyên
                                “Ông rất hiểu tư duy trẻ thơ, kể với chúng theo cách nghĩ của chúng, lí giải sự vật theo
                                lô gích của trẻ. Hơn thế, với biệt tài miêu tả loài vật, Tô Hoài dựng lên một thế giới
                                gần gũi với trẻ thơ. Khi cần, ông biết đem vào chất du ký khiến cho độc giả nhỏ tuổi vừa
                                hồi hộp theo dõi, vừa thích thú khám phá.” - TS Nguyễn Đăng Điệp
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-3">
                    <div class="w-full bg-blue-300 mt-4 rounded-lg p-4">
                        <div class="text-xl font-bold text-gray-700 mb-4">
                            GỢI Ý SẢN PHẨM
                        </div>
                        <div class="swiper-container-product overflow-hidden">
                            <div class="swiper-wrapper">
                                <?php for ($i = 0; $i < 10; $i++) { $heart = true ?>
                                    <div class="swiper-slide-product overflow-hidden">
                                        <div class="bg-white p-2 rounded-lg shadow-lg w-full">
                                            <div class="h-44 flex justify-center">
                                                <img src="/public/image/book1.webp" alt="Product Image"
                                                    class="object-cover h-full rounded-md">
                                            </div>
                                            <div class="pt-4 pb-4 text-sm">
                                                <div class="font-semibold mt-2 h-16 text-black-700">Dế Mèn Phiêu Lưu Ký -
                                                    Tái
                                                    Bản
                                                    2020</div>
                                                <p class="text-custom-blue font-bold text-base">42.500đ</p>
                                            </div>
                                            <div class="flex justify-between items-center">
                                                <div class="flex items-center">
                                                    <?php echo renderStars(sao: 4); ?>
                                                </div>
                                                <button class="heart-button focus:outline-none">
                                                    <svg class="heart-icon w-6 h-6 text-red-500 transition duration-300 ease-in-out"
                                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 21c-4.35-3.2-8-5.7-8-9.5 0-2.5 2-4.5 4.5-4.5 1.74 0 3.41 1 4.5 2.54 1.09-1.54 2.76-2.54 4.5-2.54 2.5 0 4.5 2 4.5 4.5 0 3.8-3.65 6.3-8 9.5z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pt-4 gap-3 flex flex-col lg:flex-row">
                    <div class="w-ful lg:w-4/6 flex flex-col gap-4">
                        <div class="w-full rounded-lg shadow-lg bg-white p-6">
                            <div class="text-base text-black font-bold">
                                Đánh giá sản phẩm
                            </div>
                            <div class="flex flex-col gap-2 pt-2" id="reviewsContainer">
                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                    <div class="review-item pt-2 pb-2 <?php echo $i >= 5 ? 'hidden' : ''; ?>">
                                        <div class="flex gap-2 text-gray-700">
                                            <img src="https://ui-avatars.com/api/?background=random&name=Thanh+Tai"
                                                alt="avt" class="w-10 h-10 rounded-full cursor-pointer ml-3">
                                            <div>
                                                <div class="flex gap-2 items-center">
                                                    <div class="text-base font-bold">Trần Thành Tài</div>
                                                    <div class="text-xs">10/10/2024 00:38</div>
                                                </div>
                                                <div class="flex items-center">
                                                    <?php echo renderStars(sao: 4); ?>
                                                </div>
                                                <div class="text-sm pt-1 pb-1 text-justify">
                                                    Sau khi mua và đọc qua, mình thấy sách có chất lượng in tốt, giấy dày và
                                                    bìa cứng cáp. Nội dung rất cuốn hút, mang lại nhiều giá trị và kiến thức
                                                    bổ ích. Đây là một cuốn sách đáng để sở hữu, cả về hình thức lẫn nội
                                                    dung.
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                <?php } ?>
                                <div class="flex justify-between pt-2">
                                    <button id="loadMoreBtn"
                                        class="rounded-lg shadow-lg w-1/3 border p-1 flex items-center justify-center mx-auto hover:bg-gray-100 transition duration-300">
                                        Xem thêm
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full rounded-lg shadow-lg bg-white p-6">
                            <div class="text-base text-black font-bold">
                                Nhận xét và Bình luận
                            </div>
                            <div class="pt-4">
                                <div class="flex gap-2">
                                    <img src="https://ui-avatars.com/api/?background=random&name=Thanh+Tai" alt="avt"
                                        class="w-10 h-10 rounded-full cursor-pointer ml-3">
                                    <textarea class="rounded-lg h-20 bg-white w-full p-2 border resize-none text-sm"
                                        placeholder="Xin mời để lại nhận xét và bình luận."></textarea>
                                    <button
                                        class="flex items-center justify-center rounded-lg border border-gray-300 p-2 text-sm h-10 hover:bg-gray-100 transition duration-300">
                                        <img src="/public/image/send.png" alt="send" class="h-6 w-6">
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col gap-2 pt-2">
                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                    <div class="comment-item pt-2 pb-2 <?php echo $i >= 5 ? 'hidden' : ''; ?>">
                                        <div class="pt-2 pb-2">
                                            <div class="flex gap-2 text-gray-700">
                                                <img src="https://ui-avatars.com/api/?background=random&name=Thanh+Tai"
                                                    alt="avt" class="w-10 h-10 rounded-full cursor-pointer ml-3">
                                                <div>
                                                    <div class="flex gap-2 items-center">
                                                        <div class="text-base font-bold">Trần Thành Tài</div>
                                                        <div class="text-xs">10/10/2024 00:38</div>
                                                    </div>
                                                    <div class="text-sm pt-1 text-justify">
                                                        Sau khi mua và đọc qua, mình thấy sách có chất lượng in tốt, giấy dày và
                                                        bìa cứng cáp. Nội dung rất cuốn hút, mang lại nhiều giá trị và kiến thức
                                                        bổ ích. Đây là một cuốn sách đáng để sở hữu, cả về hình thức lẫn nội
                                                        dung.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                <?php } ?>
                                <div class="flex justify-between pt-2">
                                    <button id="loadMoreBtn2"
                                        class="rounded-lg shadow-lg w-1/3 border p-1 flex items-center justify-center mx-auto hover:bg-gray-100 transition duration-300">
                                        Xem thêm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div class="w-full rounded-lg shadow-lg bg-white p-6">
                            <div class="text-base text-black font-bold">
                                Tin tức về sản phẩm
                            </div>
                            <div class="flex flex-col pt-4 pb-2 gap-4">
                                <?php for ($i = 0; $i < 1; $i++) { ?>
                                    <div class="flex gap-4">
                                        <img src="/public/image/tin1.jpg" alt="'tin1" class="rounded-lg w-32">
                                        <a href="#" class="text-sm text-gray-700 hover:underline">
                                            iphone 13 có còn đáng mua trong năm 2024? Đánh giá và trải nghiệm sau 5 năm sử
                                            dụng.
                                        </a>
                                    </div>
                                    <div class="flex gap-4">
                                        <img src="/public/image/tin2.jpg" alt="'tin1" class="rounded-lg w-32">
                                        <a href="#" class="text-sm text-gray-700 hover:underline">
                                            Top những điện thoại màn hình 6.1 inch đáng mua nhất hiện nay
                                        </a>
                                    </div>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php $page = 1;
        include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/product.js"></script>
    <script src="/public/js/heart.js"></script>
    <script src="/public/js/numbox.js"></script>
    <script src="/public/js/swiper-bundle.min.js"></script>
    <script src="/public/js/client.js"></script>
</body>

</html>