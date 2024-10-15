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

        <div class="container max-w-screen-1200 min-h-screen bg-gray-100 flex justify-center items-center mx-auto pt-16 pb-16 px-1 lg:px-0">
            <div class="w-full max-w-xl p-8 bg-white shadow-md rounded-lg">
                <h2 class="text-3xl font-bold text-center mb-4 text-blue-600">Đăng nhập</h2>
                <form class="mt-8 space-y-6" action="#" method="POST">
                    <div class="rounded-md shadow-sm">
                        <div>
                            <label for="email" class="font-bold block text-sm text-gray-900 my-2">Địa chỉ Email
                                <span>*</span>
                            </label>
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Email address">
                        </div>
                        <div class="mt-3">
                            <label for="password" class="font-bold block text-sm text-gray-900 my-2">Mật khẩu
                            <span>*</span>
                            </label>
                            <input id="password" name="password" type="password" autocomplete="current-password" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm"
                                placeholder="Password">
                        </div>
                    </div>
                
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember_me" type="checkbox"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-gray-900"> Ghi nhớ mặt khẩu</label>
                        </div>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Đăng nhập
                        </button>

                        <a href="./register.php" 
                            class="my-2 w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                            Đăng ký
                        </a>

                        <div class="text-sm">
                            <a href="/app/views/auth/lost-password.php" class="font-medium text-indigo-600 hover:text-indigo-500"> Quên mặt khẩu? </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <?php $page = 1; include $_SERVER['DOCUMENT_ROOT'] . '/app/views/client/partials/footer.php'; ?>
    </div>
    <script src="/public/js/client.js"></script>
</body>
</html>