# Sử dụng phiên bản PHP chính thức có sẵn Apache
FROM php:8.1-apache

# Copy toàn bộ code vào thư mục web của server
COPY . /var/www/html/

# Cấp quyền cho Apache đọc ghi file (để tránh lỗi permission)
RUN chown -R www-data:www-data /var/www/html

# Mở cổng 80 (Quan trọng!)
EXPOSE 80