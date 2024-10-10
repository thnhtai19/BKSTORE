<footer class="flex items-center justify-between bg-white border-t font-medium text-gray-500 text-center p-4 w-full fixed bottom-0 block md:hidden rounded-t-xl shadow-lg text-xs">
    <div class="flex flex-col items-center justify-center cursor-pointer <?php echo $page == 1 ? 'text-blue-600' : 'text-gray-600'; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 9.75L12 3l9 6.75v9.75A1.5 1.5 0 0119.5 21h-15A1.5 1.5 0 013 19.5V9.75z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 21V12h6v9" />
        </svg>
        <div>Trang chủ</div>
    </div>
    <div class="flex flex-col items-center justify-center cursor-pointer <?php echo $page == 2 ? 'text-blue-600' : 'text-gray-600'; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 4h6v6H3zM3 14h6v6H3zM14 4h6v6h-6zM14 14h6v6h-6z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 9h6v6H9z" />
        </svg>
        <div>Danh mục</div>
    </div>
    <div class="flex flex-col items-center justify-center cursor-pointer <?php echo $page == 3 ? 'text-blue-600' : 'text-gray-600'; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="12" cy="12" r="11" />
            <circle cx="12" cy="7" r="4" />   
            <path d="M5 20c0-7 15-7 15 0" /> 
        </svg>
        <div>Tôi</div>
    </div>
    <div class="flex flex-col items-center justify-center cursor-pointer <?php echo $page == 4 ? 'text-blue-600' : 'text-gray-600'; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M6 6h15l-1.5 7.5H7.5L6 6z" />
            <path d="M6 6l-1 4H3m0 0h3m1 0h11" />
            <path d="M16 16a2 2 0 1 0 2 2 2 2 0 0 0-2-2zM6 16a2 2 0 1 0 2 2 2 2 0 0 0-2-2z" />
            <path d="M17 3v2l-2 2h-4l-1 1H6" />
            <path d="M14 3h-1v1h1V3z" />
        </svg>
        <div>Khuyến mãi</div>
    </div>
    <div class="flex flex-col items-center justify-center cursor-pointer <?php echo $page == 5 ? 'text-blue-600' : 'text-gray-600'; ?>">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="3" width="18" height="18" rx="2" /> 
            <line x1="3" y1="9" x2="21" y2="9" /> 
            <line x1="3" y1="15" x2="21" y2="15" />
            <line x1="7" y1="3" x2="7" y2="21" /> 
            <line x1="3" y1="17" x2="7" y2="17" />
        </svg>
        <div>Tin tức</div>
    </div>
</footer>
<footer class="bg-gray-600 text-white p-4">
    <div class="container max-w-screen-1200 mx-auto flex items-center justify-between hidden md:block">
        <p>&copy; 2024 BTL Lập trình web</p>
    </div>
</footer>