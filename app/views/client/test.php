<?php
// Dữ liệu nhật ký hoạt động giả lập
function getLogs() {
    return [
        ['id' => '001', 'time' => '2024-10-10 19:00:00', 'content' => 'Đăng nhập tài khoản IP 15.20.30.25'],
        ['id' => '002', 'time' => '2024-10-11 09:15:00', 'content' => 'Đăng xuất tài khoản IP 15.20.30.25'],
        ['id' => '003', 'time' => '2024-10-12 14:30:00', 'content' => 'Đổi mật khẩu tài khoản IP 15.20.30.25'],
        ['id' => '004', 'time' => '2024-10-12 15:45:00', 'content' => 'Đăng nhập tài khoản IP 10.15.20.30'],
        ['id' => '005', 'time' => '2024-10-13 08:00:00', 'content' => 'Thay đổi thông tin tài khoản IP 12.25.35.45'],
        ['id' => '006', 'time' => '2024-10-13 11:10:00', 'content' => 'Đăng nhập tài khoản IP 14.30.40.50'],
        ['id' => '007', 'time' => '2024-10-14 16:20:00', 'content' => 'Đăng xuất tài khoản IP 14.30.40.50'],
        ['id' => '008', 'time' => '2024-10-15 13:55:00', 'content' => 'Đăng nhập tài khoản IP 17.40.50.60'],
        ['id' => '009', 'time' => '2024-10-15 18:05:00', 'content' => 'Đổi mật khẩu tài khoản IP 17.40.50.60'],
        ['id' => '010', 'time' => '2024-10-16 09:30:00', 'content' => 'Đăng nhập tài khoản IP 19.50.60.70'],
        ['id' => '011', 'time' => '2024-10-16 19:00:00', 'content' => 'Đăng xuất tài khoản IP 19.50.60.70'],
        ['id' => '012', 'time' => '2024-10-17 10:45:00', 'content' => 'Thay đổi thông tin tài khoản IP 20.60.70.80'],
    ];
}
?>
<?php

$logs_per_page = 5;

$total_logs = count(getLogs());

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start_from = ($current_page - 1) * $logs_per_page;

$logs = array_slice(getLogs(), $start_from, $logs_per_page);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhật ký hoạt động</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">

<div class="max-w-4xl mx-auto bg-white p-4 rounded-lg shadow">
    <h1 class="text-2xl font-bold mb-4">Nhật ký hoạt động</h1>
    
    <table class="table-auto w-full mb-6">
       <?php
            function paginate($total_logs, $logs_per_page, $current_page) {
                $total_pages = ceil($total_logs / $logs_per_page);
        
                if ($total_pages <= 1) {
                    return '';
                }
        
                $pagination = '<nav aria-label="Page navigation example">';
                $pagination .= '<ul class="flex items-center -space-x-px h-8 text-sm">';
        
                if ($current_page > 1) {
                    $pagination .= '<li>';
                    $pagination .= '<a href="?page=' . ($current_page - 1) . '" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
                    $pagination .= '<span class="hidden md:block">Previous</span>';
                    $pagination .= '<svg class="w-2.5 h-2.5 rtl:rotate-180 block md:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">';
                    $pagination .= '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>';
                    $pagination .= '</svg>';
                    $pagination .= '</a>';
                    $pagination .= '</li>';
                }
        
                for ($i = 1; $i <= $total_pages; $i++) {
                    $pagination .= '<li>';
                    if ($i == $current_page) {
                        $pagination .= '<a href="?page=' . $i . 'aria-current="page" class="z-10 flex items-center justify-center px-3 h-8 leading-tight text-blue-600 border border-blue-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">' . $i . '</a>';
                    } else {
                        $pagination .= '<a href="?page=' . $i . '" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">' . $i . '</a>';
                    }
                    $pagination .= '</li>';
                }
                
        
                if ($current_page < $total_pages) {
                    $pagination .= '<li>';
                    $pagination .= '<a href="?page=' . ($current_page - 1) . '" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">';
                    $pagination .= '<span class="hidden md:block">Next</span>';
                    $pagination .= '<svg class="w-3 h-3 rtl:rotate-180 block md:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">';
                    $pagination .= '<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>';
                    $pagination .= '</svg>';
                    $pagination .= '</a>';
                    $pagination .= '</li>';
                }
        
                $pagination .= '</ul>';
                $pagination .= '</nav>';
        
                return $pagination;
            }
            ?>

        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Thời gian</th>
                <th class="px-4 py-2">Nội dung</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logs as $log): ?>
                <tr class="border-b">
                    <td class="px-4 py-2"><?php echo htmlspecialchars($log['id']); ?></td>
                    <td class="px-4 py-2"><?php echo htmlspecialchars($log['time']); ?></td>
                    <td class="px-4 py-2"><?php echo htmlspecialchars($log['content']); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Phân trang -->
    <?php
    echo paginate($total_logs, $logs_per_page, $current_page);
    ?>
    
</div>

</body>
</html>
