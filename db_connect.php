<?php
// Lấy thông tin từ cấu hình Railway (Bước 1)
$servername = getenv('DB_HOST');
$username   = getenv('DB_USER');
$password   = getenv('DB_PASS');
$dbname     = getenv('DB_NAME');
$port       = 3306; // Trong Railway luôn là 3306

// Nếu đang chạy trên máy tính cá nhân (localhost) thì dùng cái này để test
if (!$servername) {
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "thegioididong";
}

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Kiểm tra
if ($conn->connect_error) {
    die("❌ Kết nối thất bại: " . $conn->connect_error);
}
echo "✅ Kết nối Database thành công!";
?>