FROM php:8.3-apache

# Install dependencies
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Set working directory
WORKDIR /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html

# Copy apache configuration file
COPY apache_default /etc/apache2/sites-available/000-default.conf

# Enable Apache modules
RUN a2enmod rewrite

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose port 80
EXPOSE 80
# Start Apache server
RUN service apache2 start
CMD ["apache2-foreground"]
