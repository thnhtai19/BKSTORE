<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title>Đăng nhập | BKSTORE</title> 
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header id="header-content" class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/header2.php'; ?>
        </header>

        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen pt-20 pb-20 px-1 lg:px-0 flex justify-center items-center">
                <div class="w-full max-w-md p-8 bg-white shadow-lg rounded-lg">
                    <h2 class="text-3xl font-bold text-center mb-4 text-blue-600">Quên mật khẩu</h2>
                    <p class="text-center text-gray-600 mt-3 mb-6">Vui lòng nhập địa chỉ email. Bạn sẽ nhận được một liên kết tạo mật khẩu mới qua email.</p> 
                    <form action="#" method="POST">
                        <div>
                            <label for="email" class="font-bold block text-sm text-gray-900 my-2">Địa chỉ Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" required
                            class="appearance-none block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                            placeholder="Email address">
                        </div>

                        <div>
                            <button type="submit" class="w-full flex justify-center py-2 px-4 mt-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Đặt lại mật khẩu
                            </button>
                        </div>
                    </form>
                    <div class="text-sm mt-3">
                        <a href="/app/views/auth/login.php" class="font-medium text-indigo-600 hover:text-indigo-500"> Về trang đăng nhập </a>
                    </div>
                </div>
            </main>
        </div>

        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>