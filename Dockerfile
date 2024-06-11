# Use the official PHP with Apache image
FROM php:7.4-apache

# Instalar extensiones de PHP necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copiar los archivos del proyecto al directorio de trabajo del contenedor
COPY . /var/www/html

# Exponer el puerto 80 para el servidor web Apache
EXPOSE 80

# Comando por defecto para iniciar Apache en primer plano al ejecutar el contenedor
CMD ["apache2-foreground"]