<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Góp Ý - Book Store</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <!-- Header -->
    <header class="bg-blue-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold">Book Store</h1>
            <nav>
                <a href="index.html" class="mx-2 hover:underline">Trang Chủ</a>
                <a href="about.html" class="mx-2 hover:underline">Giới Thiệu</a>
                <a href="books.html" class="mx-2 hover:underline">Sách</a>
                <a href="contact.html" class="mx-2 hover:underline">Liên Hệ</a>
                <a href="feedback.html" class="mx-2 hover:underline">Góp Ý</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-cover bg-center h-64 flex items-center justify-center" style="background-image: url('https://example.com/feedback-background.jpg');">
        <h2 class="text-4xl text-white font-bold bg-black bg-opacity-50 p-4 rounded">Góp Ý</h2>
    </section>

    <!-- Feedback Form -->
    <section class="container mx-auto py-8">
        <h3 class="text-3xl font-semibold mb-6 text-center">Chúng Tôi Luôn Lắng Nghe Bạn</h3>
        <p class="text-lg text-center text-gray-700 mb-8">
            Nếu bạn có bất kỳ góp ý hoặc ý kiến nào, vui lòng chia sẻ với chúng tôi. Mỗi ý kiến của bạn đều rất quý giá và giúp chúng tôi cải thiện dịch vụ.
        </p>
        
        <form class="bg-white shadow-lg rounded-lg p-8 max-w-lg mx-auto">
            <!-- Họ và tên -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="name">Họ và Tên</label>
                <input type="text" id="name" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Nhập họ và tên của bạn">
            </div>
            
            <!-- Email -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                <input type="email" id="email" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Nhập email của bạn">
            </div>
            
            <!-- Số điện thoại -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="phone">Số Điện Thoại</label>
                <input type="tel" id="phone" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Nhập số điện thoại của bạn">
            </div>
            
            <!-- Nội dung góp ý -->
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="feedback">Nội Dung Góp Ý</label>
                <textarea id="feedback" rows="5" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500" placeholder="Nhập góp ý của bạn tại đây"></textarea>
            </div>
            
            <!-- Submit Button -->
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-3 rounded-lg hover:bg-blue-700 transition duration-300">Gửi Góp Ý</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2023 Book Store. Mọi quyền được bảo lưu.</p>
        </div>
    </footer>

</body>
</html>
