<?php
// Cho phép mọi trang web gọi vào (CORS)
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Kết nối
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');
$port = 3306;

$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Lấy dữ liệu
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$products = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
}

// Trả về JSON
echo json_encode($products);
?>