<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/admin.css"> 
    <title>Admin home page</title>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen">
        <?php include './partials/sidebar.php';?>
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>
        <div class="flex flex-col flex-1">
            <?php include './partials/header.php';?>
            <div class="overflow-y-auto">
                <main class="min-h-screen flex-1 p-3 md:p-3 lg:p-3">
                    <h2 class="text-xl font-semibold">Main Content</h2>
                    <p>This is the main content area.</p>
                </main>
                <?php include './partials/footer.php';?>
            </div>
        </div>
    </div>
    <script src="/public/js/sidebar.js"></script>
</body>
</html>