<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Đăng kí | BKSTORE</title> 
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header2.php'; ?>
        </header>

        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen pt-20 pb-20 px-1 lg:px-0 flex justify-center items-center">
                <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-lg">
                    <h2 class="text-3xl font-bold text-center mb-4 text-blue-600">Đăng ký</h2>
                    <form action="#" method="POST">
                        <div class="mb-4">
                            <label for="name" class="block text-gray-700 font-semibold mb-2">Họ và Tên
                                <span>*</span>
                            </label>
                            <input id="name" name="name" type="text" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                placeholder="Nhập họ và tên">
                        </div>

                        <div class="mb-4">
                            <label for="address" class="block text-gray-700 font-semibold mb-2">Địa chỉ
                                <span>*</span>
                            </label>
                            <input id="address" name="address" type="text" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                placeholder="Nhập họ và tên">
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block text-gray-700 font-semibold mb-2">Số điện thoại
                            </label>
                            <input id="phone" name="phone-number" type="tel"  
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" 
                                placeholder="Nhập số điện thoại: 027-123-4567">
                        </div>
                
                        <div class="mb-4">
                            <label for="email" class="block text-gray-700 font-semibold mb-2">Email
                                <span>*</span>
                            </label>
                            <input id="email" name="email" type="email" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                placeholder="Nhập email">
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-gray-700 font-semibold mb-2">Mật khẩu
                                <span>*</span>
                            </label>
                            <input id="password" name="password" type="password" required
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                                placeholder="Nhập mật khẩu">
                        </div>

                        <div class="mb-4">
                            <label for="auth-password" class="block text-gray-700 font-semibold mb-2">Xác nhận mật khẩu
                                <span>*</span>
                            </label>
                            <input id="auth-password" name="auth-password" type="password" required 
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                            placeholder="Nhập lại mật khẩu">
                        </div>
                
                        <div class="mb-6">
                            <label class="block text-gray-700 font-semibold mb-1">Giới tính</label>
                            <div class="flex space-x-4">
                                <label class="flex items-center">
                                <input type="radio" name="gender" value="male" class="form-radio text-blue-500" required>
                                <span class="ml-2 text-gray-700">Nam</span>
                                </label>
                                <label class="flex items-center">
                                <input type="radio" name="gender" value="female" class="form-radio text-blue-500" required>
                                <span class="ml-2 text-gray-700">Nữ</span>
                                </label>
                                <label class="flex items-center">
                                <input type="radio" name="gender" value="other" class="form-radio text-blue-500" required>
                                <span class="ml-2 text-gray-700">Tùy chỉnh</span>
                                </label>
                            </div>
                        </div>
            
                        <div class="flex items-center justify-between mb-4">
                            <div class="flex items-center">
                            <input type="checkbox" id="terms" class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                            <label for="terms" class="ml-2 text-gray-700 text-sm">Tôi đồng ý với các <a href="#" class="text-blue-500">điều khoản</a></label>
                            </div>
                        </div>

                        <button type="submit" class="w-full bg-green-500 text-white py-2 rounded-lg font-bold hover:bg-green-600 transition duration-300">Đăng ký</button>
                    </form>
            
                    <p class="text-center text-gray-600 mt-6">Bạn đã có tài khoản? <a href="/app/views/auth/login.php" class="text-blue-500 font-bold">Đăng nhập</a></p>
                </div>
            </main>
        </div>

        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>