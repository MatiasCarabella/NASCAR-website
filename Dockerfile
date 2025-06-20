FROM php:8.4-apache

# Install dependencies
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Create the necessary directory
RUN mkdir -p /var/www/html/img/user/profile_pics

# Copy your PHP code into the container
COPY . /var/www/html

# Set permissions
RUN chown -R www-data:www-data /var/www/html && \
    find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \; && \
    chmod -R 775 /var/www/html/img/user/profile_pics && \
    chown -R www-data:www-data /var/www/html/img/user/profile_pics

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80