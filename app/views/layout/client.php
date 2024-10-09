<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/public/image/logo.png" type="image/x-icon">
    <link href="/public/css/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/public/css/client.css">
    <title><?php echo $title; ?></title>
</head>
<body class="bg-gray-100">
    <div class="h-screen">
        <header class="sticky top-0 z-50">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/app/views/client/partials/header.php'; ?>
        </header>
        <div class="overflow-y-auto">
            <main class="container max-w-screen-1200 mx-auto min-h-screen">
                <?php echo $content; ?>
            </main>
            <?php if($isfooter) include $_SERVER['DOCUMENT_ROOT'].'/app/views/client/partials/footer.php'; ?>
        </div>
    </div>
</body>
</html>