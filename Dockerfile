# Dockerfile para fake_php
FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libonig-dev \
    libzip-dev \
    unzip \
    && docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar el código del proyecto
COPY ./fake_site /var/www/html

# Establecer permisos si es necesario
RUN chown -R www-data:www-data /var/www/html
