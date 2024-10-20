<?php
header('Content-Type: application/json');
session_unset();
session_destroy();
return ['success' => true, 'message' => 'Logout successful'];
?>
