FROM wordpress:6.5-php8.2-apache

# Copy your project into the container
COPY . /var/www/html/

# Set correct file permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 to make it accessible
EXPOSE 80
