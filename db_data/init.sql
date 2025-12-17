-- Tạo bảng sản phẩm
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL
);

-- Thêm dữ liệu mẫu cho Project 2
INSERT INTO products (name, price) VALUES 
('Samsung Galaxy S24 Ultra', 28000000),
('MacBook Air M2', 24500000),
('Bàn phím cơ Keychron', 1800000);