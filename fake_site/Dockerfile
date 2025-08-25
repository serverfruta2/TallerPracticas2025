# Base PHP con Apache
FROM php:8.2-apache

# Instalar herramientas necesarias y Composer
RUN apt-get update && apt-get install -y unzip git curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/*

# Copiar el código del proyecto
COPY . /var/www/html/

# Instalar PHPMailer automáticamente
RUN composer require phpmailer/phpmailer

# Ajustar permisos (opcional, para evitar problemas)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Exponer puerto 80
EXPOSE 80

# Ejecutar Apache en primer plano
CMD ["apache2-foreground"]
