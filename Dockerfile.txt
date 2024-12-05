# Use the official PHP image with Apache
FROM php:8.2-apache

# Install MySQLi extension for database connectivity
RUN docker-php-ext-install mysqli

# Copy application files to the container
COPY ./public /var/www/html

# Set environment variables for database connection (optional, replace with actual values or use Render's env setup)
ENV DB_USER=username
ENV DB_PASS=password
ENV DB_HOST=ccscloud.dlsu.edu.ph
ENV DB_NAME=SteamGames

# Set proper permissions for Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose the default HTTP port
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]