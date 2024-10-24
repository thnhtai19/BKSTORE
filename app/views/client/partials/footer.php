<footer
    class="flex items-center justify-between bg-white border-t font-medium text-gray-500 text-center p-4 w-full fixed bottom-0 block md:hidden rounded-t-xl shadow-lg text-xs">
    <div class="flex flex-col gap-1 items-center justify-center cursor-pointer footer-item <?php echo ($page == 1) ? 'text-custom-blue' : ''; ?>" onclick="goHome()">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
            stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M3 9.75L12 3l9 6.75v9.75A1.5 1.5 0 0119.5 21h-15A1.5 1.5 0 013 19.5V9.75z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9" />
        </svg>
        <div>Trang chủ</div>
    </div>
    <div class="flex flex-col gap-1 items-center justify-center cursor-pointer footer-item <?php echo ($page == 2) ? 'text-custom-blue' : ''; ?>" onclick="goNotice()">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M21 18a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2c0-1.38 1-2.5 2-2.5V11a7 7 0 1 1 14 0v4.5c1 0 2 1.12 2 2.5z"/>
            <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
        </svg>
        <div>Thông báo</div>
    </div>
    <div class="flex flex-col gap-1 items-center justify-center cursor-pointer footer-item <?php echo ($page == 3) ? 'text-custom-blue' : ''; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="11" />
            <circle cx="12" cy="7" r="4" />
            <path d="M5 20c0-7 15-7 15 0" />
        </svg>
        <div>Tôi</div>
    </div>
    <div class="flex flex-col gap-1 items-center justify-center cursor-pointer footer-item <?php echo ($page == 4) ? 'text-custom-blue' : ''; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 6h15l-1.5 7.5H7.5L6 6z" />
            <path d="M6 6l-1 4H3m0 0h3m1 0h11" />
            <path d="M16 16a2 2 0 1 0 2 2 2 2 0 0 0-2-2zM6 16a2 2 0 1 0 2 2 2 2 0 0 0-2-2z" />
            <path d="M17 3v2l-2 2h-4l-1 1H6" />
            <path d="M14 3h-1v1h1V3z" />
        </svg>
        <div>Khuyến mãi</div>
    </div>
    <div class="flex flex-col gap-1 items-center justify-center cursor-pointer footer-item <?php echo ($page == 5) ? 'text-custom-blue' : ''; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor"
            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" />
            <line x1="3" y1="9" x2="21" y2="9" />
            <line x1="3" y1="15" x2="21" y2="15" />
            <line x1="7" y1="3" x2="7" y2="21" />
            <line x1="3" y1="17" x2="7" y2="17" />
        </svg>
        <div>Tin tức</div>
    </div>
</footer>
<footer class="bg-white border-t text-white p-12 hidden md:block">
    <div class="container max-w-screen-1200 mx-auto flex">
        <div class="w-1/3 pr-8">
            <div class="flex items-center gap-2 text-3xl font-bold text-custom-blue cursor-pointer pb-4"
                onclick="window.location.href='/'">
                <img src="/public/image/logo.png" alt="logo web" class="w-8 h-8" id="logo">
                <div>BKSTORE</div>
            </div>
            <div class="text-black text-xs pb-2">
                <p>Trường Đại học Bách khoa - Đại học Quốc gia TP.HCM</p>
                <p>Công Ty Cổ Phần Phát Hành Sách TP HCM - BKSTORE</p>
                <p>Khu phố Tân Lập, Phường Đông Hòa, TP. Dĩ An, Tỉnh Bình Dương</p>
            </div>
            <div class="text-black text-xs pb-3">
                BKSTORE nhận đặt hàng trực tuyến và giao hàng tận nơi. Không hỗ trợ đặt mua và nhận hàng trực tiếp tại
                văn phòng cũng như tất cả Hệ Thống BKSTORE trên toàn quốc.
            </div>
            <div class="text-gray-800 pb-2">Kết nối với chúng tôi</div>
            <div class="flex items-center gap-3">
                <img src="/public/image/facebook.png" alt="social logo" class="w-8 h-8" >
                <img src="/public/image/instagram.png" alt="social logo" class="w-8 h-8">
                <img src="/public/image/youtube.png" alt="social logo" class="w-8 h-8" >
                <img src="/public/image/telegram.png" alt="social logo" class="w-8 h-8">
            </div>
        </div>
        <div>
            <div class="flex">
                <div class="pr-16 pl-10">
                    <div class="text-gray-700 pb-2 font-bold">Thông tin và chính sách</div>
                    <div class="text-xs text-black flex flex-col gap-1">
                        <a href="">Mua hàng và thanh toán Online</a>
                        <a href="">Chính sách giao hàng</a>
                        <a href="">Tra thông tin bảo hành</a>
                        <a href="">Tra cứu hoá đơn điện tử</a>
                        <a href="">Thông tin hoá đơn mua hàng</a>
                        <a href="">Thông tin ưu đãi</a>
                    </div>
                </div>
                <div class="pr-16">
                    <div class="text-gray-700 pb-2 font-bold">Dịch vụ và thông tin khác</div>
                    <div class="text-xs text-black flex flex-col gap-1">
                        <a href="">Điều khoản sử dụng</a>
                        <a href="">Chính sách bảo mật thông tin cá nhân</a>
                        <a href="">Ưu đãi thanh toán</a>
                        <a href="">Giới thiệu BKSTORE</a>
                    </div>
                </div>
                <div>
                    <div class="text-gray-700 pb-2 font-bold">Tổng đài hỗ trợ miễn phí</div>
                    <div class="text-xs text-black flex flex-col gap-1">
                        <span>Gọi mua hàng <b>1800.0008</b> (7h30-23h00)</span>
                        <span>Gọi khiếu nại <b>1800.0007</b> (8h30-23h00)</span>
                        <span>Gọi bảo hành <b>1800.0006</b> (7h30-23h00)</span>
                    </div>
                </div>
            </div>
            <div class="text-black pl-10">
                <div class="pt-5">
                    Đối tác kết hợp
                </div>
                <div class="pt-2 flex flex-wrap gap-10">
                    <img src="/public/image/vnpost1.png" alt="shipping logo" class="h-8">
                    <img src="/public/image/Logo_ninjavan.webp" alt="shipping logo" class="h-8">
                    <img src="/public/image/ahamove_logo3.webp" alt="shipping logo" class="h-8">
                    <img src="/public/image/icon_snappy1.webp" alt="shipping logo" class="h-8">
                    <img src="/public/image/payos.svg" alt="payment logo" class="h-8">
                </div>
            </div>
        </div>
    </div>
</footer>