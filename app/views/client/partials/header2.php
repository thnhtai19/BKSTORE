<div class="fixed w-full bg-custom-background border-b text-black p-4 top-0 z-50">
    <div class="container max-w-screen-1200 mx-auto flex items-center justify-between">
        <div class="flex items-center justify-between gap-2 text-2xl font-bold text-white cursor-pointer" onclick="window.location.href='/'">
            <img src="/public/image/logo.png" alt="logo web" class="w-8 h-8" id="logo">
            <div class="hidden md:block">BKSTORE</div>
        </div>
        <div class="flex items-center mx-4 ml-6 flex-1 justify-center">
            <input 
                type="text" 
                placeholder="Tìm kiếm sản phẩm..." 
                class="border rounded-l-md p-2 h-10 w-full lg:w-4/6 focus:outline-none" 
            >
            <button class="bg-blue-800 text-white rounded-r-md p-2 hover:bg-blue-600 h-10">
                <img src="/public/image/search.png" alt="Search" class="w-5 h-5">
            </button>
        </div>
        <div id="avatar-container" class="flex items-center gap-1">
            <a href="/app/views/auth/login.php" class="block md:hidden text-white hover:text-black transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="11" />
                <circle cx="12" cy="7" r="4" />
                <path d="M5 20c0-7 15-7 15 0" />
                </svg>
            </a>

            <a href="/app/views/auth/login.php" class="text-white border border-white rounded-md px-4 py-2 hover:bg-white hover:text-black transition duration-300 font-bold hidden md:block"><span>ĐĂNG NHẬP</span></a>
        </div>
    </div> 
</div>