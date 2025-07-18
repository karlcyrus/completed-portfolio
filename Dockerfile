FROM wordpress:6.5-php8.2-apache

# Copy any custom plugins or themes if needed
COPY . /var/www/html/

# Give correct ownership (WordPress runs as www-data)
RUN chown -R www-data:www-data /var/www/html