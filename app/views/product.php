<?php
    $title = 'Trang chủ | BK Store';
    $isfooter = true;
    ob_start();
?>
    <h1>product</h1>

<?php
    $content = ob_get_clean();
    include './layout/client.php';
?>