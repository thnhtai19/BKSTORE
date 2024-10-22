<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Tài khoản | BKSTORE</title>
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto pt-16 pb-20 px-1 lg:px-0">
                <div class="flex gap-4 pt-6">
                    <div class="w-1/4 bg-white hidden lg:block flex flex-col text-gray-800 p-4 shadow-md">
                        <nav>
                            <ul>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Trang chủ
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 bg-blue-300 text-white rounded shadow-lg">
                                        Tài khoản của bạn
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Thay đổi mật khẩu
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-gray-300 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Hồ sơ
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 text-gray-800 rounded hover:bg-red-500 hover:shadow-lg hover:-translate-y-1 transform transition-all duration-200">
                                        Thoát tài khoản
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="w-full lg:w-3/4 rounded-lg space-y-2">
                        <div class="flex flex-col md:flex-row gap-2">
                            <div class="flex-1 bg-white p-10 shadow-md rounded-lg">
                                <h2 class="text-3xl font-bold mb-6">Thông tin tài khoản</h2>
                                
                                <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                                    <div class="flex-1">
                                        <label for="full-name" class="block text-gray-700 font-semibold mb-2">Họ và Tên</label>
                                        <input type="text" id="full-name" 
                                        class="block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                        value="Khương Gia Túc">
                                    </div>
                                    <div class="flex-1">
                                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                                        <input type="email" id="email" 
                                        class="block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm bg-gray-100 cursor-not-allowed" 
                                        value="example@example.com" readonly>
                                    </div>
                                </div>

                                <div class="flex flex-col md:flex-row md:space-x-4 mb-4">
                                    <div class="flex-1">
                                        <label for="username" class="block text-gray-700 font-semibold mb-2">Tên tài khoản</label>
                                        <input type="text" id="username" 
                                        class="block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                        value="Gia Túc">
                                    </div>
                                    <div class="flex-1">
                                        <label for="phone" class="block text-gray-700 font-semibold mb-2">Số điện thoại</label>
                                        <input type="tel" id="phone" 
                                        class="block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                        pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" 
                                        value="027-123-4567">
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="address" class="block text-gray-700 font-semibold mb-2">Địa chỉ</label>
                                    <input type="text" id="address" 
                                    class="block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                    value="123 Hồ Chí Minh">
                                </div>

                                <div class="mb-6">
                                    <label class="block text-gray-700 font-semibold mb-1">Giới tính</label>
                                    <div class="flex space-x-4">
                                        <label class="flex items-center">
                                        <input type="radio" name="gender" value="male" class="form-radio text-blue-500" checked>
                                        <span class="ml-2 text-gray-700">Nam</span>
                                        </label>
                                        <label class="flex items-center">
                                        <input type="radio" name="gender" value="female" class="form-radio text-blue-500">
                                        <span class="ml-2 text-gray-700">Nữ</span>
                                        </label>
                                        <label class="flex items-center">
                                        <input type="radio" name="gender" value="other" class="form-radio text-blue-500">
                                        <span class="ml-2 text-gray-700">Tùy chỉnh</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <label for="level" class="block text-gray-700 font-semibold mb-2">Cấp độ</label>
                                    <input type="text" id="level" 
                                    class="block w-full px-3 py-2 border border-gray-300 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm bg-gray-100 bg-gray-100 cursor-not-allowed" 
                                    value="Thành viên" readonly>
                                </div>

                                <div class="text-right">
                                    <button class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Lưu thay đổi
                                    </button>
                                </div>
                            </div>

                            <div class="flex-1 bg-white p-10 shadow-md rounded-lg">
                                <h2 class="text-3xl font-bold mb-6">Đổi mật khẩu</h2>

                                <div class="mb-4">
                                    <label for="old-password" class="block text-gray-700 font-semibold mb-2">Mật khẩu cũ</label>
                                    <input type="password" id="old-password" 
                                    class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                    placeholder="nhập mật khẩu cũ">
                                </div>

                                <div class="mb-4">
                                    <label for="new-password" class="block text-gray-700 font-semibold mb-2">Mật khẩu cũ</label>
                                    <input type="password" id="new-password" 
                                    class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                    placeholder="nhập mật khẩu mới">
                                </div>

                                <div class="mb-4">
                                    <label for="auth-password" class="block text-gray-700 font-semibold mb-2">Mật khẩu cũ</label>
                                    <input type="password" id="auth-password" 
                                    class="block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" 
                                    placeholder="xác nhận mật khẩu">
                                </div>

                                <div class="text-right">
                                    <button class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Thay đổi
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="flex-1 bg-white p-10 shadow-md rounded-lg">
                            <h1 class="text-3xl font-bold mb-4">Nhật ký hoạt động</h1>

                            <table class="table-auto w-full mb-6">
                                <thead>
                                    <tr class="bg-gray-200 text-left">
                                        <th class="px-4 py-2 border-r-2 border-black">ID</th>
                                        <th class="px-4 py-2 border-r-2 border-black">Thời gian</th>
                                        <th class="px-4 py-2">Nội dung</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>