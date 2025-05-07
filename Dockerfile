# Use the official PHP image with Apache
FROM php:8.2.12-apache

# Install PHP extensions for MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache mod_rewrite for .htaccess
RUN a2enmod rewrite

# Copy your project files into the container's web directory
COPY ./ /var/www/html/

# Set correct permissions for Apache to access the files
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 so you can access the web server
EXPOSE 80

# Set the working directory
WORKDIR /var/www/html
