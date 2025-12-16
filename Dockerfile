# Dùng bản PHP CLI nhẹ nhàng (Bỏ qua Apache rắc rối)
FROM php:8.1-cli

# Copy code vào thư mục app
COPY . /app
WORKDIR /app

# Lệnh quan trọng: Chạy server PHP tại đúng cái cổng mà Railway cấp ($PORT)
CMD php -S 0.0.0.0:$PORT