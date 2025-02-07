# Use the official PHP image with Apache server
FROM php:7.4-apache

# Install additional PHP extensions if needed (e.g., mysqli)
RUN docker-php-ext-install mysqli

# Copy the PHP app into the container
COPY . /var/www/html/

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
COPY custom-apache.conf /etc/apache2/sites-available/000-default.conf
