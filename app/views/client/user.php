<?php
    $title = 'Trang cá nhân';
    $isfooter = false;
    ob_start();
?>
    <h1>User Page</h1>
<?php
    $content = ob_get_clean();
    include '../layout/client.php';
?>