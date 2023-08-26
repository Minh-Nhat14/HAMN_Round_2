<?php
session_start();
session_unset(); // Xóa tất cả biến phiên làm việc
session_destroy(); // Hủy phiên làm việc

header("Location: login.php"); // Chuyển hướng về trang đăng nhập sau khi đăng xuất
?>
