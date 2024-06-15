FROM php:7.4-apache

# Install dependencies, if any
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your PHP code into the container
COPY . /var/www/html

# Set working directory
WORKDIR /var/www/html

# Expose port 80
EXPOSE 80