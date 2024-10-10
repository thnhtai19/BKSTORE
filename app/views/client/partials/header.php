<div class="bg-custom-background border-b text-black p-4 sticky top-0 z-50">
    <div class="container max-w-screen-1200 mx-auto flex items-center justify-between">
        <div class="flex items-center justify-between gap-2 text-2xl font-bold text-white">
            <img src="/public/image/logo.png" alt="logo web" class="w-8 h-8 cursor-pointer" id="logo">
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
            <div class="relative ml-4 cursor-pointer pr-1 hidden md:block">
                <img src="/public/image/bell.png" alt="Bell" class="w-8 h-8">
                <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">3</span>
            </div>
            <div class="relative ml-4 cursor-pointer pr-1">
                <img src="/public/image/cart.png" alt="Shopping Cart" class="w-8 h-8">
                <span class="absolute top-0 right-0 bg-red-500 text-white text-xs font-bold rounded-full h-5 w-5 flex items-center justify-center">3</span>
            </div>
            <img src="https://ui-avatars.com/api/?background=random&name=Thanh+Tai" alt="User Avatar" class="w-8 h-8 rounded-full cursor-pointer ml-3" id="avatar">
        </div>
    </div>
</div>